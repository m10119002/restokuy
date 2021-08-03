<?php

namespace App\Controllers\Pelayan;
use App\Controllers\BaseController;

class PelayanHome extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}
    
    public function index()
	{
		return view('Pelayan/dashboard');
	}
}