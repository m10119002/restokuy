<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table      = 'menu';
    protected $primaryKey = 'id_menu';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public function getTabelCekMenu() {
        $this->select('id_menu');
        $this->select('nama_menu');
        $this->select('kategori_menu');
        $this->select('jenis_menu');
        $this->select('harga_menu');
        $this->select('gambar_menu');
        $this->select('status');
        return $this->get()->getResult();
    }
}