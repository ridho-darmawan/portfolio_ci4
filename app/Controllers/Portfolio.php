<?php

namespace App\Controllers;

use CodeIgniter\Model;

use App\Models\Portfolio_model;
use App\Models\Work_model;
use App\Models\Testimonial_model;


class Portfolio extends BaseController
{

	public function __construct()
	{
		$this->Portfolio_model = new Portfolio_model;
		$this->Work_model = new Work_model;
		$this->Testimonial_model = new Testimonial_model;
	}

	public function index()
	{
		$data = [
			'title' => 'Portfolio | ridho darmawan',
			'work' => $this->Work_model->getWork(),
			'testimonial' => $this->Testimonial_model->getTestimonial(),
			'portfolio' => $this->Portfolio_model->getPortfolio()
		];

		echo view('layout/header', $data);
		echo view('layout/navbar', $data);
		echo view('layout/work', $data);
		echo view('layout/testimonial');
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}
