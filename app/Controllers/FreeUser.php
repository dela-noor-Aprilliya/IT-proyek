<?php

namespace App\Controllers;

use App\Models\DataBatakoModel;

class FreeUser extends BaseController
{
    public function index()
    {
        $model = new DataBatakoModel();
        $data['batako'] = $model -> findAll();
        return view('/FreeUser/beranda', $data);
    }

    public function kontak()
    {
        return view('/FreeUser/kontak');
    }

    public function tentangkami()
    {
        return view('/FreeUser/tentangkami');
    }
}


