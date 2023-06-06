<?php 
namespace App\Models;

use CodeIgniter\Model;


class Request_certificates_m extends Model
{
    protected $table      = 'request_certificates';
    protected $primaryKey = 'request_certificates_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "request_certificates_cert_id",
        "name",
        "age",
        "civil_status",
        "located_address",
        "issued",
        "request_certificate_resident_id"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'request_certificates_created_at';
    protected $updatedField  = 'request_certificates_updated_at';
    protected $deletedField  = 'request_certificates_deleted_at';

    protected $validationRules    = [
        "request_certificates_cert_id"  =>['label' =>"Name", 'rules'=> 'required'],
        "name"                          =>['label' =>"Name", 'rules'=> 'required'],
        "age"                           =>['label' =>"Age", 'rules'=> 'required|integer'],
        "civil_status"                  =>['label' =>"Civil Status", 'rules'=> 'required'],
        "located_address"               =>['label' =>"Location Address", 'rules'=> 'required'],
        "issued"                        =>['label' =>"Issued", 'rules'=> 'required']
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $request_certificates = (object) array();
        $request_certificates->request_certificates_id = NULL;
        $request_certificates->request_certificates_cert_id = "";
        $request_certificates->name = "";
        $request_certificates->age = "";
        $request_certificates->civil_status = "";
        $request_certificates->location_address = "";
        $request_certificates->date_applied = "";
        return $request_certificates;

    }

    public function get()
    {   
        $this->join('certificates', 'request_certificates_cert_id = certificates_id', 'left');
        $this->select('*');

        return $this->findAll();
    }

    public function get_data($id)
    {   
        $this->join('certificates', 'certificates_id = request_certificates_cert_id', 'left');
        $this->join('civil_status', 'civil_status = civil_status_id', 'left');
        $this->where('request_certificates_id', $id);
        $this->select('*');
        return $this->find();
    }

    public function get_cert($id)
    {   
        $this->join('certificates', 'certificates_id = request_certificates_cert_id', 'left');
        $this->join('civil_status', 'civil_status = civil_status_id', 'left');
        $this->where('request_certificate_resident_id', $id);
        $this->select('*');
        return $this->find();
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
    
}
    
 ?>