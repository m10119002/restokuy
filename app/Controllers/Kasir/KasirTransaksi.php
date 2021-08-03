<?php

namespace App\Controllers\Kasir;
use App\Controllers\BaseController;

class KasirTransaksi extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}
    
    public function index()
	{
		$transaksiModel = model('App\Model\TransaksiModel');

		$returnData = [
			'tabel_pembayaran' => $transaksiModel->getTabelPembayaran(),
			'tabel_pembayaran_lunas' => $transaksiModel->getTabelPembayaranLunas()
		];
		return view('Kasir/transaksi', $returnData);
	}
}