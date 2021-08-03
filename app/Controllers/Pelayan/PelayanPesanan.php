<?php

namespace App\Controllers\Pelayan;
use App\Controllers\BaseController;

class PelayanPesanan extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}
    
    public function index()
	{
		$pesananModel = model('App\Model\PesananModel');
		
		$returnData = [
			'tabel_pesanan' => $pesananModel->getTabelPesananByIDPegawai($this->session->get('id_pegawai'))
		];
		return view('Pelayan/Pesanan/pesanan', $returnData);
	}

	public function tambah()
	{
		return view('Pelayan/Pesanan/pesanan-tambah');
	}
	
	public function edit()
	{
		return view('Pelayan/Pesanan/pesanan-edit');
	}

	public function hapus()
	{
		echo 'PelayanPesanan::hapus[post]';
	}
}