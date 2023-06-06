<?php 
namespace App\Models;

use CodeIgniter\Model;

class Voter_m extends Model
{
    protected $table      = 'voters';
    protected $primaryKey = 'voter_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "voter_firstname",
        "voter_lastname",
        "voter_middlename",
        "voter_precinct",
        "voter_password",
        "voter_actived"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'voter_created_at';
    protected $updatedField  = 'voter_updated_at';
    protected $deletedField  = 'voter_deleted_at';

    protected $validationRules    = [
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $voter = (object) array();
        $voter->event_id = NULL;
        $voter->event_code = "";
        $voter->event_name = "";
        $voter->event_desc = "";
        $voter->event_date_start = "";
        $voter->event_date_end = "";
        $voter->event_time_start = "";
        $voter->event_time_end = "";

        return $voter;

    }

    public function login($pass = NULL)
    {
        $this->session = \Config\Services::session();
        $this->cast_vote_trans = new \App\Models\Cast_vote_trans_m();
        $this->event_m = new \App\Models\Event_m();

        $voter = $this->where('voter_password',$pass)
                      ->where('voter_actived',1)
                      ->findAll();
        if (count($voter)) 
        {
            $newdata = [
                'is_login'  => 1,
                'name'      => $voter[0]->voter_lastname.", ".$voter[0]->voter_firstname,
                'id'        => $voter[0]->voter_id,
            ];
            $this->session->set($newdata);   


            $cast_vote = $this->cast_vote_trans->where('cast_vote_trans_voter_id',$voter[0]->voter_id)->findAll();
            $cast_vote_data = array(
                                "cast_vote_trans_voter_id" => $voter[0]->voter_id,
                                "cast_vote_trans_start"    => date('Y-m-d H:i:s'),
                            );
            if (count($cast_vote)) 
            {
                $cast_vote_data = array(
                                    "cast_vote_trans_voter_id" => $voter[0]->voter_id,
                                    "cast_vote_trans_start"    => $cast_vote[0]->cast_vote_trans_start,
                                    "cast_vote_trans_id"       => $cast_vote[0]->cast_vote_trans_id,
                                    "cast_vote_trans_event_id" => $cast_vote[0]->cast_vote_trans_event_id
                                );
            }
            else
            {
                $event = $this->event_m->where('event_actived',1)->findAll();

                // var_dump($event);
                // var_dump($event[0]->event_id);
                // exit();

                $cast_vote_data["cast_vote_trans_event_id"] = $event[0]->event_id;
                $this->cast_vote_trans->save($cast_vote_data);
                $cast_vote_data['cast_vote_trans_id'] = $this->cast_vote_trans->getInsertId();
            }

            $this->session->set($cast_vote_data);   

            return TRUE;       
        }

        return FALSE; 
    }

    public function validate_pass($pass = NULL)
    {

        $count = $this->where('voter_password',$pass)->countAllResults();

        if ($count) 
        {
            $this->validate_pass(randomPassword());  
        }
        else
        {
            return $pass;
        }

    }


}
    
 ?>