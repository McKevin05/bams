<?php

namespace App\Controllers;

class Property extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'PROPERTIES';
    }

    public function index()
    {
        $property = model("App\Models\Property_m",false);

        $this->data['list'] = $property->findAll();

        // $this->data['javascript'] = 'property/script';
        $this->data['content']    = 'property/index';

        return view('template', $this->data);
    }

    public function add()
    {
        $street  = model("App\Models\Street_m",false);
        if ($this->request->getMethod()=="post") 
        {
            $property = model("App\Models\Property_m",false);

            $data = $this->request->getPost();

            // // $rules = $this->gender->validationRules;
            // $rules = $resident->validationRules;

            // if (!$this->validate($rules)) 
            // {
            //     $errors = $this->validator->listErrors();
            // }
            // else
            // {
                $insert = $property->save($data);
            // }
        }
        $this->data['street']     = $street->dropdown();
        $this->data['javascript'] = 'property/script';
        $this->data['content']    = 'property/add_property';
        return view('template', $this->data);
    }

    public function view($id = NULL)
    {
        $property = model("App\Models\Property_m",false);

        $this->data['property'] = $property->find($id);

        $this->data['content'] = 'property/view_property';
        return view('template', $this->data);
    }

}
