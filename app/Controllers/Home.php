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
        echo view('/layout/header', $data);
        echo view('/layout/sidebar', $data);
        echo view('/Admin/dashboard', $data);
        echo view('/layout/footer', $data);
    }
}
