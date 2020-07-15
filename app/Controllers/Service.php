<?php

namespace App\Controllers;

use CodeIgniter\Model;

use App\Models\Service_model;
use App\Models\Profil_model;

class Service extends BaseController
{

	public function __construct()
	{
		$this->Service_model = new Service_model;
		$this->Profil_model = new Profil_model();
	}

	public function index()
	{
		$data = [
			'title' => 'Service | ridho darmawan',
			'service' => $this->Service_model->getService(),
			'profil' => $this->Profil_model->getProfil(),
		];

		echo view('layout/header', $data);
		echo view('layout/navbar', $data);
		echo view('pages/service', $data);
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}
