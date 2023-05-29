<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_siskom extends CI_Model{
		
	
		public function cek_login($table,$where){
			return $this->db->get_where($table,$where)->row();
		}

		public function datasiswa($username){
			$this->db->where('username',$username);
			$query = $this->db->get('siswa');
			$query->row();
		}

		//ngambil data siswa brdsr username. dipanggil di libraries
		public function get($username){
			$this->db->from('siswa');
			if($username != null){
				$this->db->where('username', $username);
			}
			$query = $this->db->get();
			return $query;
		}

		public function gayabelajar(){
			return $this->db->get('gaya_belajar');
		}

		public function input_gb($data){
			$this->db->insert('status_gayabelajar',$data);
		}

		public function posttest($data){
			$this->db->insert('posttest',$data);
		}

		public function input_namalengkap($data){
			$this->db->insert('siswa',$data);
		}

		public function status_gayabelajar($id){
			$this->db->select('status');
			$this->db->from('status_gayabelajar');	
			$this->db->where('id_siswa', $id);

			$query = $this->db->get();
			return $query->row()->status;
		}


		public function tes($id){
			$this->db->select('status');
			$this->db->from('status_gayabelajar');
			$this->db->where('id_siswa', $id);

			$query = $this->db->get();
			return $query;
		}

		public function pemanasan($data){
			$this->db->insert('soal_pemanasan',$data);
		}

		public function cek_status_pemanasan($table,$where){
			return $this->db->get_where($table,$where)->row();
		}

		function update_pemanasan($data,$where,$table){	
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function pemahaman($data){
			$this->db->insert('lat_pemahaman',$data);
		}

		// select all semua siswa
		public function siswa(){
			return $this->db->get('siswa');
		}

		public function cek_posttest($table,$where){
			return $this->db->get_where($table,$where)->row();
		}

		
		// public function get_statusby($id = null){
		// 	$this->db->from('status_gayabelajar');
		// 	if($id != null){
		// 		$this->db->where('id_siswa', $id);
		// 	}
		// 	$query = $this->db->get();
		// 	return $query;
		// }
	}



 ?>