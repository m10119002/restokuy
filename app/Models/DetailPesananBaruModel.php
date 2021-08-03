<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPesananBaruModel extends Model
{
    protected $table      = 'detail_pesanan';
    // protected $primaryKey = 'no_pesanan';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['no_pesanan', 'id_menu', 'jumlah_pesanan'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}