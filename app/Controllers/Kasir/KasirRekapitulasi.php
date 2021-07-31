<?php

namespace App\Controllers\Kasir;
use App\Controllers\BaseController;

class KasirRekapitulasi extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}
    
    public function index()
	{
		return view('Kasir/rekapitulasi');
	}
}