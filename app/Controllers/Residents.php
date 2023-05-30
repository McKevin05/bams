<?php

namespace App\Controllers;

class Residents extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        helper('my');

        $this->data['title_page'] = 'RESIDENTS';
    }

    public function index()
    {
        $resident = model("App\Models\Resident_m",false);

        $search = array(
            ''=>'Choose...',
            'lastname'          => "Last Name",
            'firstname'         => "First Name",
            'civil_status_desc' => "Civil Status",
            'age'               => "Age",
            'status'            => "Status",
            'profession'        => "Profession",
            'street'            => "Street",
        );  

        $searchR = false;


        if ($this->request->getMethod()=="post") 
        {
            $data = $this->request->getPost();

            if ($data['by'] != "age") 
            {
                $resident->like($data['by'] ,$data['search_text']);
                $searchR = true;
            }
            else
            {
                $from = $data['from'];
                $to   = $data['to'];
                $now  = date('Y-m-d');
                $resident->where("TIMESTAMPDIFF( year,bdate, '{$now}') >= $from");
                $resident->where("TIMESTAMPDIFF( year,bdate, '{$now}') <= '{$to}'");

                $searchR = true;
            }


            // ->getLastQuery()
        }

        // var_dump($data);

        $this->data['list']       = $resident->get();
        $this->data['search']     = $search;
        $this->data['searchR']    = $searchR;
        $this->data['content']    = 'residents/index';
        $this->data['javascript'] = 'residents/index_script';

        session()->set("residentLastQuery",$resident->getLastQuery()->getQuery());

        // var_dump($this->data);
        return view('template', $this->data);
    }

    public function add()
    {
        $gender         = model("App\Models\Gender_m",false);
        $civil_status   = model("App\Models\Civil_status_m",false);
        $resident       = model("App\Models\Resident_m",false);
        $street         = model("App\Models\Street_m",false);
        $profession     = model("App\Models\Profession_m",false);
        $id_type        = model("App\Models\Id_type_m",false);
        $status         = model("App\Models\Sector_m",false);
        $id             = model("App\Models\Resident_id_m",false);
        $dependencies   = model("App\Models\Resident_dependencies_m",false);
        $nationality    = model("App\Models\Nationality_m",false);

        $residentData   = $resident->get_new();

        $errors = [];
        // 
        if ($this->request->getMethod()=="post") 
        {
            $data = $this->request->getPost();
            $file = $this->request->getFile('resident_img');
           
            $rules = $resident->validationRules;

            if (!$this->validate($rules)) 
            {
                $errors = $this->validator->listErrors();
            }
            else
            {
                $data['resident_code'] = $resident->create_code();
                $insert = $resident->save($data);

                $insertId = $resident->getInsertID();

                if ($insertId) 
                {
                    // var_dump($file);
                    if ($file->isValid()) 
                    {
                        if (!$file->hasMoved()) {
                            $ext     =$file->guessExtension();
                            $newName = $insertId.".".$ext;
                            $file->move(WRITEPATH . 'upload/resident', $newName);

                            $image['image']            = $newName;
                            $image['resident_info_id'] = $insertId;

                            $insert = $resident->save($image);
                        }
                    }

                    //insert ID
                    if(isset($data['child']))
                    {
                        if(count($data['child']))
                        {
                            $idData = update_arr_val($data['id'],'card_resident_info_id',$insertId);
                            $id->insertBatch($idData);
                        }
                    }

                    //insert Child
                    if(isset($data['child']))
                    {
                        if(count($data['child']))
                        {
                            $dependenciesData = update_arr_val($data['child'],'dependencies_resident_info_id',$insertId);
                            $dependencies->insertBatch($dependenciesData);
                        }
                    }

                    return redirect()->to("residents/view/{$insertId}");


                }
            }
        }

        $this->data['resident']     = $residentData;
        $this->data['civil_status'] = $civil_status->dropdown();
        $this->data['status']       = $status->dropdown();
        $this->data['gender']       = $gender->dropdown();
        $this->data['street']       = $street->dropdown();
        $this->data['profession']   = $profession->dropdown();
        $this->data['id_type']      = $id_type->dropdown();
        $this->data['nationality']  = $nationality->dropdown();
        $this->data['errors']       = $errors;
        
        // var_dump($residentData);

        $this->data['javascript'] = 'residents/script';
        $this->data['content']    = 'residents/add_profile';

        return view('template', $this->data);
    }

    public function view($id = NULL)
    {
        $resident = model("App\Models\Resident_m",false);
        $business = model("App\Models\Business_m",false);
        $property = model("App\Models\Property_m",false);
        $residentD= model("App\Models\Resident_dependencies_m",false);
        $ids      = model("App\Models\Resident_id_m",false);
        $cert     = model("App\Models\Request_certificates_m",false);

        $this->data['profile']    = $resident->get($id);
        $this->data['property']   = $property->get_resident_property($id);;
        $this->data['family']     = $residentD->get_resident_dependecies($id);
        $this->data['ids']        = $ids->get_resident_id($id);
        $this->data['cert']       = $cert->get_cert($id);
        $this->data['business']   = $business->get_resident_business($id);
        $this->data['cases']      = [];

        $this->data['content'] = 'residents/view_profile';

        // var_dump($this->data);
        return view('template', $this->data); 
    }


    public function get()
    {
        $resident = model("App\Models\Resident_m",false);

        $data = $this->request->getGet();

        if ($data) 
        {
            $list = $resident->get_resident_select2($data['search']);

            echo json_encode($list);
        }
    }

    public function report()
    {
        $db = db_connect();
        $query =  $db->query(session()->get('residentLastQuery'));

        $this->data['list'] = $query->getResult();


        $this->data['body_print'] = 'residents/report';
        $this->data['print'] = 'template_print_with_header';
        $this->data['content']    = 'residents/report';
        $this->data['javascript'] = 'residents/script';

        return view('template', $this->data);

    }

    


}
