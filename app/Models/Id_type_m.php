<?php 
namespace App\Models;

use CodeIgniter\Model;

class Id_type_m extends Model
{
    protected $table      = 'id_type';
    protected $primaryKey = 'id_type_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "id_type_desc"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'id_type_created_at';
    protected $updatedField  = 'id_type_updated_at';
    protected $deletedField  = 'id_type_deleted_at';

    protected $validationRules    = [
        "id_type_desc"     =>['label' =>"Description", 'rules'=> 'required']
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $id_type = (object) array();
        $id_type->id_type_id = NULL;
        $id_type->id_type_desc = "";
        return $id_type;

    }

    public function get()
    {
        $this->select('id_type_id as ID,id_type_desc as DESC');

        return $this->findAll();
    }

    public function form($data)
    {
        $form = "<input type='text' class='form-control' name='id_type_desc'  aria-describedby='helpId' placeholder='' value='{$data->id_type_desc}'>";
        $form .= $data->id_type_id != NULL ?"<input type='hidden' class='form-control' name='id_type_id'  aria-describedby='helpId' placeholder='' value='{$data->id_type_id}'>":""; 

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
        $data = $this->get();

        $option[''] = "SELECT ID TYPE";

        foreach ($data as $key => $dataValue) 
        {
            $option[$dataValue->ID] = $dataValue->DESC;
        }

        return $option;
    }
    
}
    
 ?>