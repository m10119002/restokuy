<?php

namespace App\Controllers;

class Sistem extends BaseController
{
    public function __construct() {
		helper(['form', 'url']);
	}
    
    public function adminBaru()
    {
        if ($this->request->getMethod() == 'post') {
            $postData = [
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'password_ulang' => $this->request->getPost('password_ulang')
            ];

            if(!$this->validation->run($postData, 'akunbaru')) {
                $err_msg = "Data salah!";
                $returnData = [
                    'formData' => $postData,
                    'validation' => $this->validation,
                    'errorMessage' => $err_msg
                ];
                return view('adminbaru', $returnData);
            }
            
            $data_akun = [
                'username' => $postData['username'],
                'password' => $postData['password']
            ];

            $akunBaruModel = model('App\Models\AkunBaruModel');
            $akunBaruModel->insert($data_akun);
            $id_insert = $akunBaruModel->getInsertID();

            // ['nama_pegawai', 'alamat', 'tempat_lahir', 'tgl_lahir', 'no_hp', 'jabatan', 'id_akun'];
            $data_pegawai = [
                'nama_pegawai' => 'default',
                'alamat' => 'default',
                'tempat_lahir' => 'default',
                'tgl_lahir' => date('Y-m-d'),
                'no_hp' => 'default',
                'jabatan' => 'admin',
                'id_akun' => $id_insert
            ];

            $pegawaiBaruModel = model('App\Models\PegawaiBaruModel');
            $pegawaiBaruModel->insert($data_pegawai);

            $this->session->setFlashdata('admin_created', true);
            $this->session->setFlashdata('admin_user', $data_akun['username']);
            return redirect()->route('/');
        } else {
            return view('adminbaru');
        }
    }

	public function login()
	{
        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $formData = [
                'username' => $username,
                'password' => $password
            ];

            $akunModel = model('App\Models\AkunModel');
            $result = $akunModel->where('username', $username)->first();

            if (empty($result)) {
                $returnData = [
                    'formData' => $formData,
                    'errorMessage' => 'Username belum terdaftar!'
                ];
                return view('index', $returnData);
            }

            if (strcmp($password, $result['password']) !== 0) {
                $returnData = [
                    'formData' => $formData,
                    'errorMessage' => 'Password Salah!'
                ];
                return view('index', $returnData);
            }

            $pegawaiModel = model('App\Models\PegawaiModel');
            $pegawai = $pegawaiModel->where('id_akun', $result['id_akun'])->first();

            if (empty($pegawai)) {
                $returnData = [
                    'formData' => $formData,
                    'errorMessage' => 'Ada kesalahan data user!'
                ];
                return view('index', $returnData);
            }

            $this->session->set('id_akun', $result['id_akun']);
            $this->session->set('password', $result['password']);
            $this->session->set('nama_pegawai', $pegawai['nama_pegawai']);

            return redirect()->route('/');
        } else {
            return view('index');
        }
	}

    public function logout()
    {
        $this->session->destroy();
        return redirect()->route('/');
    }
}
