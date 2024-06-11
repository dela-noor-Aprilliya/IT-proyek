<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id_transaksi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true; 
    protected $allowedFields    = [
        'nama_pembeli',
        'id_pembeli',
        'no_hp',
        'tanggal_transaksi',
        'total_harga',
        'foto_transaksi',
        'status_pembayaran',
    ];

    protected bool $allowEmptyInserts = false;



}