<?php

namespace App\Controllers;

class Settings extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'SETTINGS';
    }

    public function getIndex()
    {
        $this->data['content'] = 'settings/index'; 
        return view('template', $this->data);
    }

    public function getView()
    {
        $this->data['content'] = 'settings/view';
        return view('template', $this->data);
    }

}
