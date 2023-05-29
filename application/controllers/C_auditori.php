<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_auditori extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('model_siskom');
		$this->load->helper('url_helper');
	}

	public function kelistrikan(){
		$title['judul'] = 'Sistem Komputer';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('auditori/1_kelistrikan');
		$this->load->view('auditori/1_content');
		
		$this->load->view('headernfooter/footer');
	}

	public function potensial(){
		$title['judul'] = 'Sistem Komputer';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('auditori/1a_potensial');
		$this->load->view('auditori/1_content');
		
		$this->load->view('headernfooter/footer');
	}

	public function arus(){
		$title['judul'] = 'Sistem Komputer';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('auditori/1b_arus');
		$this->load->view('auditori/1_content');
		
		$this->load->view('headernfooter/footer');
	}


	public function bedapotensial(){
		$title['judul'] = 'Sistem Komputer';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('auditori/1c_bedapotensial');
		$this->load->view('auditori/1_content');
		
		$this->load->view('headernfooter/footer');
	}


	public function resistansi(){
		$title['judul'] = 'Sistem Komputer';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('auditori/1d_resistansi');
		$this->load->view('auditori/1_content');
		
		$this->load->view('headernfooter/footer');
	}

	public function daya(){
		$title['judul'] = 'Sistem Komputer';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('auditori/1e_daya');
		$this->load->view('auditori/1_content');
		
		$this->load->view('headernfooter/footer');
	}
}
