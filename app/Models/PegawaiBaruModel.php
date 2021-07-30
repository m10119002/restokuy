<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiBaruModel extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'id_pegawai';

    protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_pegawai', 'nama_pegawai', 'alamat', 'tempat_lahir', 'tgl_lahir', 'no_hp', 'jabatan', 'id_akun'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}