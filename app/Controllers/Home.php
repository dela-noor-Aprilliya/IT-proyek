<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data =  array(
            'title' => 'Dashboard',
            'isi' => 'Admin/dashboard'
        );
        return view('/layout/index', $data);
    }
}
