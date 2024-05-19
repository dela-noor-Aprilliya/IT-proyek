<?php

namespace App\Controllers;

class DataUser extends BaseController
{
    public function index()
    {
        $data =  array(
            'title' => 'Data User',
            'isi' => 'Admin/datauser'
        );
        
       return view('/layout/index', $data);
    }
}
