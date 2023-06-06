<?php 
namespace App\Models;

use CodeIgniter\Model;

class Sector_m extends Model
{
    protected $table      = 'sector';
    protected $primaryKey = 'sector_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "sector_desc"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'sector_created_at';
    protected $updatedField  = 'sector_updated_at';
    protected $deletedField  = 'sector_deleted_at';

    protected $validationRules    = [
        "sector_desc"     =>['label' =>"Description", 'rules'=> 'required']
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $sector = (object) array();
        $sector->sector_id = NULL;
        $sector->sector_desc = "";
        return $sector;

    }

    public function get()
    {
        $this->select('sector_id as ID,sector_desc as DESC');

        return $this->findAll();
    }

    public function form($data)
    {
        $form = "<input type='text' class='form-control' name='sector_desc'  aria-describedby='helpId' placeholder='' value='{$data->sector_desc}'>";
        $form .= $data->sector_id != NULL ?"<input type='hidden' class='form-control' name='sector_id'  aria-describedby='helpId' placeholder='' value='{$data->sector_id}'>":""; 

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