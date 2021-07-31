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
		return view('Kasir\transaksi');
	}
}