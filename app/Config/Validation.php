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
}
