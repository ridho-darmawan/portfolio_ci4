<?php

namespace App\Controllers;



class About extends BaseController
{

	public function __construct()
	{
	}

	public function index()
	{
		$data = [
			'title' => 'About Me |Ridho Darmawan',
		];

		echo view('layout/header', $data);
		echo view('layout/navbar', $data);
		echo view('pages/about', $data);
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}
