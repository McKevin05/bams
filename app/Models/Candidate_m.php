<?php 
namespace App\Models;

use CodeIgniter\Model;

class Candidate_m extends Model
{
    protected $table      = 'candidates';
    protected $primaryKey = 'candidate_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "candidate_lastname",
        "candidate_firstname",
        "candidate_initial",
        "candidate_position_id",
        "candidate_actived"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'candidate_created_at';
    protected $updatedField  = 'candidate_updated_at';
    protected $deletedField  = 'candidate_deleted_at';

    protected $validationRules    = [
        "candidate_lastname"     =>['label' =>"Lastname", 'rules'=> 'required'],
        "candidate_firstname"    =>['label' =>"Firstname", 'rules'=> 'required'],
        "candidate_initial"      =>['label' =>"Initial", 'rules'=> 'required'],
        "candidate_position_id"  =>['label' =>"position", 'rules'=> 'required'],
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $candidate = (object) array();
        $candidate->candidate_id = NULL;
        $candidate->candidate_lastname = "";
        $candidate->candidate_firstname = "";
        $candidate->candidate_initial = "";
        $candidate->candidate_position_id = "";

        return $candidate;

    }

    public function insert_logs($action = NULL,$data = [])
    {
        $db = db_connect();

        $log = $db->table('candidate_logs');
        $user = ['candidate_log_created_by' => "sampleUser"];

        if ($action == "ADD") 
        {
            $add_data = json_encode($data);
            $log->insert(array_merge(['candidate_log_remarks' =>$add_data,'candidate_log_action'=>$action],$user));
        }
        elseif ($action == "EDIT") 
        {
            $id = $this->getIdValue($data);
            
            $select = implode(",", array_keys($data));
            $candidate = $this->select($select)->find($id);

            $insert_logs = [];

            foreach ($data as $key => $row) 
            {
                if ($candidate->{$key} != $row) 
                {
                    $insert_logs[] = array(
                        'candidate_log_action'      => 'EDIT',
                        'candidate_log_from'        =>  $candidate->{$key},
                        'candidate_log_to'          =>  $row,
                        'candidate_log_field_name'  =>  $key,
                        'candidate_log_pk_id'       =>  $id,
                        'candidate_log_created_by'  =>  "sample"
                    );

                }
            }

            if (count($insert_logs)) 
                $log->insertBatch($insert_logs);
            
        }
        elseif ($action == "DELETE") 
        {
            $log->insert(array_merge(['candidate_log_action'=>$action],$user,$data));
        }

        $db->close();
    }

    public function save($data):bool
    {
        $id = $this->getIdValue($data);

        if ($id == NULL) 
        {
            $this->insert_logs("ADD",$data);
        }
        elseif ($id) 
        {
            $this->insert_logs("EDIT",$data);
        }

        return parent::save($data);
    }

    public function delete_data($id,$reason)
    {
        $data=array('candidate_log_pk_id' => $id,'candidate_log_remarks'=>$reason);
        
        $this->insert_logs("DELETE",$data);
        

        return parent::delete($id);
    }

    
    public function vote_review($candidates)
    {
        $vote_data = array();

        $select = "GROUP_CONCAT(candidate_id order by candidate_id) as candidate_id , GROUP_CONCAT(concat(candidate_lastname,', ',candidate_firstname)  order by candidate_id separator '|') as name ,position_desc,position_allowed_number";


        $this->select($select,TRUE)
              ->join('positions','position_id = candidate_position_id','left')
              ->join('events','event_id = position_event_id','left')
              ->where('event_actived',1)
              ->whereIn('candidate_id',explode(",",$candidates))
              ->groupBy('position_id')
              ->orderBy('position_leadership_level');
        $details = $this->findAll();

        foreach ($details as $key => $row) 
        {
            $temp_candidate_name = explode("|",$row->name);
            $temp_candidate_id   = explode(",",$row->candidate_id);

            $temp_allowed_number = $row->position_allowed_number;

            for ($v=0; $v < $temp_allowed_number ; $v++) 
            { 
                if (isset($temp_candidate_id[$v])) 
                {
                    $vote_data[$row->position_desc][] = array(
                                                        'candidate_id'=>$temp_candidate_id[$v],
                                                        'candidate_name'=>$temp_candidate_name[$v]
                                                    );
                }
                else
                {
                    $vote_data[$row->position_desc][] = array(
                                                        'candidate_id'=>0,
                                                        'candidate_name'=>"UNDERVOTE"
                                                    ); 
                }
            }
        }

        return $vote_data;
    }

