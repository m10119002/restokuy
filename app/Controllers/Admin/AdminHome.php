<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class AdminHome extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}

    public function index()
	{
        return view('Admin\dashboard');
	}
}