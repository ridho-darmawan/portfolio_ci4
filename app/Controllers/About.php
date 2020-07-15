<?php

namespace App\Controllers;

use App\Models\Profil_model;

class About extends BaseController
{

	public function __construct()
	{
		$this->Profil_model = new Profil_model();
	}

	public function index()
	{
		$data = [
			'title' => 'About Me |Ridho Darmawan',
			'profil' => $this->Profil_model->getProfil(),
		];

		echo view('layout/header', $data);
		echo view('layout/navbar', $data);
		echo view('pages/about', $data);
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}
