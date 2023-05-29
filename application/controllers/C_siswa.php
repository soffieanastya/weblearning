<?php 
 
class c_siswa extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("siskom"));
		}

		$this->load->database();
		$this->load->model('model_siskom');
		$this->load->helper('url_helper');
	}
 
	public function index(){
		$data['judul'] = 'Gaya Belajar - Sistem Komputer';
		$data['keluar'] = 'KELUAR';
		//$title['datasiswa'] = $this->model_siskom->datasiswa($this->session->userdata('username'));
		// $data['nama'] = $this->session->userdata('nama_lengkap');
		$this->load->view('headernfooter/header2', $data);

		// $query['jumlah'] = $this->model_siskom->gayabelajar('gaya_belajar')->num_rows();

		$id     = $this->session->userdata('id_siswa');
		$cek    = $this->model_siskom->status_gayabelajar($id);
		// $data   = $cek->status;
		$banyak = count($data);
		// echo $cek."test";
		$tes['tesaja'] = $cek;
		$tes['banyak'] = $banyak;
		if($cek != null ){
			$this->load->view('headernfooter/header', $data);
			$this->load->view('isi/utama',$tes);
		}else{
			redirect('c_siswa/masuk_gayabelajar');
		}
		
		$this->load->view('headernfooter/footer');
	}
	
	public function masuk_gayabelajar(){
		$data['judul'] = 'Gaya Belajar - Sistem Komputer';
		$data['keluar'] = 'KELUAR';


		$this->load->view('headernfooter/header2', $data);

		$query['data'] = $this->model_siskom->gayabelajar()->result();
		$query['message'] = null;

		$this->load->view('isi/gaya_belajar',$query);
		$this->load->view('headernfooter/footer');
	}

}