    public function vote_result($precinct = NULL)
    {
        $vote_data = array();
        $filter = "";

        $this->voter_m = new \App\Models\Voter_m();
        if ($precinct) 
        {
            $this->voter_m->where('voter_precinct',$precinct);
            $filter = "inner join voters on voter_id = cast_vote_trans_voter_id and voter_precinct = {$precinct}";
        }

        $countVoter = $this->voter_m->countAllResults();

        $select = "candidate_id  ,concat(candidate_lastname,', ',candidate_firstname)  as name ,position_desc,position_allowed_number,(Select count(*) from cast_vote as A inner join cast_vote_trans B on A.cast_vote_trans_id = B.cast_vote_trans_id {$filter} where cast_vote_candidate_id = candidate_id and cast_vote_trans_status = 'DONE') as no_of_votes";


        $this->select($select,TRUE)
              ->join('positions','position_id = candidate_position_id','left')
              ->join('events','event_id = position_event_id','left')
              ->where('event_actived',1)
              ->orderBy('position_leadership_level,no_of_votes desc');
        $details = $this->findAll();

        foreach ($details as $key => $row) 
        {
            
            $vote_data[$row->position_desc][] = array(
                                                    'candidate_name'=>$row->name,
                                                    'candidate_vote' =>$row->no_of_votes,
                                                    'candidate_vote_percentage' =>$countVoter >0 ?number_format(($row->no_of_votes/$countVoter) * 100,2):0,
                                                );
        }

        return $vote_data;
    }

    public function vote_result_precinct()
    {
        $vote_data = array();

        $this->cast_vote_trans = new \App\Models\Cast_vote_trans_m();
        $this->precinct_m = new \App\Models\Precinct_m();

        $select = "precinct_name,precinct_id,(Select count(*) from cast_vote_trans as A inner join  voters on voter_id = cast_vote_trans_voter_id  inner join events on event_id = cast_vote_trans_event_id  where cast_vote_trans_status = 'DONE' and voter_precinct= precinct_id and event_actived = 1) as no_of_votes,(Select count(*) from voters where voter_precinct = precinct_id) as precinct_voters ";


        $this->precinct_m->select($select,TRUE);
        $details = $this->precinct_m->findAll();

        // var_dump($details);
        // exit();

        $no_of_votes = 0;
        $id = 0;
        $voters = 0;

        foreach ($details as $key => $row) 
        {
            $no_of_votes += $row->no_of_votes;
            $voters += $row->precinct_voters;
            
            $vote_data[$row->precinct_name] = array(
                                                    'precinct_vote'=>$row->no_of_votes,
                                                    'precinct_id'=>$row->precinct_id,
                                                    'precinct_voters' =>$row->precinct_voters,
                                                    'precinct_vote_percentage' =>$row->precinct_voters > 0 ?number_format(($row->no_of_votes/$row->precinct_voters) * 100,2):0,
                                                );
        }

        $vote_data['OVERALL'] = array(
                                    'precinct_vote'=>$no_of_votes,
                                    'precinct_id'=>$id,
                                    'precinct_voters' =>$voters,
                                    'precinct_vote_percentage' =>$voters > 0 ?number_format(($no_of_votes/$voters) * 100,2):0,
                                );

        return $vote_data;
    }
    
}
    
 ?>