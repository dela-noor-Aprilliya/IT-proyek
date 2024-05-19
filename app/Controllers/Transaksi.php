<?php

namespace App\Controllers;

class Transaksi extends BaseController
{
    public function index()
    {
        $data =  array(
            'title' => 'Transaksi',
            'isi' => 'Admin/transaksi'
        );
        
       return view('/layout/index', $data);
    }
}
