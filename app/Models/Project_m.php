<?php 
namespace App\Models;

use CodeIgniter\Model;

class Project_m extends Model
{
    protected $table      = 'projects';
    protected $primaryKey = 'project_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "project_description",
        "project_objectives",
        "project_beneficiaries",
        "project_budget",
        "project_date_start",
        "project_date_end",
        "project_no_of_days",
        "project_year",
        "project_category",
        "project_scope",
        "project_proponent",
        "project_feedback",
        "project_title",
        
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'project_created_at';
    protected $updatedField  = 'project_updated_at';
    protected $deletedField  = 'project_deleted_at';

    protected $validationRules    = [
        
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    

}