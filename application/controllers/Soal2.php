<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal2 extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('model_siskom');
		$this->load->helper('url_helper');
	}

	public function no1(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		$this->load->view('latihan2/no1');
		$this->load->view('headernfooter/footer');
	}


	public function aksi_latihan1(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban1 = $this->input->post('jawaban1');
		$cekjawaban2 = $this->input->post('jawaban2');
		$cekjawaban3 = $this->input->post('jawaban3');
		$cekjawaban4 = $this->input->post('jawaban4');
		$cekjawaban5 = $this->input->post('jawaban5');

		if($cekjawaban1 == "24" || $cekjawaban1 == "24c" || $cekjawaban1 == "24 c"|| $cekjawaban1 == "24 coloumb"){
			$data['ke1'] = true;
		}else{
			$data['ke1'] = false;
			// $data['mess1'] = "q merupakan simbol dari muatan listrik. Jadi, besar q adalah 24 c";
			// $data['mess1'] = 'q merupakan simbol dari muatan listrik. Jadi, besar q adalah 24 c';
		}

		if($cekjawaban2 == "3" || $cekjawaban2 == "3s" || $cekjawaban2 == "3 s"|| $cekjawaban2 == "3 detik"){
			$data['ke2'] = true;
			// $data['mess2'] = $cekjawaban2;
		}else{
			$data['ke2'] = false;
			// $data['mess2'] = 't merupakan simbol dari waktu. Jadi, nilai t adalah 3s';
		}

		if($cekjawaban3 == "24"){
			$data['ke3'] = true;
			// $data['mess3'] = $cekjawaban3;
		}else{
			$data['ke3'] = false;
			// $data['mess3'] = 'nilai dari q adalah 24';
		}

		if($cekjawaban4 == "3"){
			$data['ke4'] = true;
			// $data['mess4'] = $cekjawaban4;
		}else{
			$data['ke4'] = false;
			// $data['mess4'] = 'nilai dari t adalah 3';
		}

		if($cekjawaban5 == "8"){
			$data['ke5'] = true;
			// $data['mess5'] = $cekjawaban5;
		}else{
			$data['ke5'] = false;
			// $data['mess5'] = 'Jadi, besar arus lsitriknya adalah 8';
		}
		
		$data['mess1'] = $cekjawaban1;
		$data['mess2'] = $cekjawaban2;
		$data['mess3'] = $cekjawaban3;
		$data['mess4'] = $cekjawaban4;
		$data['mess5'] = $cekjawaban5;

		$id_siswa = $this->session->userdata('id_siswa');
		$id_soal  = 1;
		$jawaban  = $cekjawaban1.", ".$cekjawaban2.", ".$cekjawaban3.", ".$cekjawaban4.", ".$cekjawaban5;
		

		$isi = array(
			'id_siswa' => $id_siswa,
			'id_soal'  => $id_soal,
			'jawaban_siswa'   => $jawaban
		);
		// masukin ke db kalau masih belum ada data doang baru insert ke pemanasan ok titik. kalau udh ada datanya, dan id soal sm status di db sm di sini sama, berarti 

		$where = array(
			'id_siswa' => $id_siswa
		);

		$ceksoal = $this->model_siskom->cek_status_pemanasan('lat_pemahaman',$where);

		if($ceksoal == null){
			$this->model_siskom->pemahaman($isi);
		}

		$this->load->view('latihan2/message1',$data);
		$this->load->view('headernfooter/footer');
	}

	public function no2(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$this->load->view('latihan2/no2');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan2(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban1 = $this->input->post('jawaban1');
		$cekjawaban2 = $this->input->post('jawaban2');
		$cekjawaban3 = $this->input->post('jawaban3');
		$cekjawaban4 = $this->input->post('jawaban4');
		$cekjawaban5 = $this->input->post('jawaban5');

		if($cekjawaban1 == "220 Volt" || $cekjawaban1 == "220 v" || $cekjawaban1 == "220v" || $cekjawaban1 == "220"){
			$data['ke1'] = true;
		}else{
			$data['ke1'] = false;
		}

		if($cekjawaban2 == "1.2 Ampere" || $cekjawaban2 == "1.2 A" || $cekjawaban2 == "1.2"){
			$data['ke2'] = true;
		}else{
			$data['ke2'] = false;
		}

		if($cekjawaban3 == "220"){
			$data['ke3'] = true;
		}else{
			$data['ke3'] = false;
		}

		if($cekjawaban4 == "1.2"){
			$data['ke4'] = true;
		}else{
			$data['ke4'] = false;
		}

		if($cekjawaban5 == "264"){
			$data['ke5'] = true;
		}else{
			$data['ke5'] = false;
		}

		$data['mess1'] = $cekjawaban1;
		$data['mess2'] = $cekjawaban2;
		$data['mess3'] = $cekjawaban3;
		$data['mess4'] = $cekjawaban4;
		$data['mess5'] = $cekjawaban5;

		$id_siswa = $this->session->userdata('id_siswa');
		$id_soal  = 2;
		$jawaban  = $cekjawaban1.", ".$cekjawaban2.", ".$cekjawaban3.", ".$cekjawaban4.", ".$cekjawaban5;

		$isi = array(
			'id_siswa' => $id_siswa,
			'id_soal'  => $id_soal,
			'jawaban_siswa'   => $jawaban
		);
		
		$this->model_siskom->pemahaman($isi);

		$this->load->view('latihan2/message2',$data);
		$this->load->view('headernfooter/footer');
	}

	public function no3(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$this->load->view('latihan2/no3');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan3(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban1 = $this->input->post('jawaban1');
		$cekjawaban2 = $this->input->post('jawaban2');

		if($cekjawaban1 == "27000000"){
			$data['ke1'] = true;
		}else{
			$data['ke1'] = false;
		}

		if($cekjawaban2 == "5%"){
			$data['ke2'] = true;
		}else{
			$data['ke2'] = false;
		}

		$data['mess1'] = $cekjawaban1;
		$data['mess2'] = $cekjawaban2;

		$id_siswa = $this->session->userdata('id_siswa');
		$id_soal  = 3;
		$jawaban  = $cekjawaban1.", ".$cekjawaban2;

		$isi = array(
			'id_siswa' => $id_siswa,
			'id_soal'  => $id_soal,
			'jawaban_siswa'   => $jawaban
		);
		
		$this->model_siskom->pemahaman($isi);

		$this->load->view('latihan2/message3',$data);
		$this->load->view('headernfooter/footer');
	}

	public function no4(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$this->load->view('latihan2/no4');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan4(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

			$cekjawaban1 = $this->input->post('jawaban1');
			$cekjawaban2 = $this->input->post('jawaban2');
			$cekjawaban3 = $this->input->post('jawaban3');

			if($cekjawaban1 == "20w" || $cekjawaban1 == "20" || $cekjawaban1 == "20 watt"){
				$data['ke1'] = true;
			}else{
				$data['ke1'] = false;
			}

			if($cekjawaban2 == "120ohm" || $cekjawaban2 == "120" || $cekjawaban2 == "120 ohm"){
				$data['ke2'] = true;
			}else{
				$data['ke2'] = false;
			}

			if($cekjawaban3 == "10%"){
				$data['ke3'] = true;
			}else{
				$data['ke3'] = false;
			}

			$data['mess1'] = $cekjawaban1;
			$data['mess2'] = $cekjawaban2;
			$data['mess3'] = $cekjawaban3;

			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 4;
			$jawaban  = $cekjawaban1.", ".$cekjawaban2.", ".$cekjawaban3;

			$isi = array(
				'id_siswa' => $id_siswa,
				'id_soal'  => $id_soal,
				'jawaban_siswa'   => $jawaban
			);
			
			$this->model_siskom->pemahaman($isi);

			$this->load->view('latihan2/message4',$data);
			$this->load->view('headernfooter/footer');
		}

	public function no5(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$this->load->view('latihan2/no5');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_latihan5(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

			$cekjawaban1 = $this->input->post('jawaban1');

			if($cekjawaban1 == "13,333 " || $cekjawaban1 == "13.333 "){
				$data['ke1'] = true;
			}else{
				$data['ke1'] = false;
			}
			$data['mess1'] = $cekjawaban1;

			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 5;
			$jawaban  = $cekjawaban1;

			$isi = array(
				'id_siswa' => $id_siswa,
				'id_soal'  => $id_soal,
				'jawaban_siswa'   => $jawaban
			);
			
			$this->model_siskom->pemahaman($isi);

			$this->load->view('latihan2/message5',$data);
			$this->load->view('headernfooter/footer');
		}
}

?>