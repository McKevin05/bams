<?php

namespace App\Controllers;

class Streets extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->street_m = new \App\Models\Street_m();

        $this->data['title_page'] = 'STREETS';
    }

    public function index()
    {
        $streets = $this->street_m->findAll();

        $this->data['streets'] = $streets;

        $this->data['javascript'] = 'streets/script';
        $this->data['form_add'] = base_url('streets/save');
        $this->data['form_edit'] = base_url('streets/save');
        $this->data['form_delete'] = base_url('streets/add');
        $this->data['modal'] = ['streets/modals/add_street','streets/modals/delete_street','streets/modals/edit_street'];
        $this->data['content'] = 'Streets/index';
        return view('template', $this->data);
    }

    public function save_street()
    {
        $json = ['error' => false,'msg' => ""];
        if ($this->request->getMethod()=="post") 
        {
            $data = $this->request->getPost();

            $id = $this->street_m->getInsertId();
            $rules = $this->street_m->validationRules;

            if (!$this->validate($rules)) 
            {
                $errors = $this->validator->listErrors();
                $json = ['error' => true,'msg' =>"<div class='alert alert-danger'>{$errors}</div>" ];
            }
            else
            {
              // update event  
              $insert = $this->street_m->save($data);
            }
        }

        echo json_encode($json);
    }

    public function add_street($id = NULL)
    {
        if ($id == NULL) 
            $street = $this->street_m->get_new();
        else
            $street = $this->street_m->find($id);

        $this->data['street'] = $street ;
        $html = view('modals/add_street_body', $this->data);

        echo json_encode(['html' => $html]);
    }

}
