<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		
			$data['title']= "Sign Login";
			$this->load->view('mahasiswa/header', $data);
			$this->load->view('v_login');

			$username = $this->input->post('username');
			$password = $this->input->post('password');
		
	}

}
?>
