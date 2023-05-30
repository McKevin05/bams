<?php 
namespace App\Models;

use CodeIgniter\Model;

class User_m extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'user_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "user_lastname",
        "user_firstname",
        "user_middlename",
        "username",
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'user_created_at';
    protected $updatedField  = 'user_updated_at';
    protected $deletedField  = 'user_deleted_at';

    protected $validationRules    = [
        "username"        =>['label' =>"Username", 'rules'=> 'required'],
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $user = (object) array();
        $user->user_id = NULL;
        $user->user_lastname = "";
        $user->user_firstname = "";
        $user->user_middlename = "";
        $user->username = "";
        return $user;

    }

    public function login($data)
    {        
        $username = $data['username'];
        $password = $data['password'];

        $user = $this->join('user_type','user_type = user_type_id','left')
                     ->where('username',$username)
                     ->where('password',md5($password))
                     ->findAll();
        // var_dump($user);
        // var_dump($this->getLastQuery());
        // EXIT();
        if (count($user)) 
        {
            $newdata = [
                'is_login'  => 1,
                'name'      => $user[0]->user_lastname.", ".$user[0]->user_firstname,
                'id'        => $user[0]->user_id,
                'precint_id'=> $user[0]->user_precinct_id,
                'user_type' => $user[0]->user_type_desc,
                'user_type_privilege' => $user[0]->user_type_privilege,
            ];
            session()->set($newdata);   
           

            return TRUE;       
        }

        return FALSE; 
    }
    
}
    
 ?>