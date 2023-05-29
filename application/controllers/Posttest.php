<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posttest extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('model_siskom');
		$this->load->helper('url_helper');
	}

	public function no1(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$id_siswa = $this->session->userdata('id_siswa');
		$where = array(
			'id_siswa' => $id_siswa
		);
			
			//ngambil data dari database, ngecek uname dn pass
		$cekposttes = $this->model_siskom->cek_posttest('posttest',$where);
		
		if($cekposttes == null){
			$this->load->view('posttest/no1');
		}else{
			$this->load->view('posttest/pesan');
		}
		
		$this->load->view('headernfooter/footer');
	}

	public function aksi_posttest(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		

		$id_siswa = $this->session->userdata('id_siswa');
		$this->load->view('headernfooter/header', $title);
		
		//masukin ke database jawabannya, baru aja

		$no1 = $this->input->post('jawaban1');
		$no2 = $this->input->post('jawaban2');
		$no3 = $this->input->post('jawaban3');
		$no4 = $this->input->post('jawaban4');
		$no5 = $this->input->post('jawaban5');
		$no6 = $this->input->post('jawaban6');
		$no7 = $this->input->post('jawaban7');
		$no8 = $this->input->post('jawaban8');
		$no9 = $this->input->post('jawaban9');
		$no10 = $this->input->post('jawaban10');
		$no11 = $this->input->post('jawaban11');
		$no12 = $this->input->post('jawaban12');
		$no13 = $this->input->post('jawaban13');
		$no14 = $this->input->post('jawaban14');
		$no15 = $this->input->post('jawaban15');
		$no16 = $this->input->post('jawaban16');
		$no17 = $this->input->post('jawaban17');
		$no18 = $this->input->post('jawaban18');
		$no19 = $this->input->post('jawaban19');
		$no20 = $this->input->post('jawaban20');

		$data = array(
			'id_siswa' => $id_siswa,
			'no1'   => $no1,
			'no2'   => $no2,
			'no3'   => $no3,
			'no4'   => $no4,			
			'no5'   => $no5,
			'no6'   => $no6,			
			'no7'   => $no7,
			'no8'   => $no8,			
			'no9'   => $no9,
			'no10'   => $no10,
			'no11'   => $no11,
			'no12'   => $no12,
			'no13'   => $no13,
			'no14'   => $no14,
			'no15'   => $no15,
			'no16'   => $no16,
			'no17'   => $no17,			
			'no18'   => $no18,
			'no19'   => $no19,			
			'no20'   => $no20			
		);
		$this->model_siskom->posttest($data);
		$this->load->view('posttest/pesan');
		$this->load->view('headernfooter/footer');
	}


}

?>