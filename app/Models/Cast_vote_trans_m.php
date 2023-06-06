<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cast_vote_trans_m extends Model
{
    protected $table      = 'cast_vote_trans';
    protected $primaryKey = 'cast_vote_trans_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        
        "cast_vote_trans_voter_id", 
        "cast_vote_trans_start", 
        "cast_vote_trans_end", 
        "cast_vote_trans_status", 
        "cast_vote_trans_precint" ,
        "cast_vote_trans_event_id"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'cast_vote_trans_created_at';
    protected $updatedField  = 'cast_vote_trans_updated_at';
    protected $deletedField  = 'cast_vote_trans_deleted_at';

    protected $validationRules    = [
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;



    
}
    
 ?>