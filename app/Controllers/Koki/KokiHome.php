<?php

namespace App\Controllers\Koki;
use App\Controllers\BaseController;

class KokiHome extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}
    
    public function index()
	{
		return view('Koki\dashboard');
	}
}