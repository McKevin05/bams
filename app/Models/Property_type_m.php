<?php 
namespace App\Models;

use CodeIgniter\Model;

class Property_type_m extends Model
{
    protected $table      = 'property_type';
    protected $primaryKey = 'property_type_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "property_type_desc"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'property_type_created_at';
    protected $updatedField  = 'property_type_updated_at';
    protected $deletedField  = 'property_type_deleted_at';

    protected $validationRules    = [
        "property_type_desc"     =>['label' =>"Description", 'rules'=> 'required']
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $property_type = (object) array();
        $property_type->property_type_id = NULL;
        $property_type->property_type_desc = "";
        return $property_type;

    }

    public function get()
    {
        $this->select('property_type_id as ID,property_type_desc as DESC');

        return $this->findAll();
    }

    public function form($data)
    {
        $form = "<input type='text' class='form-control' name='property_type_desc'  aria-describedby='helpId' placeholder='' value='{$data->property_type_desc}'>";
        $form .= $data->property_type_id != NULL ?"<input type='hidden' class='form-control' name='property_type_id'  aria-describedby='helpId' placeholder='' value='{$data->property_type_id}'>":""; 

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