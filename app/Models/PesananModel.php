<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table      = 'pesanan';
    protected $primaryKey = 'no_pesanan';

    protected $useAutoIncrement = true;

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

    public function getTabelPemesanan() {
        $this->select('no_pesanan');
        $this->select('tgl_pesanan');
        $this->select('no_meja');
        $this->select('status');
        $this->select('pesanan.id_pegawai AS id_pegawai');
        $this->join('pegawai', 'pesanan.id_pegawai = pegawai.id_pegawai');
        return $this->get()->getResult();
    }

    public function getTabelPesananByIDPegawai($id_pegawai) {
        $this->select('no_pesanan');
        $this->select('tgl_pesanan');
        $this->select('no_meja');
        $this->select('status');
        $this->where('id_pegawai', $id_pegawai);
        return $this->get()->getResult();
    }
}