<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class AdminMenu extends BaseController
{
	public function __construct() {
		helper(['form', 'url']);
	}

    public function index()
	{
        return view('Admin\Menu\menu');
	}

    public function tambah()
    {
        if ($this->request->getMethod() == 'post') {
            echo "AdminMenu::tambah[post]";
        } else {
            return view('Admin\Menu\menu-tambah');
        }
    }

    public function edit()
    {
        if ($this->request->getMethod() == 'post') {
            echo "AdminMenu::edit[post]";
        } else {
            return view('Admin\Menu\menu-edit');
        }
    }

    public function hapus()
    {
        echo "AdminMenu::hapus[post]";
    }
}