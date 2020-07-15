<?php

namespace App\Controllers;

use App\Models\Work_model;
use App\Models\Portfolio_model;
use App\Models\Skill_model;
use App\Models\Testimonial_model;
use App\Models\Profil_model;

class Work extends BaseController
{

	public function __construct()
	{
		$this->Work_model = new Work_model();
		$this->Portfolio_model = new Portfolio_model();
		$this->Skill_model = new Skill_model();
		$this->Testimonial_model = new Testimonial_model();
		$this->Profil_model = new Profil_model();
	}

	public function index()
	{
		$data = [

			'title' => 'Ridho Darmawan',
			'work' => $this->Work_model->getWork(),
			'portfolio' => $this->Portfolio_model->getPortfolio(),
			'skill' => $this->Skill_model->getSkill(),
			'testimonial' => $this->Testimonial_model->getTestimonial(),
			'profil' => $this->Profil_model->getProfil(),
		];
		echo view('layout/header', $data);
		echo view('layout/navbar', $data);
		echo view('layout/work', $data);
		echo view('layout/skill', $data);
		echo view('layout/testimonial', $data);
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}
