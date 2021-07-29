<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class AdminPegawai extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}

    public function index()
	{
        return view('Admin\Pegawai\pegawai');
	}

    public function tambah()
    {
        if ($this->request->getMethod() == 'post') {
            echo "AdminPegawai::tambah[post]";
        } else {
            return view('Admin\Pegawai\pegawai-tambah');
        }
    }

    public function edit()
    {
        if ($this->request->getMethod() == 'post') {
            echo "AdminPegawai::edit[post]";
        } else {
            return view('Admin\Pegawai\pegawai-edit');
        }
    }

    public function hapus()
    {
        echo "AdminPegawai::hapus[post]";
    }
}