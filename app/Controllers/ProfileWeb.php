<?php

namespace App\Controllers;



class ProfileWeb extends BaseController
{

	public function __construct()
	{
	}

	public function index()
	{
		$data = [
			'title' => 'Ridho Darmawan',
		];

		echo view('layout/header', $data);
		echo view('layout/navbar', $data);
		echo view('pages/contact', $data);
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}
