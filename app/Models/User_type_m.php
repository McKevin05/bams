<?php 
namespace App\Models;

use CodeIgniter\Model;

class User_type_m extends Model
{
    protected $table      = 'user_type';
    protected $primaryKey = 'user_type_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "user_type_code",
        "user_type_desc",
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'user_type_created_at';
    protected $updatedField  = 'user_type_updated_at';
    protected $deletedField  = 'user_type_deleted_at';

    protected $validationRules    = [
        "user_type_code"        =>['label' =>"User Code", 'rules'=> 'required'],
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $user_type = (object) array();
        $user_type->user_type_id = NULL;
        $user_type->user_type_code = "";
        $user_type->user_type_desc = "";
        return $user_type;

    }

    public function dropdown()
    {
        $options = ["" => "Select User Type"];

        $user_type = $this->findAll();

        if (count($user_type)) 
        {
            foreach ($user_type as $key => $row) 
            {
                $options[$row->user_type_id] =  $row->user_type_desc;
            }
        }

        return $options;
    }
    
}
    
 ?>