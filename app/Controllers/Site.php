<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['barangay_name'] ="";
    }

    public function getIndex()
    {

        $errors = [];

        if ($this->request->getMethod()=="post") 
        {
            $user_m = new \App\Models\User_m();
            $data   = $this->request->getPost();

            // $rules = $this->gender->validationRules;
            $rules = $user_m->validationRules;

            if (!$this->validate($rules)) 
            {
                $errors = $this->validator->listErrors();
            }
            else
            {
                if ($user_m->login($data)) 
                    return redirect()->to('residents');
                else
                    session()->setFlashdata('error', 'Account Does not exist.');
            }
            // $user$user_m->login($data);

            
        }

        $this->data['login']   = TRUE;
        $this->data['errors']  = $errors;
        $this->data['content'] = 'login/index';

        return view('template', $this->data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('site');
    }
}
