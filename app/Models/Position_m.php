<?php 
namespace App\Models;

use CodeIgniter\Model;

class Position_m extends Model
{
    protected $table      = 'position';
    protected $primaryKey = 'position_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "position_desc",
        "position_level"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'position_created_at';
    protected $updatedField  = 'position_updated_at';
    protected $deletedField  = 'position_deleted_at';

    protected $validationRules    = [
        "position_desc"     =>['label' =>"position", 'rules'=> 'required']
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $position = (object) array();
        $position->position_id = NULL;
        $position->position_desc = "";
        $position->position_level = "";
        return $position;

    }

    public function get()
    {
        $this->select("position_id as ID,concat(position_desc,'<br><b>Level: </b>',position_level) as `DESC`");

        return $this->findAll();
    }

    public function form($data)
    {
        $form = "<input type='text' class='form-control' name='position_desc'  aria-describedby='helpId' placeholder='' value='{$data->position_desc}'>";
        $form .= "<input type='number' class='form-control mt-3' name='position_level'  aria-describedby='helpId' placeholder='' value='{$data->position_level}'>";
        $form .= $data->position_id != NULL ?"<input type='hidden' class='form-control' name='position_id'  aria-describedby='helpId' placeholder='' value='{$data->position_id}'>":""; 

        return $form;
    }

    public function insert_logs($action = NULL,$data = [])
    {
        if ($action == "ADD") 
        {
            $add_data = json_encode($data);
            // $log->insert(array_merge(['candidate_log_remarks' =>$add_data,'candidate_log_action'=>$action],$user));
        }
        elseif ($action == "EDIT") 
        {
            $audit_logs_m = new \App\Models\Audit_log_m();

            $id = $this->getIdValue($data);
            $old_data = $this->find($id);
            
            //insert audit logs
            $audit_logs_m->insert_logs($this->table,$data,$old_data);

            
            
        }
        elseif ($action == "DELETE") 
        {
            // $log->insert(array_merge(['candidate_log_action'=>$action],$user,$data));
        }

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
        return parent::delete($id);
    }

    
}
    
 ?>