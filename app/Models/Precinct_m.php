<?php 
namespace App\Models;

use CodeIgniter\Model;

class Precinct_m extends Model
{
    protected $table      = 'precincts';
    protected $primaryKey = 'precinct_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "precinct_name",
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'precinct_created_at';
    protected $updatedField  = 'precinct_updated_at';
    protected $deletedField  = 'precinct_deleted_at';

    protected $validationRules    = [
        "precinct_name"        =>['label' =>"Precinct Name", 'rules'=> 'required'],
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $precinct = (object) array();
        $precinct->precinct_id = NULL;
        $precinct->precinct_name = "";
        return $precinct;

    }

    public function dropdown()
    {
        $options = ["" => "Select Precinct"];

        $precinct = $this->findAll();

        if (count($precinct)) 
        {
            foreach ($precinct as $key => $row) 
            {
                $options[$row->precinct_id] =  $row->precinct_name;
            }
        }

        return $options;
    }

    
}
    
 ?>