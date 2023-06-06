<?php 
namespace App\Models;

use CodeIgniter\Model;

class Audit_log_m extends Model
{
    protected $table      = 'audit_logs';
    protected $primaryKey = 'audit_log_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "audit_log_action", 
        "audit_log_from", 
        "audit_log_to", 
        "audit_log_field_name", 
        "audit_log_pk_id", 
        "audit_log_table"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'audit_log_created_at';
    protected $updatedField  = 'audit_log_updated_at';
    protected $deletedField  = 'audit_log_deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function insert_logs($table = NULL,$data = [],$old_data = NULL)
    {
        $db = db_connect();

        
        $user = ['audit_log_created_by' => "sampleUser"];
        
        $id = $this->getIdValue($data);
        
        $select = implode(",", array_keys($data));

        $insert_logs = [];

        foreach ($data as $key => $row) 
        {
            if ($old_data->{$key} != $row) 
            {
                $insert_logs[] = array(
                    'audit_log_action'      => 'EDIT',
                    'audit_log_from'        =>  $old_data->{$key},
                    'audit_log_to'          =>  $row,
                    'audit_log_field_name'  =>  $key,
                    'audit_log_pk_id'       =>  $id,
                    'audit_log_created_by'  =>  "sample",
                    'audit_log_table'       =>  $table
                );

            }
        }
        if (count($insert_logs)) 
            $this->insertBatch($insert_logs);
    }
}
    
?>