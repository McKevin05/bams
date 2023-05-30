<?php 
namespace App\Models;

use CodeIgniter\Model;

class Civil_status_m extends Model
{
    protected $table      = 'civil_status';
    protected $primaryKey = 'civil_status_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "civil_status_desc"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'civil_status_created_at';
    protected $updatedField  = 'civil_status_updated_at';
    protected $deletedField  = 'civil_status_deleted_at';

    protected $validationRules    = [
        "civil_status_desc"     =>['label' =>"CIVIL STATUS", 'rules'=> 'required']
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $civil_status = (object) array();
        $civil_status->civil_status_id = NULL;
        $civil_status->civil_status_desc = "";
        return $civil_status;

    }

    public function get()
    {
        $this->select('civil_status_id as ID,civil_status_desc as DESC');

        return $this->findAll();
    }

    public function form($data)
    {
        $form = "<input type='text' class='form-control' name='civil_status_desc'  aria-describedby='helpId' placeholder='' value='{$data->civil_status_desc}'>";
        $form .= $data->civil_status_id != NULL ?"<input type='hidden' class='form-control' name='civil_status_id'  aria-describedby='helpId' placeholder='' value='{$data->civil_status_id}'>":""; 

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

    public function dropdown()
    {
        $this->select('civil_status_id as ID,civil_status_desc as DESC');
        $data = $this->findAll();

        $option[''] = "Choose...";

        foreach ($data as $key => $dataValue) 
        {
            $option[$dataValue->ID] = $dataValue->DESC;
        }

        return $option;
    }

    
}
    
 ?>