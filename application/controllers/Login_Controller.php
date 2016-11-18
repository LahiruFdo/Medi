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
	}

?>