<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;


class Login extends Controller
{
    public function index()
    {
        return view('FreeUser/login');
    }

    public function ceklogin()
    {

        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();
// dd($password);
        if ($user && ($password == $user['password'])) {
            $session->set(['username' => $username, 'level' => $user['level']]);
            return redirect()->to('/');
        } else {
            $session->setFlashdata('error', 'Invalid username or password');
            return redirect()->back();
        }
    }
}
