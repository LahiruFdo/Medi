<?php

	class Login_Controller extends CI_Controller{
		public function index(){
			$this->load->view('login');
		}

		public function loadWhyUS(){
			$this->load->view('whyUs');
		}

		public function loadAboutUS(){
			$this->load->view('aboutUs');
		}

		public function loadContact(){
			$this->load->view('contact');
		}

		public function loadUserPages(){
			$user['name'] = "Administrator Panel";
			$this->load->view('header',$user);
			$this->load->view('admin');
		}

		public function logout(){
			$sess_array = array(
				'username' => ''
				);
			$this->session->unset_userdata('logged_in', $sess_array);
			$this->load->view('login');
		}
	}

?>