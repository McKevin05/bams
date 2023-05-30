<?php

namespace App\Controllers;

class Project extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'PROJECT';
    }

    public function index()
    {
        // $project = model("App\Models\Project_m",false);


        // $this->data['list']    = $project->findAll();
        $this->data['content'] = 'project/index';
        return view('template', $this->data);
    }

    public function year($year = NULL)
    {
        $project = model("App\Models\Project_m",false);

        $project->where('project_year', $year);
        $this->data['list']    = $project->findAll();
        $this->data['content'] = 'project/year';
        return view('template', $this->data);
    }

    public function add()
    {

        if ($this->request->getMethod()=="post") 
        {
            $project = model("App\Models\Project_m",false);

            $data = $this->request->getPost();

            // // $rules = $this->gender->validationRules;
            // $rules = $resident->validationRules;

            // if (!$this->validate($rules)) 
            // {
            //     $errors = $this->validator->listErrors();
            // }
            // else
            // {
                $insert = $project->save($data);
            // }
            // var_dump($data);
        }    

        $this->data['content'] = 'project/add_project';
        return view('template', $this->data);
    }

    public function view($id=NULL)
    {
        $project = model("App\Models\Project_m",false);

        $this->data['project']    = $project->find($id);
        $this->data['content'] = 'project/view_project';
        return view('template', $this->data);
    }

    public function download_aip($year = null)
    {
        $project = model("App\Models\Project_m",false);
        
        $project->where('project_year',$year);
        
        $this->data['aip'] = $project->findAll();
        // $this->data['title_print'] = 'AIP '.$year;
        // $this->data['body_print']  = 'project/aip';
        $this->data['content'] = 'project/aip';
        // Prepare the Excel filename
        $filename = 'API - '.$year.".xls";

        // Set the Excel headers
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment;Filename=" . $filename);
       
        return view('template_excel', $this->data);

    }

}
