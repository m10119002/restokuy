<?php

namespace App\Controllers\Kasir;
use App\Controllers\BaseController;

class KasirHome extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}
    
    public function index()
	{
		return view('Kasir/dashboard');
	}
}