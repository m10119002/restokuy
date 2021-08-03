<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class AdminPegawai extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}

    public function index()
	{
        $db = db_connect();

        $pegawaiSql = "SELECT id_pegawai, nama_pegawai, tempat_lahir, DATE_FORMAT(tgl_lahir, '%d-%m-%Y') AS tgl_lahir, no_hp, alamat, jabatan, username 
        FROM pegawai JOIN akun ON pegawai.id_akun=akun.id_akun";
        $pegawaiResult = $db->query($pegawaiSql)->getResult();

        $returnData = [
            'tabel_pegawai' => $pegawaiResult
        ];

        if ($this->session->getFlashdata('error')) {
            $moreData = [
                'errorMessage' => $this->session->getFlashdata('msg')
            ];
            $returnData = array_merge($returnData, $moreData);
        } else if ($this->session->getFlashdata('success')) {
            $moreData = [
                'successMessage' => $this->session->getFlashdata('msg')
            ];
            $returnData = array_merge($returnData, $moreData);
        }

        return view('Admin/Pegawai/pegawai', $returnData);
	}

    public function tambah()
    {
        if ($this->request->getMethod() == 'post') {
            $formData = [
                'id_pegawai' => $this->request->getPost('id_pegawai'),
                'nama_pegawai' => $this->request->getPost('nama_pegawai'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'no_hp' => $this->request->getPost('no_hp'),
                'alamat' => $this->request->getPost('alamat'),
                'jabatan' => $this->request->getPost('jabatan'),
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'password_ulang' => $this->request->getPost('password_ulang')
            ];

            if (!$this->validation->run($formData, 'pegawaibaru')) {
                $err_msg = "Data salah!";
                $returnData = [
                    'formData' => $formData,
                    'validation' => $this->validation,
                    'error_message' => $err_msg
                ];
                return view('Admin/Pegawai/pegawai-tambah', $returnData);
            }

            $data_akun = [
                'username' => $formData['username'],
                'password' => $formData['password']
            ];

            $akunBaruModel = model('App\Models\AkunBaruModel');
            if ($akunBaruModel->insert($data_akun) === false) {
                $returnData = [
                    'errorMessage' => 'Gagal menambahkan Data!'
                ];
                return view('Admin/Pegawai/pegawai-tambah', $returnData);
            }
            $id_insert = $akunBaruModel->getInsertID();

            // ['id_pegawai', 'nama_pegawai', 'alamat', 'tempat_lahir', 'tgl_lahir', 'no_hp', 'jabatan', 'id_akun'];
            $data_pegawai = [
                'id_pegawai' => $formData['id_pegawai'],
                'nama_pegawai' => $formData['nama_pegawai'],
                'alamat' => $formData['alamat'],
                'tempat_lahir' => $formData['tempat_lahir'],
                'tgl_lahir' => $formData['tgl_lahir'],
                'no_hp' => $formData['no_hp'],
                'jabatan' => strtolower($formData['jabatan']),
                'id_akun' => $id_insert
            ];

            $pegawaiBaruModel = model('App\Models\PegawaiBaruModel');
            if ($pegawaiBaruModel->insert($data_pegawai) === false) {
                $returnData = [
                    'errorMessage' => 'Gagal menambahkan Data!'
                ];
                return view('Admin/Pegawai/pegawai-tambah', $returnData);
            }
            
            $returnData = [
                'successMessage' => 'Data berhasil ditambah!'
            ];
            return view('Admin/Pegawai/pegawai-tambah', $returnData);
        } else {
            return view('Admin/Pegawai/pegawai-tambah');
        }
    }

    public function edit()
    {
        if ($this->request->getMethod() == 'post') {
            $old_id = $this->request->getPost('old_id');
            $current_id = $this->request->getPost('id_pegawai');
            $old_username = $this->request->getPost('old_username');
            $current_username = $this->request->getPost('username');

            $temp_id = ($current_id==$old_id) ? '99999999' : $current_id;
            $temp_username = ($current_username==$old_username) ? 'awimbawe01awimbawe02' : $current_username;

            $formData = [
                'id_pegawai' => $temp_id,
                'nama_pegawai' => $this->request->getPost('nama_pegawai'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'no_hp' => $this->request->getPost('no_hp'),
                'alamat' => $this->request->getPost('alamat'),
                'jabatan' => $this->request->getPost('jabatan'),
                'username' => $temp_username,
                'password' => $this->request->getPost('password'),
                'password_ulang' => $this->request->getPost('password_ulang')
            ];

            if (!$this->validation->run($formData, 'pegawaibaru')) {
                $err_msg = "Data salah!";
                $formData['id_pegawai'] = $current_id;
                $formData['username'] = $current_username;
                $returnData = [
                    'formData' => $formData,
                    'validation' => $this->validation,
                    'error_message' => $err_msg
                ];
                return view('Admin/Pegawai/pegawai-edit', $returnData);
            }

            $formData['id_pegawai'] = $current_id;
            $formData['username'] = $current_username;

            $pegawaiModel = model('App\Models\PegawaiModel');
            $pegawai = $pegawaiModel->where('id_pegawai', $old_id)->first();

            $data_akun = [
                'username' => $formData['username'],
                'password' => $formData['password']
            ];

            $akunBaruModel = model('App\Models\AkunBaruModel');
            if ($akunBaruModel->update($pegawai['id_akun'], $data_akun) === false) {
                $returnData = [
                    'formData' => $formData,
                    'errorMessage' => 'Gagal merubah Data!'
                ];
                return view('Admin/Pegawai/pegawai-edit', $returnData);
            }

            $data_pegawai = [
                'id_pegawai' => $formData['id_pegawai'],
                'nama_pegawai' => $formData['nama_pegawai'],
                'alamat' => $formData['alamat'],
                'tempat_lahir' => $formData['tempat_lahir'],
                'tgl_lahir' => $formData['tgl_lahir'],
                'no_hp' => $formData['no_hp'],
                'jabatan' => strtolower($formData['jabatan'])
            ];

            $pegawaiBaruModel = model('App\Models\PegawaiBaruModel');
            if ($pegawaiBaruModel->update($pegawai['id_pegawai'], $data_pegawai) === false) {
                $returnData = [
                    'formData' => $formData,
                    'errorMessage' => 'Gagal merubah Data!'
                ];
                return view('Admin/Pegawai/pegawai-edit', $returnData);
            }
            
            $returnData = [
                'formData' => $formData,
                'successMessage' => 'Data berhasil dirubah!'
            ];
            return view('Admin/Pegawai/pegawai-edit', $returnData);
        } else {
            $id_pegawai = $this->request->getGet('id');

            $pegawaiModel = model('App\Models\PegawaiModel');
            $result = $pegawaiModel->where('id_pegawai', $id_pegawai)->first();

            if (empty($result)) {
                return redirect()->route('admin/pegawai');
            }

            $akunModel = model('App\Models\AkunModel');
            $akun = $akunModel->where('id_akun', $result['id_akun'])->first();

            if (empty($akun)) {
                return redirect()->route('admin/pegawai');
            }

            $formData = [
                'id_pegawai' => $result['id_pegawai'],
                'nama_pegawai' => $result['nama_pegawai'],
                'tempat_lahir' => $result['tempat_lahir'],
                'tgl_lahir' => $result['tgl_lahir'],
                'no_hp' => $result['no_hp'],
                'alamat' => $result['alamat'],
                'jabatan' => $result['jabatan'],
                'username' => $akun['username']
            ];

            $returnData = [
                'formData' => $formData
            ];
            return view('Admin/Pegawai/pegawai-edit', $returnData);
        }
    }

    public function hapus()
    {
        $id = $this->request->getGet('id');

        $pegawaiModel = model('App\Models\PegawaiModel');
        $pegawai = $pegawaiModel->where('id_pegawai', $id)->first();

        if (empty($pegawai)) {
            $this->session->setFlashdata('error', true);
            $this->session->setFlashdata('msg', 'Gagal hapus, Data pegawai yang dimaksud tidak ada!');
            return redirect()->route('admin/pegawai');
        }

        $akunModel = model('App\Models\AkunModel');
        $akun = $akunModel->where('id_akun', $pegawai['id_akun'])->first();

        if (empty($akun)) {
            $this->session->setFlashdata('error', true);
            $this->session->setFlashdata('msg', 'Gagal hapus, Data akun yang dimaksud tidak ada!');
            return redirect()->route('admin/pegawai');
        }

        $pegawaiModel->delete($pegawai['id_pegawai']);
        $akunModel->delete($pegawai['id_akun']);

        $this->session->setFlashdata('success', true);
        $this->session->setFlashdata('msg', 'Data berhasil dihapus!');
        return redirect()->route('admin/pegawai');
    }
}