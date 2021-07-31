<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class AdminMenu extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}

    private function setError($string='unexpected error')
    {
        $this->session->setFlashdata('error', true);
        $this->session->setFlashdata('msg', $string);
    }

    private function setSuccess($string='action success')
    {
        $this->session->setFlashdata('success', true);
        $this->session->setFlashdata('msg', $string);
    }

    public function index()
	{
        $menuModel = model('App\Models\MenuModel');
        $menu = $menuModel->findAll();
        $returnData = [
            'tabel_menu' => $menu
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
        return view('Admin\Menu\menu', $returnData);
	}

    public function tambah()
    {
        if ($this->request->getMethod() == 'post') {
            $formData = [
                'nama_menu' => $this->request->getPost('nama_menu'),
                'kategori_menu' => $this->request->getPost('kategori_menu'),
                'jenis_menu' => $this->request->getPost('jenis_menu'),
                'harga_menu' => $this->request->getPost('harga_menu')
            ];

            $menuBaruModel = model('App\Models\MenuBaruModel');
            if ($menuBaruModel->insert($formData) === false) {
                $returnData = [
                    'formData' => $formData,
                    'errorMessage' => 'Gagal menambahkan data!'
                ];
                return view('Admin\Menu\menu-tambah', $returnData);
            }

            $returnData = [
                'successMessage' => 'Data berhasil ditambah!'
            ];
            return view('Admin\Menu\menu-tambah', $returnData);
        } else {
            return view('Admin\Menu\menu-tambah');
        }
    }

    private function editAutoFill($id=null)
    {
        $menuModel = model('App\Models\MenuModel');
        $menu = $menuModel->where('id_menu', $id)->first();
        $formData = [
            'id_menu' => $menu['id_menu'],
            'nama_menu' => $menu['nama_menu'],
            'jenis_menu' => $menu['jenis_menu'],
            'kategori_menu' => $menu['kategori_menu'],
            'harga_menu' => $menu['harga_menu']
        ];
        return $formData;
    }

    private function editVerify($id=null)
    {
        $menuModel = model('App\Models\MenuModel');
        $menu = $menuModel->where('id_menu', $id)->first();
        if (empty($menu)) {
            $this->session->setFlashdata('error', true);
            $this->session->setFlashdata('msg', 'Gagal edit, Data Menu dengan ID = "'.$id.'" tidak dapat ditemukan!');
            return false;
        }
        return true;
    }

    public function edit()
    {
        if ($this->request->getMethod() == 'post') {
            $id = $this->request->getPost('id_menu');
            $formData = [
                'nama_menu' => $this->request->getPost('nama_menu'),
                'kategori_menu' => $this->request->getPost('kategori_menu'),
                'jenis_menu' => $this->request->getPost('jenis_menu'),
                'harga_menu' => $this->request->getPost('harga_menu')
            ];

            if (!$this->editVerify($id)) {
                return redirect()->route('admin/menu');
            }

            $menuBaruModel = model('App\Models\MenuBaruModel');

            if ($menuBaruModel->update($id, $formData) === false) {
                $returnData = [
                    'formData' => $this->editAutoFill($id),
                    'errorMessage' => 'Gagal merubah data!'
                ];
                return view('Admin\Menu\menu-edit', $returnData);
            }

            $returnData = [
                'formData' => $this->editAutoFill($id),
                'successMessage' => 'Data berhasil dirubah!'
            ];
            return view('Admin\Menu\menu-edit', $returnData);
        } else {
            $id = $this->request->getGet('id');
            if (!$this->editVerify($id)) {
                return redirect()->route('admin/menu');
            }

            $returnData = [
                'formData' => $this->editAutoFill($id)
            ];
            return view('Admin\Menu\menu-edit', $returnData);
        }
    }

    private function hapusVerify($id=null)
    {
        $menuModel = model('App\Models\MenuModel');
        $menu = $menuModel->where('id_menu', $id)->first();
        if (empty($menu)) {
            $this->session->setFlashdata('error', true);
            $this->session->setFlashdata('msg', 'Gagal hapus, Data Menu dengan ID = "'.$id.'" tidak dapat ditemukan!');
            return false;
        }
        return true;
    }

    public function hapus()
    {
        $id = $this->request->getGet('id');
        if (!$this->hapusVerify($id)) {
            return redirect()->route('admin/menu');
        }

        $menuModel = model('App\Models\MenuModel');
        if ($menuModel->delete($id) === false) {
            $this->setError('Gagal menghapus ID Menu "'.$id.'"!');
            return redirect()->route('admin/menu');
        }

        $this->setSuccess('Berhasil menghapus ID Menu "'.$id.'"!');
        return redirect()->route('admin/menu');
    }
}