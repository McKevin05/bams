<?php 
namespace App\Models;

use CodeIgniter\Model;

class Event_m extends Model
{
    protected $table      = 'events';
    protected $primaryKey = 'event_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "event_code",
        "event_name",
        "event_desc",
        "event_date_start",
        "event_date_end",
        "event_time_start",
        "event_time_end",
        "event_actived",
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'event_created_at';
    protected $updatedField  = 'event_updated_at';
    protected $deletedField  = 'event_deleted_at';

    protected $validationRules    = [
        "event_code"        =>['label' =>"Event Code", 'rules'=> 'required','errors' => ['is_unique'=>'Event Code Already Exist']],
        "event_name"        =>['label' =>"Event Name", 'rules'=> 'required'],
        "event_desc"        =>['label' =>"Event Desc", 'rules'=> 'required'],
        "event_date_start"  =>['label' =>"Event Date Start", 'rules'=> 'required|v_date[event_date_end]','errors' => ['v_date'=>'Date Start is Greater than Date End']],
        "event_date_end"    =>['label' =>"Event Date End", 'rules'=> 'required'],
        "event_time_start"  =>['label' =>"Event Time Start", 'rules'=> 'required|time[event_time_end]','errors' => ['time'=>'Time Start is Greater than Time End']],
        "event_time_end"    =>['label' =>"Event Time end", 'rules'=> 'required']
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $event = (object) array();
        $event->event_id = NULL;
        $event->event_code = "";
        $event->event_name = "";
        $event->event_desc = "";
        $event->event_date_start = "";
        $event->event_date_end = "";
        $event->event_time_start = "";
        $event->event_time_end = "";

        return $event;

    }

    public function insert_logs($action = NULL,$data = [])
    {
        $db = db_connect();

        $log = $db->table('event_logs');
        $user = ['event_log_created_by' => "sampleUser"];

        if ($action == "ADD") 
        {
            $add_data = json_encode($data);
            $log->insert(array_merge(['event_log_remarks' =>$add_data,'event_log_action'=>$action],$user));
        }
        elseif ($action == "EDIT") 
        {
            $id = $this->getIdValue($data);
            
            $select = implode(",", array_keys($data));
            $event = $this->select($select)->find($id);

            $insert_logs = [];

            foreach ($data as $key => $row) 
            {
                if ($event->{$key} != $row) 
                {
                    $insert_logs[] = array(
                        'event_log_action'      => 'EDIT',
                        'event_log_from'        =>  $event->{$key},
                        'event_log_to'          =>  $row,
                        'event_log_field_name'  =>  $key,
                        'event_log_pk_id'       =>  $id,
                        'event_log_created_by'  =>  "sample"
                    );

                }
            }

            if (count($insert_logs)) 
                $log->insertBatch($insert_logs);
            
        }
        elseif ($action == "DELETE") 
        {
            $log->insert(array_merge(['event_log_action'=>$action],$user,$data));
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

    public function delete_event($id,$reason)
    {
        $data=array('event_log_pk_id' => $id,'event_log_remarks'=>$reason);
        
        $this->insert_logs("DELETE",$data);
        

        return parent::delete($id);
    }

    public function event_dropdown()
    {
        $options = ["" => "Select Events"];

        $event = $this->findAll();

        if (count($event)) 
        {
            foreach ($event as $key => $row) 
            {
                $options[$row->event_id] =  $row->event_code;
            }
        }

        return $options;
    }

    
}
    
 ?>