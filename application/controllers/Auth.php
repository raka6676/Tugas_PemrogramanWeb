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
	 				echo "Login Berhasil";
	 			} else {
	 				echo "Login Gagal";
	 			}
		}	
	} 	
} 
