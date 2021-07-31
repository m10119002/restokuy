<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuBaruModel extends Model
{
    protected $table      = 'menu';
    protected $primaryKey = 'id_menu';

    protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_menu', 'kategori_menu', 'jenis_menu', 'harga_menu', 'status', 'gambar_menu'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}