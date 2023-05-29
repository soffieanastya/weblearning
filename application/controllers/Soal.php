<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class soal extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('model_siskom');
		$this->load->helper('url_helper');
	}

	public function soal(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$id_siswa = $this->session->userdata('id_siswa');

		$where = array(
			'id_siswa' => $id_siswa
		);

		$where2 = array(
			'id_siswa' => $id_siswa,
			'id_soal'  => 5
		);
		
		//ngambil data dari database, ngecek uname dn pass
		$ceksoal  = $this->model_siskom->cek_status_pemanasan('soal_pemanasan',$where);
		$ceksoal2 = $this->model_siskom->cek_status_pemanasan('lat_pemahaman',$where2);

		$data['active1'] = $data['active2'] = $data['active3'] = "unable";
		
		if ($ceksoal2 != null) {
			$data['active1'] = null;
			$data['active2'] = null;
		}elseif($ceksoal->id_soal == 2 and $ceksoal->status == 9){
			$data['active1'] = null;
			$data['active2'] = "unable";
		}

		$this->load->view('latihan/soal',$data);
		$this->load->view('headernfooter/footer');
	}

	public function latihan1(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan1/no1');
		$this->load->view('headernfooter/footer');
	}


	public function aksi_latihan1(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');
		if($cekjawaban == "tinggi"){
			redirect ('soal/no2');
		}else{
			$this->load->view('latihan1/no1');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}


	public function no2(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan1/no2');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan2(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban');
		if($cekjawaban == "tinggi" || $cekjawaban == "bolak-balik" || $cekjawaban == "direct current" ||  $cekjawaban = "DC"){
			redirect ('soal/no3');
		}else{
			$this->load->view('latihan1/no2');
			$this->load->view('latihan1/salah');
		}
		$this->load->view('headernfooter/footer');
	}

	public function no3(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan1/no3');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan3(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban1 = $this->input->post('jawaban1');
		$cekjawaban2 = $this->input->post('jawaban2');

		if($cekjawaban1 == "r" and $cekjawaban2 == "s" ){
			redirect ('soal/no4');
		}else{
			$this->load->view('latihan1/no3');
			$this->load->view('latihan1/salah');
		}
		$this->load->view('headernfooter/footer');
	}

	public function no4(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan1/no4');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan4(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban1 = $this->input->post('jawaban1');
		$cekjawaban2 = $this->input->post('jawaban2');

		if(($cekjawaban1 == "v" || $cekjawaban1 == "volt") and ($cekjawaban2 == "a" || $cekjawaban2 == "ampere") ){
			redirect ('soal/no5');
		}else{
			$this->load->view('latihan1/no4');
			$this->load->view('latihan1/salah');
		}
		$this->load->view('headernfooter/footer');
	}
	
	public function no5(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan1/no5');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan5(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban1 = $this->input->post('jawaban1');
		$cekjawaban2 = $this->input->post('jawaban2');

		if($cekjawaban1 == "24" and $cekjawaban2 == "3"){
			redirect ('soal/no6');
		}else{
			$this->load->view('latihan1/no5');
			$this->load->view('latihan1/salah');
		}
		$this->load->view('headernfooter/footer');
	}

	public function no6(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan1/no6');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan6(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban1 = $this->input->post('jawaban1');
		$cekjawaban2 = $this->input->post('jawaban2');

		if($cekjawaban1 == "5000" and $cekjawaban2 == "10%"){
			redirect ('soal/no7');
		}else{
			$this->load->view('latihan1/no6');
			$this->load->view('latihan1/salah');
		}
		$this->load->view('headernfooter/footer');
	}

	public function no7(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan1/no7');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan7(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban1 = $this->input->post('jawaban1');
		$cekjawaban2 = $this->input->post('jawaban2');

		if($cekjawaban1 == "27000000" and $cekjawaban2 == "5%"){
			redirect ('soal/no8');
		}else{
			$this->load->view('latihan1/no7');
			$this->load->view('latihan1/salah');
		}
		$this->load->view('headernfooter/footer');
	}

	public function no8(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan1/no8');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan8(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "8w" || $cekjawaban == "8 w" || $cekjawaban == "8"){
			redirect ('soal/no9');
		}else{
			$this->load->view('latihan1/no8');
			$this->load->view('latihan1/salah');
		}
		$this->load->view('headernfooter/footer');
	}
	public function no9(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan1/no9');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan9(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "7300"){
			redirect ('soal/no10');
		}else{
			$this->load->view('latihan1/no9');
			$this->load->view('latihan1/salah');
		}
		$this->load->view('headernfooter/footer');
	}
	public function no10(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan1/no10');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan10(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "3000"){
			redirect ('materi');
		}else{
			$this->load->view('latihan1/no10');
			$this->load->view('latihan1/salah');
		}
		$this->load->view('headernfooter/footer');
	}
}

?>