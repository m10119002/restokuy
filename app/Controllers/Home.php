<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}
    
    public function index()
	{
		if ($this->session->getFlashdata('admin_created')) {
			$user = $this->session->getFlashdata('admin_user');
			$returnData = [
				'successMessage' => "Admin '".$user."' telah berhasil dibuat!"
			];
			return view('index', $returnData);
		} else {
			return view('index');
		}
	}
}
