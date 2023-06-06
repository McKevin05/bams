<?php 
namespace App\Models;

use CodeIgniter\Model;

class Incident_m extends Model
{
    protected $table      = 'incident';
    protected $primaryKey = 'incident_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "incident_datetime",
        "incident_action_taken",
        "incident_incharge",
        "incident_description"
        
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'incident_created_at';
    protected $updatedField  = 'incident_updated_at';
    protected $deletedField  = 'incident_deleted_at';

    protected $validationRules    = [
        
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    

}