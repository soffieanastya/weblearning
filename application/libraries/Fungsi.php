<?php 

class Fungsi{

	protected $ci;

	function __construct(){
		$this->ci =& get_instance();
	}

	function user_login(){
		$this->ci->load->model('model_siskom');
		$username  = $this->ci->session->userdata('username');
		//ngambil ke model siskom dgn function get, masukin parameter username itu teh maksudna ok, ngambil row karena yang yg diambil cuma sebaris, bukan setabel tabelna ok
		$user_data = $this->ci->model_siskom->get($username)->row();
		return $user_data;
	}

}


 ?>