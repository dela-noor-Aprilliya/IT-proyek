<?php

namespace App\Models;

use CodeIgniter\Model;

class DataBatakoModel extends Model
{
    protected $table            = 'data_batako';
    protected $primaryKey       = 'id_batako';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true; 
    protected $allowedFields    = ["nama_batako", "foto", "harga", "stok"];

    protected bool $allowEmptyInserts = false;



}
