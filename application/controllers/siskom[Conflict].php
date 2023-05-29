<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siskom extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('model_siskom');
		$this->load->helper('url_helper');
			
	}
	public function index()
	{
		$title['judul'] = 'LOGIN - SISKOM PI';

		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header2', $title);
		$this->load->view('isi/hal_login');
		$this->load->view('headernfooter/footer');
	}

	public function tentang()
	{
		$title['judul'] = 'TENTANG - SISKOM PI';

		// ambil data siswa 
		// $data['siswa'] = $this->model_siskom->data_siswa();

		$this->load->view('headernfooter/header', $title);
		$this->load->view('isi/tentang');
		$this->load->view('headernfooter/footer');
	}

	public function aksilogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//buat kondisi ngecek ke database. 'username' sm 'password' itu th nama kolomnya ok sof
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_siskom->cek_login("siswa",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama'   => $username,
				'status' => "login"
			);
 
			$this->session->set_userdata($data_session);
 
			redirect(site_url("c_siswa"));
 
		}else{
			$this->load->view('headernfooter/header');
			$this->load->view('errorrecovery/notfound');
			$this->load->view('headernfooter/footer');
		}
	}

	public function signup()
	{
		$title['judul'] = 'Sign Up - Sistem Komputer';
		$this->load->view('headernfooter/header', $title);
		$this->load->view('isi/signup');
		//$this->form_validation->set_rules()
	}

	// public function gaya_belajar()
	// {
	// 	$this->load->database();
	// 	$title['judul'] = 'Gaya Belajar - Sistem Komputer';
	// 	$this->load->view('headernfooter/header', $title);
		
	// 	//ini nyoba pagination, tapi gagal wkeke
		
	// 	$jml_data = 29;
	// 	$this->load->library('pagination');
	// 	$config['base_url'] = base_url().'index.php/Pengatur/gaya_belajar/';
	// 	$config['total_rows'] = $jml_data;
	// 	$config['per_page'] = 5;
	// 	$from = $this->uri->segment(6);
	// 	$this->pagination->initialize($config);
	// 	$data['page'] = $this->model_siskom->gayabelajar($config['per_page'], $from);
		

	// 	//ini tanpa pagination, tp masih bingung inputnya nnti buat nentuin gaya belajarnya belum ini hehe bodo ah
	// 	// $query = $this->model_siskom->gayabelajar();
	// 	// $data['query'] = $query->result_array();

	// 	$data['hasil'] = $this->model_siskom->gayabelajar();
	// 	$data['jumlah'] = $this->model_siskom->gaya_belajar('gaya_belajar')->num_rows();



	// 	$this->load->view('isi/gaya_belajar', $data);
	// 	$this->load->view('headernfooter/footer');
	// 	//$this->form_validation->set_rules()
	// }
	public function aksi_gayabelajar()
	{
		$title['judul'] = 'Gaya Belajar - SISKOM PI';
		$this->load->view('headernfooter/header', $title);
		$i;
		$auditori = 0;
		$kinestetik = 0;
		$visual = 0;
		for($i=1; $i<30; $i++){
			$jawaban = $this->input->post('pilihan['.$i.']');
			
			if($i <= 9){
				if($jawaban == "Sering"){
					$auditori = $auditori+2;
				}else if($jawaban == "Kadang"){
					$auditori = $auditori+1;
				}else if($jawaban == "Jarang"){
					$auditori = 0;
				}
				
			}else if($i <= 19){
				if($jawaban == "Sering"){
					$kinestetik = $kinestetik+2;
				}else if($jawaban == "Kadang"){
					$kinestetik = $kinestetik+1;
				}else if($jawaban == "Jarang"){
					$kinestetik = 0;
				}
			}else if($i <= 29){
				if($jawaban == "Sering"){
					$visual = $visual+2;
				}else if($jawaban == "Kadang"){
					$visual = $visual+1;
				}else if($jawaban == "Jarang"){
					$visual = 0;
				}
			}

			$id_siswa = $this->fungsi->user_login()->id_siswa;
			echo $auditori;
			echo $kinestetik;
			echo $visual;
			if($auditori>$kinestetik && $auditori>$visual){
				$diagnose = "auditori";		
			}else if($kinestetik>$auditori && $kinestetik>$visual){
				$diagnose = "kinestetik";				
			}else if($visual>$auditori && $visual>$kinestetik){
				$diagnose = "visual";				
			}
			$data = array(
				'id_siswa' => $id_siswa,
				'status' => $diagnose
			);
			$this->model_siskom->input_gb($data);
			redirect('siskom/jenis_gb');
		}

		$this->load->view('isi/utama');
		$this->load->view('headernfooter/footer');
	}

	public function utama(){
		$title['judul'] = 'Halaman Utama - Sistem Komputer';
		$this->load->view('headernfooter/header', $title);
		$this->load->view('isi/utama');
		$this->load->view('headernfooter/footer');
	}

	public function jenis_gb(){
		$title['judul'] = 'Jenis Gaya belajar - Sistem Komputer';
		$this->load->view('headernfooter/header', $title);


		$id_siswa = $this->fungsi->user_login()->id_siswa;
		$data['idsiswa'] = $this->model_siskom->status_gayabelajar($id_siswa);

		$this->load->view('isi/jenis_gb',$data);
		$this->load->view('headernfooter/footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('siskom'));
	}

}

?>