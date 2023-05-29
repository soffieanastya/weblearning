<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class soal_pemanasan extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('model_siskom');
		$this->load->helper('url_helper'); 
	}

	public function kelistrikan()
	{
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no11');
		$this->load->view('headernfooter/footer');
	}


	public function aksi_kelistrikan(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 1;
			$status   = 1;

			$data = array(
				'id_siswa' => $id_siswa,
				'id_soal'  => $id_soal,
				'status'   => $status
			);

			$this->model_siskom->pemanasan($data);
			redirect ('materi');
		}else{
			$this->load->view('latihan/no11');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	
	public function potensial()
	{
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no12');
		$this->load->view('headernfooter/footer');
	}


	public function aksi_potensial(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 1;
			$status   = 2;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			//kita ubah statusna okey berdasarkan user yg login ok
			//nnti buat kalau kalauan lagi, kalau status yg ada di tabel sttus_pemanasan udh lebih besar dari $status, berarti gausa di update lagi
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');

			redirect ('materi');
		}else{
			$this->load->view('latihan/no12');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	
	public function arus()
	{
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no13');
		$this->load->view('headernfooter/footer');
	}


	public function aksi_arus(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 1;
			$status   = 3;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			redirect ('materi');
		}else{
			$this->load->view('latihan/no13');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}

	public function bedapotensial()
	{
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no14');
		$this->load->view('headernfooter/footer');
	}


	public function aksi_bedapotensial(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 1;
			$status   = 4;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');

			redirect ('materi');
		}else{
			$this->load->view('latihan/no14');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}


	public function resistansi()
	{
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no15');
		$this->load->view('headernfooter/footer');
	}


	public function aksi_resistansi(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 1;
			$status   = 5;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');

			redirect ('materi');
		}else{
			$this->load->view('latihan/no15');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}


	public function daya()
	{
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no16');
		$this->load->view('headernfooter/footer');
	}


	public function aksi_daya(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 1;
			$status   = 6;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');

			redirect ('materi');
		}else{
			$this->load->view('latihan/no16');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}

	// ----------------------- bagian 2----------------------

	public function resistor()
	{
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no21');
		$this->load->view('headernfooter/footer');
	}


	public function aksi_resistor(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 2;
			$status   = 1;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect ('materi');
		}else{
			$this->load->view('latihan/no21');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}

	public function kapasitor(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no22');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_kapasitor(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 2;
			$status   = 2;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no22');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}

	public function induktor(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no23');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_induktor(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 2;
			$status   = 3;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no23');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}

	public function dioda(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no24');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_dioda(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 2;
			$status   = 4;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no24');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	public function transistor(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no25');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_transistor(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 2;
			$status   = 5;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no25');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	public function transformator(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no26');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_transformator(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 2;
			$status   = 6;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no26');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	public function relay(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no27');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_relay(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 2;
			$status   = 7;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no27');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	public function thyristor(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no28');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_thyristor(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 2;
			$status   = 8;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no28');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	public function tranducer(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no29');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_tranducer(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 2;
			$status   = 9;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no29');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}

	// ---------------------- bagian 3, skema --------------------------
	public function pcb(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no31');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_pcb(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 3;
			$status   = 1;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no31');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	public function komponen(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no32');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_komponen(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 3;
			$status   = 2;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no32');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	public function alat(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no33');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_alat(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 3;
			$status   = 3;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no33');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}


	// -------------------- bagian 4, macam rangkaian ------------------------

	public function jenis(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no41');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_jenis(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 4;
			$status   = 1;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no41');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	public function sinyal(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no42');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_sinyal(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 4;
			$status   = 2;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no42');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
	public function kerja(){
		$title['judul'] = 'SISKOM';
		// $nama = $this->session->userdata('username');
		// $title['nama']  = '<?= $this->session-> '
 		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('latihan/no43');
		$this->load->view('headernfooter/footer');
	}

	public function aksi_kerja(){
		$title['judul'] = 'Soal Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$cekjawaban = $this->input->post('jawaban1');

		if($cekjawaban == "tinggi"){
			//masukin ke database
			$id_siswa = $this->session->userdata('id_siswa');
			$id_soal  = 4;
			$status   = 3;

			$data = array(
				'status'   => $status
			);

			$where = array(
				'id_siswa' => $id_siswa
			);
			$this->model_siskom->update_pemanasan($data,$where,'soal_pemanasan');
			
			redirect('materi');
		}else{
			$this->load->view('latihan/no43');
			$this->load->view('latihan1/salah');
		}
		
		$this->load->view('headernfooter/footer');
	}
}

?>