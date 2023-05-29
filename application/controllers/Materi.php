<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('model_siskom');
		$this->load->helper('url_helper');

		// //variabel global krn tiap function ngambil status gaya belajar siswanya yg login ok ahahaha
		// $idsiswa = $this->fungsi->user_login()->id_siswa;
		// $status  = $this->model_siskom->status_gayabelajar($idsiswa);
	}

	public function index(){
		$title['judul'] = 'Sistem Komputer';
		$title['nama'] = $this->session->userdata('nama_lengkap');
		$this->load->view('headernfooter/header', $title);

		//ambil data dari soal_pemanasan, dimana id soal = 1 dan id siswa yg login, kalau status true, maka jadi bisa di klik
		$id_siswa = $this->session->userdata('id_siswa');

		$where = array(
			'id_siswa' => $id_siswa
		);
		
		//ngambil data dari database, ngecek uname dn pass
		$ceksoal = $this->model_siskom->cek_status_pemanasan('soal_pemanasan',$where);
		// kalau datanya kosong, berarti yg bisa di klik yg awal doang. sisanya gabisa di klik
		// selain dari data nya kosong (adaan), berarti kalau statusnya 1 2 3 4 berarti yg itu di null in isi na

		// ini nilai awalna, di set unable kabeh
		$data['unable11'] = $data['unable12'] = $data['unable13'] = $data['unable14'] = $data['unable15'] = "unable";
		
		$data['unable20'] = $data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = $data['unable25'] = $data['unable26'] = $data['unable27'] = $data['unable28'] = $data['unable29'] = "unable";

		$data['unable31'] = $data['unable32'] = $data['unable33'] = "unable";

		$data['unable41'] = $data['unable42'] = $data['unable43'] = "unable";

		if($ceksoal != null){
			// if($ceksoal->id_soal == 4){
			// 	if($ceksoal->status == 3){
			// 		$data['unable41'] = $data['unable42'] = $data['unable43'] = null;
			// 	}elseif ($ceksoal->status == 2) {
			// 		$data['unable41'] = $data['unable42'] = $data['unable43'] = null;
			// 	}elseif ($ceksoal->status == 1) {
			// 		$data['unable41'] = $data['unable42'] = null;
			// 	}


			// 	// bag 1 enable
			// 	$data['unable11'] = $data['unable12'] = $data['unable13'] = $data['unable14'] = $data['unable15'] = null;
			// 	//bag 2 enable
			// 	$data['unable20'] = $data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = $data['unable25'] = $data['unable26'] = $data['unable27'] = $data['unable28'] = $data['unable29'] = null;

			// 	//bag 3 enable
			// 	$data['unable31'] = $data['unable32'] = $data['unable33'] = null;

			// }
			// elseif($ceksoal->id_soal == 3){
			// 	if($ceksoal->status == 3){
			// 		$data['unable31'] = $data['unable32'] = $data['unable33'] = $data['unable41'] =null;
			// 	}elseif ($ceksoal->status == 2) {
			// 		$data['unable31'] = $data['unable32']  = $data['unable33'] = null;
			// 	}elseif ($ceksoal->status == 1) {
			// 		$data['unable31'] = $data['unable32']  = null;
			// 	}
			// 	// bag 1 enable
			// 	$data['unable11'] = $data['unable12'] = $data['unable13'] = $data['unable14'] = $data['unable15'] = $data['unable20'] = null;
			// 	//bag 2 enable
			// 	$data['unable20'] = $data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = $data['unable25'] = $data['unable26'] = $data['unable27'] = $data['unable28'] = $data['unable29'] = $data['unable31'] = null;
			// }
			// else
			if($ceksoal->id_soal == 2){
				if($ceksoal->status == 9){
					$data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = $data['unable25'] = $data['unable26'] = $data['unable27'] = $data['unable28'] = $data['unable29'] = $data['unable31'] = null;
					
					$data['unable31'] = $data['unable32'] = $data['unable33'] = null;

					$data['unable41'] = $data['unable42'] = $data['unable43'] = null;
				}elseif ($ceksoal->status == 8) {
					$data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = $data['unable25'] = $data['unable26'] = $data['unable27'] = $data['unable28'] =  $data['unable29'] = null;
				}elseif ($ceksoal->status == 7) {
					$data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = $data['unable25'] = $data['unable26'] = $data['unable27'] =  $data['unable28'] =  null;
				}elseif ($ceksoal->status == 6) {
					$data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = $data['unable25'] = $data['unable26'] = $data['unable27'] =  null;
				}elseif ($ceksoal->status == 5) {
					$data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = $data['unable25'] = $data['unable26'] = null;
				}elseif ($ceksoal->status == 4) {
					$data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = $data['unable25'] = null;
				}elseif ($ceksoal->status == 3) {
					$data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = null;
				}elseif ($ceksoal->status == 2) {
					$data['unable21'] = $data['unable22'] = $data['unable23'] = null;
				}elseif ($ceksoal->status == 1) {
					$data['unable21'] = $data['unable22'] = null;
				}

				$data['unable11'] = $data['unable12'] = $data['unable13'] = $data['unable14'] = $data['unable15'] = $data['unable20'] = null;

			}elseif($ceksoal->id_soal == 1){
				if($ceksoal->status == 6){
					$data['unable11'] = $data['unable12'] = $data['unable13'] = $data['unable14'] = $data['unable15'] = $data['unable20']= $data['unable21'] = null;
				}elseif ($ceksoal->status == 5) {
					$data['unable11'] = $data['unable12'] = $data['unable13'] = $data['unable14'] = $data['unable15'] = null;
				}elseif ($ceksoal->status == 4) {
					$data['unable11'] = $data['unable12'] = $data['unable13'] = $data['unable14'] = null;
				}elseif ($ceksoal->status == 3) {
					$data['unable11'] = $data['unable12'] = $data['unable13'] = null;
				}elseif ($ceksoal->status == 2) {
					$data['unable11'] = $data['unable12'] = null;
				}elseif ($ceksoal->status == 1) {
					$data['unable11'] = null;
				}
			}
		}
			
		// 	$data['unable11'] = $data['unable12'] = $data['unable13'] = $data['unable14'] = $data['unable15'] = "unable";
		
		// $data['unable20'] = $data['unable21'] = $data['unable22'] = $data['unable23'] = $data['unable24'] = $data['unable25'] = $data['unable26'] = $data['unable27'] = $data['unable28'] = $data['unable29'] = "unable";

		// $data['unable31'] = $data['unable32'] = $data['unable33'] = "unable";

		// $data['unable41'] = $data['unable42'] = $data['unable43'] = "unable";

		// if($ceksoal != null){
		
		$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
		$isi['gayabelajar'] = $cek->status;

		$this->load->view('isi/materi',$data);
		$this->load->view('content/1_content',$isi);
		$this->load->view('headernfooter/footer');
	}


	public function kelistrikan(){
		$title['judul'] = 'Sistem Komputer - Kelistrikan';
		$this->load->view('headernfooter/header', $title);

		#cari cara buat ngembaliin nilai dari view ke controller, terus pilih yg mananya
		// $idsiswa = $this->fungsi->user_login()->id_siswa;
		// $status  = $this->model_siskom->status_gayabelajar($idsiswa);
		
		
		$idsiswa = $this->session->userdata('id_siswa');
		$status  = $this->model_siskom->status_gayabelajar($idsiswa);

		$where = array(
			'id_siswa' => $idsiswa
		);

		$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
		$isi['gayabelajar'] = $cek->status;

		$this->load->view(strtolower($status).'/1_kelistrikan');
		$this->load->view('content/1_content',$isi);
		$this->load->view('headernfooter/footer');
	}

		public function potensial(){
			$title['judul'] = 'Sistem Komputer - Potensial Listrik';
			$this->load->view('headernfooter/header', $title);

			// if($status == "auditori"){
			// 	$this->load->view('auditori/1a_potensial');
			// 	$this->load->view('auditori/1_content');
			// }else if($status == "visual"){
			// 	$this->load->view('visual/1a_potensial');
			// 	$this->load->view('visual/1_content');
			// }

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);

			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/1a_potensial');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function arus(){
			$title['judul'] = 'Sistem Komputer - Kuat Arus Listrik';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/1b_arus');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function bedapotensial(){
			$title['judul'] = 'Sistem Komputer - Beda Potensial';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/1c_bedapotensial');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');

		}

		public function resistansi(){
			$title['judul'] = 'Sistem Komputer - Resistansi';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/1d_resistansi');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');

		}

		public function daya(){
			$title['judul'] = 'Sistem Komputer - Daya Listrik';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/1e_dayalistrik');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');

		}

	// Komponen elektronika
	public function komponen_elektronika(){
		$title['judul'] = 'Sistem Komputer - Komponen Elektronika';
		$this->load->view('headernfooter/header', $title);

		$idsiswa = $this->session->userdata('id_siswa');
		$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
		$where = array(
			'id_siswa' => $idsiswa
		);

		$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
		$isi['gayabelajar'] = $cek->status;

		$this->load->view($status.'/2_komponenelektronika');
		$this->load->view('content/1_content',$isi);
		$this->load->view('headernfooter/footer');
	}
		
		public function resistor(){
			$title['judul'] = 'Sistem Komputer - Resistor';
			$this->load->view('headernfooter/header', $title);

			
			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/2a_resistor');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function kapasitor(){
			$title['judul'] = 'Sistem Komputer - Kapasitor';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/2b_kapasitor');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function induktor(){
			$title['judul'] = 'Sistem Komputer - Induktor';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/2c_induktor');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function dioda(){
			$title['judul'] = 'Sistem Komputer - Dioda';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/2d_dioda');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function transistor(){
			$title['judul'] = 'Sistem Komputer - Transistor';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/2e_transistor');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function transformator(){
			$title['judul'] = 'Sistem Komputer - Transformator';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/2f_transformator');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function relay(){
			$title['judul'] = 'Sistem Komputer - Relay';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/2g_relay');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function thyristor(){
			$title['judul'] = 'Sistem Komputer - Thyristor';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/2h_thyristor');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function tranducer(){
			$title['judul'] = 'Sistem Komputer - Tranducer';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/2i_tranducer');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

	public function skema(){
		$title['judul'] = 'Sistem Komputer - Skema Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$idsiswa = $this->session->userdata('id_siswa');
		$status  = $this->model_siskom->status_gayabelajar($idsiswa);
		
		$where = array(
			'id_siswa' => $idsiswa
		);

		$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
		$isi['gayabelajar'] = $cek->status;

		$this->load->view($status.'/3_skema');
		$this->load->view('content/1_content',$isi);
		$this->load->view('headernfooter/footer');
	}

		public function pcb(){
			$title['judul'] = 'Sistem Komputer - PCB';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/3a_layoutPCB');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		
		public function komponen(){
			$title['judul'] = 'Sistem Komputer - Komponen Elektronika';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/3b_komponen');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function alat(){
			$title['judul'] = 'Sistem Komputer - Peralatan Elektronika';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/3c_peralatan');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

	public function macam_rangkaian(){
		$title['judul'] = 'Sistem Komputer - Rangkaian Elektronika';
		$this->load->view('headernfooter/header', $title);

		$idsiswa = $this->session->userdata('id_siswa');
		$status  = $this->model_siskom->status_gayabelajar($idsiswa);
		
		$where = array(
			'id_siswa' => $idsiswa
		);

		$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
		$isi['gayabelajar'] = $cek->status;

		$this->load->view($status.'/4_rangkaian');
		$this->load->view('content/1_content',$isi);
		$this->load->view('headernfooter/footer');
	}

		public function jenis(){
			$title['judul'] = 'Sistem Komputer - Rangkaian Elektronika';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/4a_jenis');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function sinyal(){
			$title['judul'] = 'Sistem Komputer - Rangkaian Elektronika';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/4b_sinyal');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

		public function kerja(){
			$title['judul'] = 'Sistem Komputer - Rangkaian Elektronika';
			$this->load->view('headernfooter/header', $title);

			$idsiswa = $this->session->userdata('id_siswa');
			$status  = $this->model_siskom->status_gayabelajar($idsiswa);
			
			$where = array(
				'id_siswa' => $idsiswa
			);

			$cek = $this->model_siskom->cek_login('status_gayabelajar',$where);
			$isi['gayabelajar'] = $cek->status;

			$this->load->view($status.'/4c_kerja');
			$this->load->view('content/1_content',$isi);
			$this->load->view('headernfooter/footer');
		}

}

?>