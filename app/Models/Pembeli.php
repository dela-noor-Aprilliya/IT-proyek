<?php

namespace App\Models;

use CodeIgniter\Model;

class pembeli extends Model
{
    protected $table            = 'pembeli';
    protected $primaryKey       = 'id_pembeli';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true; 
    protected $allowedFields    = ["id_pembeli","nama", "alamat", "no_hp"];

    protected bool $allowEmptyInserts = false;

}