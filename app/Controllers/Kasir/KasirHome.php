<?php

namespace App\Controllers\Kasir;
use App\Controllers\BaseController;

class KasirHome extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}

	private function getCounter()
    {
        $transaksiModel = model('App\Models\TransaksiModel');
		
        $counter = [
            'belum_dibayar' => count($transaksiModel->where('status', 'belum dibayar')->findAll())
        ];
        return $counter;
    }
    
    public function index()
	{
		$returnData = [
			'counter' => $this->getCounter()
		];
		return view('Kasir/dashboard', $returnData);
	}
}