<?php

namespace App\Controllers;

class DataBatako extends BaseController
{
    public function index()
    {
        $data =  array(
            'title' => 'Data Batako',
            'isi' => 'Admin/databatako'
        );
        
       return view('/layout/index', $data);
    }
}
