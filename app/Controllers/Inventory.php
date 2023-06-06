<?php

namespace App\Controllers;

class Inventory extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'Inventory';
    }

    public function getIndex()
    {

        $this->data['content'] = 'inventory/Index';
        return view('template', $this->data);
    }

    public function getAdd()
    {

        if ($this->request->getMethod()=="post") 
        {
            // $business = model("App\Models\Business_m",false);

            $data = $this->request->getPost();
            // var_dump($data);

            // // $rules = $this->gender->validationRules;
            // $rules = $resident->validationRules;

            // if (!$this->validate($rules)) 
            // {
            //     $errors = $this->validator->listErrors();
            // }
            // else
            // {
                // $insert = $business->save($data);
            // }
            // var_dump($data);
        }

        $this->data['content'] = 'inventory/add_inventory';
        return view('template', $this->data);
    }
}
