<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $akunbaru = [
		'username' => [
			'rules' => 'required|alpha_dash|max_length[30]|is_unique[akun.username]',
			'errors' => [
				'required' => 'Username tidak boleh kosong!',
				'alpha_dash' => 'Username tidak boleh mengandung spasi atau simbol selain dash(-), underscore(_)!',
				'max_length' => 'Username tidak boleh melebihi 30 karakter!',
				'is_unique' => 'Username ini sudah ada yang menggunakan!'
			]
		],
		'password' => [
			'rules' => 'required|max_length[30]',
			'errors' => [
				'required' => 'Password tidak boleh kosong!',
				'max_length' => 'Password tidak boleh melebihi 30 karakter!'
			]
		],
		'password_ulang' => [
			'rules' => 'required|matches[password]',
			'errors' => [
				'required' => 'Password Ulang tidak boleh kosong!',
				'matches' => 'Password Ulang tidak sama dengan Password!'
			]
		]
	];

	public $pegawaibaru = [
		'id_pegawai' => [
			'rules' => 'required|max_length[30]|is_unique[pegawai.id_pegawai]|numeric',
			'errors' => [
				'required' => 'ID Pegawai tidak boleh kosong!',
				'max_length' => 'ID Pegawai tidak boleh melebihi 8 angka!',
				'is_unique' => 'ID Pegawai ini sudah ada yang menggunakan!',
				'numeric' => 'ID Pegawai tidak boleh mengandung Huruf atau Simbol!'
			]
		],
		'nama_pegawai' => [
			'rules' => 'required|max_length[70]|alpha_space',
			'errors' => [
				'required' => 'Nama Pegawai tidak boleh kosong!',
				'max_length' => 'Nama Pegawai tidak boleh melebihi 70 karakter!',
				'alpha_space' => 'Nama Pegawai tidak boleh mengandung Simbol atau Angka!'
			]
		],
		'alamat' => [
			'rules' => 'required|max_length[70]',
			'errors' => [
				'required' => 'Alamat tidak boleh kosong!',
				'max_length' => 'Alamat tidak boleh melebihi 70 karakter!'
			]
		],
		'tempat_lahir' => [
			'rules' => 'required|max_length[40]',
			'errors' => [
				'required' => 'Tempat Lahir tidak boleh kosong!',
				'max_length' => 'Tempat Lahir tidak boleh melebihi 40 karakter!'
			]
		],
		'tgl_lahir' => [
			'rules' => 'required|valid_date',
			'errors' => [
				'required' => 'Tanggal Lahir tidak boleh kosong!',
				'valid_date' => 'Tanggal Lahir harus lengkap!'
			]
		],
		'no_hp' => [
			'rules' => 'required|max_length[13]|numeric',
			'errors' => [
				'required' => 'Nomor HP tidak boleh kosong!',
				'max_length' => 'Nomor HP tidak boleh melebihi 13 karakter!',
				'numeric' => 'Nomor HP tidak boleh mengandung Huruf atau Simbol!'
			]
		],
		'jabatan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Jabatan tidak boleh kosong!'
			]
		],
		'username' => [
			'rules' => 'required|alpha_dash|max_length[30]|is_unique[akun.username]',
			'errors' => [
				'required' => 'Username tidak boleh kosong!',
				'alpha_dash' => 'Username tidak boleh mengandung spasi atau simbol selain dash(-), underscore(_)!',
				'max_length' => 'Username tidak boleh melebihi 30 karakter!',
				'is_unique' => 'Username ini sudah ada yang menggunakan!'
			]
		],
		'password' => [
			'rules' => 'required|max_length[30]',
			'errors' => [
				'required' => 'Password tidak boleh kosong!',
				'max_length' => 'Password tidak boleh melebihi 30 karakter!'
			]
		],
		'password_ulang' => [
			'rules' => 'required|matches[password]',
			'errors' => [
				'required' => 'Password Ulang tidak boleh kosong!',
				'matches' => 'Password Ulang tidak sama dengan Password!'
			]
		]
	];
}
