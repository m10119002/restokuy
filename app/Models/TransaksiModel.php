<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'no_transaksi';

    protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public function getTabelRekapitulasi($dari=null, $sampai=null) {
        $this->select('no_transaksi');
        $this->select('total_bayar');
        $this->select('transaksi.status AS status');
        $this->select('transaksi.id_pegawai AS id_pegawai');
        $this->select('transaksi.no_pesanan AS no_pesanan');
        $this->select('transaksi.id_menu AS id_menu');
        $this->join('pegawai', 'transaksi.id_pegawai = pegawai.id_pegawai');
        $this->join('pesanan', 'transaksi.no_pesanan = pesanan.no_pesanan');
        $this->join('menu', 'transaksi.id_menu = menu.id_menu');
        
        if (!is_null($dari) || !is_null($sampai)) {
			if (!empty($dari) && !empty($sampai)) {
                /*if ($dari < $sampai) {
                    $this->where('tgl_pesanan >=', $dari);
                    $this->where('tgl_pesanan <=', $sampai);
                }*/
				$this->where('tgl_pesanan >=', $dari);
                $this->where('tgl_pesanan <=', $sampai);
			} else {
				if (!empty($dari)) {
					$this->where('tgl_pesanan >=', $dari);
				} else if (!empty($sampai)) {
                    $this->where('tgl_pesanan <=', $sampai);
				}
			}
		}

        return $this->get()->getResult();
    }

    public function getTabelPembayaran() {
        $this->select('no_transaksi');
        $this->select('total_bayar');
        $this->select('transaksi.status AS status');
        $this->select('transaksi.id_pegawai AS id_pegawai');
        $this->select('transaksi.no_pesanan AS no_pesanan');
        $this->select('transaksi.id_menu AS id_menu');
        $this->join('pegawai', 'transaksi.id_pegawai = pegawai.id_pegawai');
        $this->join('pesanan', 'transaksi.no_pesanan = pesanan.no_pesanan');
        $this->join('menu', 'transaksi.id_menu = menu.id_menu');
        $this->where('transaksi.status', 'belum dibayar');
        return $this->get()->getResult();
    }

    public function getTabelPembayaranLunas() {
        $this->select('no_transaksi');
        $this->select('total_bayar');
        $this->select('transaksi.status AS status');
        $this->select('transaksi.id_pegawai AS id_pegawai');
        $this->select('transaksi.no_pesanan AS no_pesanan');
        $this->select('transaksi.id_menu AS id_menu');
        $this->join('pegawai', 'transaksi.id_pegawai = pegawai.id_pegawai');
        $this->join('pesanan', 'transaksi.no_pesanan = pesanan.no_pesanan');
        $this->join('menu', 'transaksi.id_menu = menu.id_menu');
        $this->where('transaksi.status', 'dibayar');
        return $this->get()->getResult();
    }
}