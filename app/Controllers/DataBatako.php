<?php

namespace App\Controllers;

use App\Models\DataBatakoModel;

class DataBatako extends BaseController
{
    public function index()
    {
        // if(session()->get('level') != 'admin' && session()->get('level') != 'owner'){
        //     return redirect()->to('FreeUser/login');

        // }
        $model = new DataBatakoModel();
        $data =  array(
            'title' => 'Data Batako',
            'isi' => 'Admin/databatako',
            'DataBatako' => $model->findAll()
        );

        return view('/layout/index', $data);
    }

    public function TambahBatako()
    {
        $session = session();
        $model = new DataBatakoModel();

        // Validasi input
        $validation = \Config\Services::validation();
        
        // Proses upload file foto
        $foto = $this->request->getFile('foto');
        if (true) {
            $fotoName = '$foto->getRandomName()';
            if (true) {
                // File successfully moved
                $data = [
                    'nama_batako' => $this->request->getPost('nama_batako'),
                    'stok' => $this->request->getPost('stok'),
                    'harga' => $this->request->getPost('harga'),
                ];
                $file = $this->request->getFile('foto_transaksi');
                if ($file && $file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move(FCPATH . 'uploads', $newName);
                    $data['foto'] = $newName;
                }
                // Menyimpan data
                if ($model->insert($data)) {
                    // Jika berhasil
                    $session->setFlashdata('success', 'Data batako berhasil ditambahkan.');
                } else {
                    // Jika gagal
                    $session->setFlashdata('error', 'Gagal menambahkan data batako.');
                }
            } else {
                // Jika gagal memindahkan file
                $session->setFlashdata('error', 'Gagal memindahkan foto.');
            }
        } else {
            // Jika gagal upload file foto
            $session->setFlashdata('error', 'Gagal mengupload foto.');
        }

        return redirect()->back();
    }

    public function editBatako($id)
    {
        $model = new DataBatakoModel();
    
        // Get data from the request
        $data = [
            'id' => $id,
            'nama_batako' => $this->request->getPost('nama_batako'),
            'stok' => $this->request->getPost('stok'),
            'harga' => $this->request->getPost('harga')
        ];
    
        // Handle the photo upload
        $file = $this->request->getFile('foto_transaksi');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads', $newName);
            $data['foto'] = $newName;
        }
    
        // Update the entry
        if ($model->update($id, $data)) {
            return redirect()->back()->with('success', 'Data batako berhasil di edit.');
        } else {
            return redirect()->back()->with('error', 'Gagal mengedit data batako.');
        }
    }

    public function hapusBatako($id)
    {
        $model = new DataBatakoModel();
    
    if ($model->find($id)) {
        $model->delete($id);
        session()->setFlashdata('success', 'Data batako berhasil di hapus.');
    } else {
        session()->setFlashdata('error', 'Gagal menghapus data batako.');
    }
    return redirect()->back();
    }
}