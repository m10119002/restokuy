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
		$transaksiModel = model('App\Model\TransaksiModel');

		$returnData = [
			'tabel_rekapitulasi' => $transaksiModel->getTabelRekapitulasi(null, null)
		];
		return view('Kasir/rekapitulasi', $returnData);
	}

	public function filter()
	{
		if ($this->request->getMethod() == 'post') {
			$formData = [
				'dari' => $this->request->getPost('dari'),
				'sampai' => $this->request->getPost('sampai')
			];

			$transaksiModel = model('App\Model\TransaksiModel');

			$returnData = [
				'formData' => $formData,
				'tabel_rekapitulasi' => $transaksiModel->getTabelRekapitulasi($formData['dari'], $formData['sampai'])
			];
			return view('Kasir/rekapitulasi', $returnData);
		} else {
			return redirect()->route('kasir/rekapitulasi');
		}
	}
}