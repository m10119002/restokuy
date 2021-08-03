<?php

namespace App\Controllers\Koki;
use App\Controllers\BaseController;

class KokiPemesanan extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}
    
    public function index()
	{
		$pesananModel = model('App\Model\PesananModel');
		
		$returnData = [
			'tabel_pemesanan' => $pesananModel->getTabelPemesanan()
		];
		return view('Koki/pemesanan', $returnData);
	}

	public function detail()
	{
		return view('Koki/detail-pemesanan');
	}

	public function edit()
	{
		if ($this->request->getMethod() == 'post') {

		} else {
			return view('Koki/detail-pemesanan');
		}
	}
}