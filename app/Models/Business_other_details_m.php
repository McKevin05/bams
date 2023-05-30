<?php 
namespace App\Models;

use CodeIgniter\Model;

class Business_other_detail_m extends Model
{
    protected $table      = 'business_other_details';
    protected $primaryKey = 'business_other_details_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "business_other_business_id",
        "business_tax_mapping_user",
        "business_comment",
        "business_eval_status",
        "business_clearance_no",
        "business_clearance_validity",
        "business_clearance_status",
        "business_clearance_status",
        "business_clearance_remarks",
        "business_clearance_type",
        
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'business_other_created_at';
    protected $updatedField  = 'business_other_updated_at';
    protected $deletedField  = 'business_other_deleted_at';

    protected $validationRules    = [
        
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = true;

    public function create_code()
    {   
        $code = "BC. ".date('Ymd')." Etc-";

        $this->like('business_clearance_no',$code);
        $query = $this->findAll();

        $code .= str_pad(count($query)+1, 3, "0", STR_PAD_LEFT);

        return $code;
    }

    public function list()
    {
        $this->orderBy('business_eval_status','ASC');
        $this->where('business_clearance_status',1);
        $this->join('business', 'business_other_business_id = business_id', 'left');
        $this->join('street', 'street_id = business_address_street', 'left');
        $this->join('business_line', 'business_line = business_line_id', 'left');
        return $this->findAll();
    }

    public function get($id = NULL)
    {
        $this->join('business', 'business_other_business_id = business_id', 'left');
        $this->join('street', 'street_id = business_address_street', 'left');
        $this->join('business_line', 'business_line = business_line_id', 'left');
        return $this->find($id);
    }

    public function updateInactive($businessID = NULL)
    {
        if ($businessID != NULL) 
        {
            //do update

            $update = array(
                'business_clearance_status' => 0,
                'business_other_updated_at' => date('Y-m-d h:i:s')
             );

            $this->where('business_other_business_id', $businessID);
            $this->where('business_clearance_status', 1);
            $this->update(NULL,$update);
        }
    }
    
}