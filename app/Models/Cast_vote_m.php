<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cast_vote_m extends Model
{
    protected $table      = 'cast_vote';
    protected $primaryKey = 'cast_vote_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "cast_vote_voter_id", 
        "cast_vote_candidate_id", 
        "cast_vote_trans_id"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'cast_vote_created_at';
    protected $updatedField  = 'cast_vote_updated_at';
    protected $deletedField  = 'cast_vote_deleted_at';

    protected $validationRules    = [
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    
}
    
 ?>