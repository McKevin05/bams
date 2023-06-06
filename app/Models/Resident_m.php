<?php 
namespace App\Models;

use CodeIgniter\Model;

class Resident_m extends Model
{
    protected $table      = 'resident_info';
    protected $primaryKey = 'resident_info_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        "firstname",
        "lastname",
        "middlename",
        "suffix_name",
        "gender",
        "bdate",
        "lenghtOfStay",
        "status",
        "street",
        "house_no",
        "barangay",
        "city",
        "spouse_name",
        "image",
        "living_status",
        "civil_status",
        "contact_no",
        "profession",
        "resident_code",
        "nationality"
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        "firstname"     =>['label' =>"firstname", 'rules'=> 'required|strtoupper'],
        "lastname"      =>['label' =>"lastname", 'rules'=> 'required'],
        "middlename"    =>['label' =>"middlename", 'rules'=> 'required'],
        "gender"        =>['label' =>"Gender", 'rules'=> 'required'],
        "bdate"         =>['label' =>"Birthdate", 'rules'=> 'required'],
        // "lenghtOfStay"  =>['label' =>"Start Date Stay", 'rules'=> 'required'],
        // "status"        =>['label' =>"Status", 'rules'=> 'required'],
        "street"        =>['label' =>"Street", 'rules'=> 'required'],
        "house_no"      =>['label' =>"House No.", 'rules'=> 'required'],
        "barangay"      =>['label' =>"Barangay", 'rules'=> 'required'],
        // "city"          =>['label' =>"City", 'rules'=> 'required'],
       
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_new()
    {
        $resident = (object) array();
        $resident->resident_info_id = NULL;

        $resident->firstname    = "";
        $resident->lastname     = "";
        $resident->gender       = "";
        $resident->middlename   = "";
        $resident->bdate        = "";
        $resident->lenghtOfStay = "";
        $resident->status       = "";
        $resident->street       = "";
        $resident->house_no     = "";
        $resident->barangay     = "";
        $resident->city         = "";
        $resident->spouse_name  = "";
        $resident->image        = "";
        $resident->living_status= "";
        $resident->civil_status = "";
        $resident->suffix_name  = "";
        $resident->contact_no   = "";
        $resident->profession   = "";
        $resident->nationality  = "";
        return $resident;

    }

    public function create_code()
    {   
        $code = "BrgyR".date('Ymd')."-";

        // $this->like('business_clearance_no',$code);
        $query = $this->findAll();

        $code .= str_pad(count($query)+1, 5, "0", STR_PAD_LEFT);

        return $code;
    }

    public function get($id = NULL)
    {
        $this->join('street', 'street_desc = street', 'left');
        $this->join('gender', 'gender_desc = gender', 'left');
        $this->join('nationality', 'nationality_id = nationality', 'left');
        $this->join('civil_status', 'civil_status_id = civil_status', 'left');
        $this->join('sector', 'sector_desc = status', 'left');

        if ($id == NULL) 
         return $this->findAll();

        if ($id) 
         return $this->find($id);
    }

    public function report_resident($type = NULL)
    {
        if ($type == "senior") 
        {
            $now = date('Y-m-d');
            $this->where('bdate <=',date('Y-m-d',strtotime('-60 year', strtotime($now))));
        }
        elseif ($type == "pwd") 
        {
            $this->where('sector_desc','Persons with Disabilities');
        }
        elseif ($type == "sp") 
        {
            $this->where('sector_desc','Single Parent');
        }

        return $this->get();
    }


    public function get_resident_select2($param)
    {
        $now = date('Y-m-d');

        $this->like('concat(lastname,", ",firstname," ",middlename)',$param);

        $this->select("concat(lastname,', ',firstname,' ',middlename) as name,
                       TIMESTAMPDIFF( year,bdate, '{$now}') as age,
                       concat(house_no,' ',street_desc,' ',barangay,' ',city) as address,
                       contact_no as contact ,resident_info_id,
                       civil_status", false);


        $this->join('street', 'street_id = street', 'left');
        $resident = $this->findAll();

        $options = array();

        foreach ($resident as $key => $row) 
        {
           $options[] = array(
                              'id'      => $row->resident_info_id,
                              'name'    => strtoupper($row->name),
                              'age'     => $row->age,
                              'address' =>strtoupper($row->address),
                              'contact' =>$row->contact,
                              'civil'   =>$row->civil_status,
                            );
        } 

        return $options;
    }

    public function get_resident_selectize()
    {

        $resident = $this->findAll();
        $options = array();
        foreach ($resident as $key => $row) 
        {
           $options[$row->resident_info_id] = $row->lastname.",".$row->firstname." ".$row->middlename;
        }

        return $options;
    }

}