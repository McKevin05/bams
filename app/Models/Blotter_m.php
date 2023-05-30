<?php 
namespace App\Models;

use CodeIgniter\Model;

class Blotter_m extends Model
{
    protected $table      = 'blotter';
    protected $primaryKey = 'blotter_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'blotter_incident_start',
        'blotter_complaint_recommendation',
        'blotter_complaint_status',
        'blotter_nature_of_complaint',
        'blotter_complaint_name',
        'blotter_complaint_contact_no',
        'blotter_complaint_address',
        'blotter_respondent_name',
        'blotter_respondent_contact_no',
        'blotter_respondent_address' ,
        'blotter_barangay_case_no'
        
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'blotter_created_at';
    protected $updatedField  = 'blotter_updated_at';
    protected $deletedField  = 'blotter_deleted_at';

    protected $validationRules    = [
        
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    

}