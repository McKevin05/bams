<?php 
namespace App\Models;

use CodeIgniter\Model;

class Business_line_m extends Model
{
    protected $table      = 'business_line';
    protected $primaryKey = 'business_line_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "business_line_desc"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'business_line_created_at';
    protected $updatedField  = 'business_line_updated_at';
    protected $deletedField  = 'business_line_deleted_at';

    protected $validationRules    = [
        "business_line_desc"     =>['label' =>"LINE OF BUSINESS", 'rules'=> 'required']
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $business_line = (object) array();
        $business_line->business_line_id = NULL;
        $business_line->business_line_desc = "";
        return $business_line;

    }

    public function get()
    {
        $this->select('business_line_id as ID,business_line_desc as DESC');

        return $this->findAll();
    }

    public function form($data)
    {
        $form = "<input type='text' class='form-control' name='business_line_desc'  aria-describedby='helpId' placeholder='' value='{$data->business_line_desc}'>";
        $form .= $data->business_line_id != NULL ?"<input type='hidden' class='form-control' name='business_line_id'  aria-describedby='helpId' placeholder='' value='{$data->business_line_id}'>":""; 

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
        $this->select('business_line_id as ID,business_line_desc as DESC');
        $data = $this->findAll();

        $option[''] = "CHOOSE...";

        foreach ($data as $key => $dataValue) 
        {
            $option[$dataValue->ID] = $dataValue->DESC;
        }

        return $option;
    }

    
}
    
 ?>