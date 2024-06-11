<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\Pembeli;

class Transaksi extends BaseController
{
    public function index()
    {
        $model = new TransaksiModel();
        $dataPembeli = new Pembeli();
        $data = [
            'title' => 'Transaksi',
            'isi' => 'Admin/transaksi',
            'transaksi' => $model->findAll(),
            'pembeli' => $dataPembeli->findAll()
        ];

        return view('layout/index', $data);
    }

    public function tambahTransaksi()
    {
        $session = session();
        $model = new TransaksiModel();

        $foto = $this->request->getFile('foto_transaksi');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $fotoName = $foto->getRandomName();
            if ($foto->move(FCPATH . 'uploads', $fotoName)) {
                // File successfully moved
                $data = [
                    'nama_pembeli' => $this->request->getPost('nama_pembeli'),
                    'id_pembeli' => $this->request->getPost('id_pembeli') ? $this->request->getPost('id_pembeli') : null,
                    'no_hp' => $this->request->getPost('no_hp'),
                    'tanggal_transaksi' => date('Y-m-d'), // assuming the transaction date is the current date
                    'total_harga' => $this->request->getPost('total_harga'),
                    'status_pembayaran' => $this->request->getPost('status_pembayaran'),
                    'foto_transaksi' => $fotoName
                ];


                // Menyimpan data
                if ($model->insert($data)) {
                    // dd($data);
                    // Jika berhasil
                    $session->setFlashdata('success', 'Data transaksi berhasil ditambahkan.');
                } else {
                    // Jika gagal
                    $session->setFlashdata('error', 'Gagal menambahkan data transaksi.');
                }
            } else {
                // Jika gagal memindahkan file
                $session->setFlashdata('error', 'Gagal memindahkan foto.');
            }
        } else {
            // Jika gagal upload file foto
            $session->setFlashdata('error', 'Gagal mengupload foto.');
        }


        return redirect()->to('/Transaksi/index'); // Mengarahkan kembali ke halaman form transaksi
    }

    public function editTransaksi($id_transaksi)
    {
        $model = new TransaksiModel();

        // Get data from the request
        $data = [
            // 'id_transaksi' => $id_transaksi,
            // 'id_pembeli' => $this->request->getPost('id_pembeli') ? $this->request->getPost('id_pembeli') : null,
            'id_transaksi' => $this->request->getPost('id_transaksi'),
            'nama_pembeli' => $this->request->getPost('nama_pembeli'),
            'no_hp' => $this->request->getPost('no_hp'),
            'tanggal_transaksi' => date('Y-m-d'), // assuming the transaction date is the current date
            'total_harga' => $this->request->getPost('total_harga'),
            'status_pembayaran' => $this->request->getPost('status_pembayaran'),
        ];

        // Handle the photo upload
        $file = $this->request->getFile('foto_transaksi');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads', $newName);
            $data['foto_transaksi'] = $newName;
        }

        // dd($data);
        // Update the entry
        if ($model->update($id_transaksi, $data)) {
            // dd($data);
            return redirect()->back()->with('success', 'Data berhasil diedit');
        } else {
            return redirect()->back()->with('error', 'Gagal mengedit data');
        }
    }

    // public function editTransaksi($id_transaksi)
    // {
    //     $session = session();
    //     $model = new TransaksiModel();

    //     $foto = $this->request->getFile('foto_transaksi');
    //     if ($foto && $foto->isValid() && !$foto->hasMoved()) {
    //         $fotoName = $foto->getRandomName();
    //         if ($foto->move(FCPATH . 'uploads', $fotoName)) {
    //             // File successfully moved
    //             $data = [
    //                 'nama_pembeli' => $this->request->getPost('nama_pembeli'),
    //                 'id_pembeli' => $this->request->getPost('id_pembeli') ? $this->request->getPost('id_pembeli') : null,
    //                 'no_hp' => $this->request->getPost('no_hp'),
    //                 'tanggal_transaksi' => date('Y-m-d'), // assuming the transaction date is the current date
    //                 'total_harga' => $this->request->getPost('total_harga'),
    //                 'status_pembayaran' => $this->request->getPost('status_pembayaran'),
    //                 'foto_transaksi' => $fotoName
    //             ];

    //             // Menyimpan data
    //             if ($model->update($id_transaksi, $data)) {
    //                 // Jika berhasil
    //                 $session->setFlashdata('success', 'Data transaksi berhasil diubah.');
    //             } else {
    //                 // Jika gagal
    //                 $session->setFlashdata('error', 'Gagal mengubah data transaksi.');
    //             }
    //         } else {
    //             // Jika gagal memindahkan file
    //             $session->setFlashdata('error', 'Gagal memindahkan foto.');
    //         }
    //     } else {
    //         // Jika gagal upload file foto
    //         $session->setFlashdata('error', 'Gagal mengupload foto.');
    //     }

    //     return redirect()->to('/Transaksi/index'); // Mengarahkan kembali ke halaman form transaksi
    // }


    public function hapusTransaksi($id_transaksi)
    { {
            $model = new TransaksiModel();

            if ($model->find($id_transaksi)) {
                if ($model->delete($id_transaksi)) {
                    return redirect()->to('/transaksi')->with('success', 'Data transaksi berhasil dihapus');
                } else {
                    return redirect()->to('/transaksi')->with('error', 'Gagal menghapus data transaksi');
                }
            } else {
                return redirect()->to('/transaksi')->with('error', 'Data transaksi tidak ditemukan');
            }
        }
    }
}
