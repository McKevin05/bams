<?php

namespace App\Controllers;

class Asset extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title_page'] = 'ASSET';
    }

    public function getIndex()
    {
        $this->data['content'] = 'asset/index';
        return view('template', $this->data);
    }

}
