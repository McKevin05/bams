<?php

namespace App\Controllers;

class Incident extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'INCIDENT';
    }

    public function index()
    {
        $incident = model("App\Models\Incident_m",false);

        $this->data['list'] = $incident->findAll();

        $this->data['content'] = 'incident/index';
        return view('template', $this->data);
    }

    public function add()
    {
        if ($this->request->getMethod()=="post") 
        {
            $incident = model("App\Models\Incident_m",false);

            $data = $this->request->getPost();

            // // $rules = $this->gender->validationRules;
            // $rules = $resident->validationRules;

            // if (!$this->validate($rules)) 
            // {
            //     $errors = $this->validator->listErrors();
            // }
            // else
            // {
                $insert = $incident->save($data);
            // }
        } 

        $this->data['content'] = 'incident/add_incident';
        return view('template', $this->data);
    }

    public function getView($id = NULL)
    {
        $incident = model("App\Models\Incident_m",false);

        $this->data['incident'] = $incident->find($id);

        $this->data['content'] = 'incident/view_incident';
        return view('template', $this->data);
    }

}
