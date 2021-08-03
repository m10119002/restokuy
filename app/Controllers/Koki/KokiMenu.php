<?php

namespace App\Controllers\Koki;
use App\Controllers\BaseController;

class KokiMenu extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}
    
    public function index()
	{
		$menuModel = model('App\Model\MenuModel');
		
		$returnData = [
			'tabel_cek_menu' => $menuModel->getTabelCekMenu()
		];
		return view('Koki/cek-menu', $returnData);
	}
}