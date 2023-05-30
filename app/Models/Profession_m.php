<?php 
namespace App\Models;

use CodeIgniter\Model;

class Profession_m extends Model
{
    protected $table      = 'profession';
    protected $primaryKey = 'profession_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "profession_desc"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'profession_created_at';
    protected $updatedField  = 'profession_updated_at';
    protected $deletedField  = 'profession_deleted_at';

    protected $validationRules    = [
        "profession_desc"     =>['label' =>"Description", 'rules'=> 'required']
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $profession = (object) array();
        $profession->profession_id = NULL;
        $profession->profession_desc = "";
        return $profession;

    }

    public function get()
    {
        $this->select('profession_id as ID,profession_desc as DESC');

        return $this->findAll();
    }

    public function form($data)
    {
        $form = "<input type='text' class='form-control' name='profession_desc'  aria-describedby='helpId' placeholder='' value='{$data->profession_desc}'>";
        $form .= $data->profession_id != NULL ?"<input type='hidden' class='form-control' name='profession_id'  aria-describedby='helpId' placeholder='' value='{$data->profession_id}'>":""; 

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

        $option[''] = "Choose...";

        foreach ($data as $key => $dataValue) 
        {
            $option[$dataValue->DESC] = $dataValue->DESC;
        }

        return $option;
    }

    
}
    
 ?>