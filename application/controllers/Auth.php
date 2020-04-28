<?php defined('BASEPATH') OR exit('No direct   script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$this->load->view('login');
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
	 	if(isset($post['login'])) {
	 			$this->load->model('user_r');
	 			$query = $this->user_r->login($post);
	 			if($query->num_rows() > 0) {
	 				$row = $query->row();
	 				$params = array(
	 					'userid' => $row->user_id,
	 					'level' => $row->level
	 				);
	 				$this->session->set_userdata($params);
	 				echo "<script>
	 					alert('Selamat, Login Berhasil');
	 					window.location='".site_url('dashboard')."';
	 				</script>";
	 			} else {
	 				echo "<script>
	 					alert('Selamat, Login Gagal, Username / Password Salah !');
	 					window.location='".site_url('auth/login')."';
	 				</script>";
	 			}
		}	
	} 	
} 
