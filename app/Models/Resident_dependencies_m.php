<?php 
namespace App\Models;

use CodeIgniter\Model;

class Resident_dependencies_m extends Model
{
    protected $table      = 'resident_dependecies';
    protected $primaryKey = 'dependencies_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "dependencies_name",
        "dependencies_bdate",
        "dependencies_gender",
        "dependencies_resident_info_id"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'dependencies_created_at';
    protected $updatedField  = 'dependencies_updated_at';
    protected $deletedField  = 'dependencies_deleted_at';

    protected $validationRules    = [
               
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function get_resident_dependecies($id = NULL)
    {
        $this->where('dependencies_resident_info_id',$id);

        return $this->findAll();
    }

    

    

}