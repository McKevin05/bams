<?php 
namespace App\Models;

use CodeIgniter\Model;

class Certificates_m extends Model
{
    protected $table      = 'certificates';
    protected $primaryKey = 'certificates_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "certificates_desc"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'certificates_created_at';
    protected $updatedField  = 'certificates_updated_at';
    protected $deletedField  = 'certificates_deleted_at';

    protected $validationRules    = [
        "certificates_desc"     =>['label' =>"Description", 'rules'=> 'required']
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        
        
        $certificates = (object) array();
        $certificates->certificates_id = NULL;
        $certificates->certificates_desc = "";
        $certificates->certificates_body = "";
        return $certificates;
        

    }

    public function get()
    {
        $this->select('certificates_id as ID,certificates_desc as DESC,certificates_body as BODY');
        

        return $this->findAll();
    }

    public function form($data)
    {
        $form = "<input type='text' class='form-control' name='certificates_desc'  aria-describedby='helpId' placeholder='' value='{$data->certificates_desc}'>";
        $form .= $data->certificates_id != NULL ?"<input type='hidden' class='form-control' name='certificates_id'  aria-describedby='helpId' placeholder='' value='{$data->certificates_id}'>":""; 

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
        $this->select('certificates_id as ID,certificates_desc as DESC');
        $this->where('certificates_type', 'CERTIFICATION');
        $data = $this->findAll();

        $option[''] = "Select Type of Certificate";

        foreach ($data as $key => $dataValue) 
        {
            $option[$dataValue->ID] = $dataValue->DESC;
        }

        return $option;
    }

    
    
}
    
 ?>