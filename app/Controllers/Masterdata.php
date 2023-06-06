<?php

namespace App\Controllers;

class Masterdata extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'MASTER DATA';

        $this->master_data_info = array(
                                    'id_type'         
                                            => array(
                                                    'label' => 'ID Type',
                                                    'model' => 'App\Models\Id_type_m'
                                                ),
                                    'gender'          
                                            => array(
                                                    'label' => 'Gender',
                                                    'model' => 'App\Models\Gender_m'
                                                ),
                                    'civil_status'    
                                            => array(
                                                    'label' => 'Civil Status',
                                                    'model' => 'App\Models\Civil_status_m'
                                                ),
                                    'sector'          
                                            => array(
                                                    'label' => 'Sector',
                                                    'model' => 'App\Models\Sector_m'
                                                ),
                                    'type_properties' 
                                            => array(
                                                    'label' => 'Type of Properties',
                                                    'model' => 'App\Models\Property_type_m'
                                                ),
                                    'type'            
                                            => array(
                                                'label' => 'Property Type',
                                                'model' => 'App\Models\Property_category_m'
                                                ),
                                    'position'        
                                            => array(
                                                    'label' => 'Position',
                                                    'model' => 'App\Models\Position_m'
                                                ),
                                    'street'          
                                            => array(
                                                    'label' => 'Street',
                                                    'model' => 'App\Models\Street_m'
                                                ),
                                    'profession'          
                                            => array(
                                                    'label' => 'Profession',
                                                    'model' => 'App\Models\Profession_m'
                                                ),
                                );

    }

    public function index()
    {
        $this->data['content'] = 'masterdata/index';
        return view('template', $this->data);
    }

    public function info($page=NULL)
    {
        if ($page == NULL) 
            return redirect()->to("masterdata");

        $info = $this->master_data_info;

        if (!isset($info[$page])) 
            return redirect()->to("masterdata");

        // load model
        $m = $info[$page]['model'];
        $this->model = model($m,false) ;

        $this->data['value']    = $this->model->get();
        $this->data['page']     = $page;
        $this->data['label']    = $info[$page]['label'];

        $this->data['content']      = 'masterdata/page';
        $this->data['javascript']   = 'masterdata/script';
        $this->data['addItemBody']  = 'masterdata/add_body';

        return view('template', $this->data);

    }

    public function view($page=NULL,$id=NULL)
    {
        $info = $this->master_data_info;

        $m = $info[$page]['model'];
        $this->model = model($m,false) ;

        if ($id == NULL) 
        {
            $value = $this->model->get_new();
            $action= "Add";
            $url   = base_url('masterdata')."/{$page}/new";
        }
        else
        {
            $value = $this->model->find($id);
            $action= "Edit";
            $url   = base_url('masterdata')."/{$page}/{$id}/update";
        }

        $this->data['value']  = $value ;
        $this->data['page']   = $page;
        $this->data['label']  = $info[$page]['label'];
        $this->data['action'] = $action;
        $this->data['form']   = $this->model->form($value);
        $this->data['url']    = $url;

        $html = view('masterdata/add_body', $this->data);

        echo json_encode(['html' => $html]);
    }

    public function save($page=NULL,$id=NULL)
    {
        $json = ['error' => false,'msg' => ""];

        $info = $this->master_data_info;

        $m = $info[$page]['model'];

        $this->model = model($m,false) ;

        if ($this->request->getMethod()=="post") 
        {
            $data = $this->request->getPost();

            $rules = $this->model->validationRules;

            if (!$this->validate($rules)) 
            {
                $errors = $this->validator->listErrors();
                $json = ['error' => true,'msg' =>"<div class='alert alert-danger'>{$errors}</div>" ];
            }
            else
            {
                $insert = $this->model->save($data);
            }
        }

        echo json_encode($json);
    }

    public function delete($page=NULL)
    {   
        $info = $this->master_data_info;

        $m = $info[$page]['model'];

        $this->model = model($m,false) ;

        $id = $this->request->getPost('id');
        $reason = $this->request->getPost('reason');

        $this->model->delete_data($id,$reason);
        return redirect()->to("masterdata/$page/page");
    }

    public function getId_type()
    {
        $this->data['addItemBody'] = 'masterdata/add_id';
        $this->data['content'] = 'masterdata/id_type';
        return view('template', $this->data);
    }
    
    public function getId_type_view()
    {
        $this->data['content'] = 'masterdata/';
        return view('template', $this->data);
    }

}
