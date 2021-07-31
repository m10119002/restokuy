<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class AdminHome extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}

	private function getCounter()
    {
        $pegawaiModel = model('App\Models\PegawaiModel');
        $menuModel = model('App\Models\MenuModel');
        $counter = [
            'pelayan' => count($pegawaiModel->where('jabatan', 'pelayan')->findAll()),
            'menu' => count($menuModel->findAll()),
            'koki' => count($pegawaiModel->where('jabatan', 'koki')->findAll()),
            'kasir' => count($pegawaiModel->where('jabatan', 'kasir')->findAll())
        ];
        return $counter;
    }

    public function index()
	{
		$returnData = [
			'counter' => $this->getCounter()
		];
        return view('Admin/dashboard', $returnData);
	}
}