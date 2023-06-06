<?php

namespace App\Controllers;

class blotter extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'BLOTTER';
    }

    public function index()
    {
        $blotter = model("App\Models\Blotter_m",false);

        $this->data['list'] = $blotter->findAll();

        $this->data['content'] = 'blotter/index';
        return view('template', $this->data);
    }

    public function add()
    {
        if ($this->request->getMethod()=="post") 
        {
            $blotter = model("App\Models\Blotter_m",false);

            $data = $this->request->getPost();

            // // $rules = $this->gender->validationRules;
            // $rules = $resident->validationRules;

            // if (!$this->validate($rules)) 
            // {
            //     $errors = $this->validator->listErrors();
            // }
            // else
            // {
                $insert = $blotter->save($data);
            // }
        } 

        $this->data['content'] = 'blotter/add_blotter';
        return view('template', $this->data);
    }

    public function view($id=NULL)
    {
        $blotter = model("App\Models\Blotter_m",false);

        $this->data['blotter'] = $blotter->find($id);

        $this->data['content'] = 'blotter/view_blotter';
        return view('template', $this->data);
    }
}
