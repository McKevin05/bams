<?php 
namespace App\Models;

use CodeIgniter\Model;

class Gender_m extends Model
{
    protected $table      = 'gender';
    protected $primaryKey = 'gender_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "gender_desc"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'gender_created_at';
    protected $updatedField  = 'gender_updated_at';
    protected $deletedField  = 'gender_deleted_at';

    protected $validationRules    = [
        "gender_desc"     =>['label' =>"Description", 'rules'=> 'required']
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $gender = (object) array();
        $gender->gender_id = NULL;
        $gender->gender_desc = "";
        return $gender;

    }

    public function get()
    {
        $this->select('gender_id as ID,gender_desc as DESC');

        return $this->findAll();
    }

    public function form($data)
    {
        $form = "<input type='text' class='form-control' name='gender_desc'  aria-describedby='helpId' placeholder='' value='{$data->gender_desc}'>";
        $form .= $data->gender_id != NULL ?"<input type='hidden' class='form-control' name='gender_id'  aria-describedby='helpId' placeholder='' value='{$data->gender_id}'>":""; 

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
        $this->select('gender_id as ID,gender_desc as DESC');
        $data = $this->findAll();

        $option[''] = "Choose...";

        foreach ($data as $key => $dataValue) 
        {
            $option[$dataValue->DESC] = $dataValue->DESC;
        }

        return $option;
    }

    
}
    
 ?>