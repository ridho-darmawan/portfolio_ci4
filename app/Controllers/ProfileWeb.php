<?php

namespace App\Controllers;

use CodeIgniter\Model;

use App\Models\Profil_model;

class ProfileWeb extends BaseController
{

	public function __construct()
	{
		$this->Profil_model = new Profil_model();
	}

	public function index()
	{
		$data = [
			'title' => 'Contact | Ridho Darmawan',
			'profil' => $this->Profil_model->getProfil()
		];



		echo view('layout/header', $data);
		echo view('layout/navbar', $data);
		echo view('pages/contact', $data);
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}
