<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananBaruModel extends Model
{
    protected $table      = 'pesanan';
    protected $primaryKey = 'no_pesanan';

    protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['no_pesanan', 'tgl_pesanan', 'no_meja', 'status', 'id_pegawai'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}