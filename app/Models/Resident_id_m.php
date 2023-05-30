<?php 
namespace App\Models;

use CodeIgniter\Model;

class Resident_id_m extends Model
{
    protected $table      = 'resident_id_card';
    protected $primaryKey = 'card_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "card_type",
        "card_number",
        "card_resident_info_id"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'card_created_at';
    protected $updatedField  = 'card_updated_at';
    protected $deletedField  = 'card_deleted_at';

    protected $validationRules    = [
               
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function get_resident_id($id = NULL)
    {
        $this->join('id_type', 'id_type_id = card_resident_info_id', 'left');

        $this->where('card_resident_info_id',$id);

        return $this->findAll();
    }

    

    

}