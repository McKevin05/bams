<?php 
namespace App\Models;

use CodeIgniter\Model;

class Business_m extends Model
{
    protected $table      = 'business';
    protected $primaryKey = 'business_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "business_type",
        "business_name",
        "business_owner",
        "business_dti_issued",
        "business_sec_no",
        "business_sec_issued",
        "business_tin_no",
        "business_paid_up_capital",
        "business_date_applied",
        "business_type_ownership",
        "business_category",
        "business_address_house_no",
        "business_status",
        "business_address_street",
        "business_address_barangay",
        "business_address_city",
        "business_residency",
        "business_mobile_no",
        "business_authorized_rep",
        "business_position",
        "business_office_no",
        "business_fax_no",
        "business_email",
        "business_website",
        "business_plate_no",
        "business_dti_no",
        "business_line",
        "business_resident_info_id"
        
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'business_created_at';
    protected $updatedField  = 'business_updated_at';
    protected $deletedField  = 'business_deleted_at';

    protected $validationRules    = [
        
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    
    public function get_data($id = NULL)
    {
        $this->join('street', 'street_id = business_address_street', 'left');
        $this->join('business_line', 'business_line = business_line_id', 'left');
        $this->join('business_other_details', 'business_other_business_id = business_id and business_clearance_status = 1', 'left');
        return $this->find($id);
    }

    public function get_resident_business($id = NULL)
    {
        $this->join('street', 'street_id = business_address_street', 'left');
        $this->join('business_line', 'business_line = business_line_id', 'left');
        $this->join('business_other_details', 'business_other_business_id = business_id and business_clearance_status = 1', 'left');

        $this->where('business_resident_info_id',$id);

        return $this->findAll();
    }
}