<?php

namespace App\Controllers;

use CodeIgniter\Model;

use App\Models\Service_model;


class Service extends BaseController
{

	public function __construct()
	{
		$this->Service_model = new Service_model;
	}

	public function index()
	{
		$data = [
			'title' => 'Service | ridho darmawan',
			'service' => $this->Service_model->getService()
		];

		echo view('layout/header', $data);
		echo view('layout/navbar', $data);
		echo view('pages/service', $data);
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}
