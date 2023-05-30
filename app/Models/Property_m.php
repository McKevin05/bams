<?php 
namespace App\Models;

use CodeIgniter\Model;

class Property_m extends Model
{
    protected $table      = 'property';
    protected $primaryKey = 'property_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "property_type_of_property",
        "property_owner",
        "property_proof_of_ownership",
        "property_type",
        "property_floors",
        "property_units",
        "property_address_house_no",
        "property_address_street",
        "property_address_barangay",
        "property_address_city",
        "property_resident_info_id"
        
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'property_created_at';
    protected $updatedField  = 'property_updated_at';
    protected $deletedField  = 'property_deleted_at';

    protected $validationRules    = [
        
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    
    public function get_resident_property($id = NULL)
    {

        $this->where('property_resident_info_id',$id);

        return $this->findAll();
    }
}