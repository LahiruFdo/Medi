<?php

	class User_Controller extends CI_Controller{
		public function index(){
			//$user['name'] = $param; 
			$this->load->view('header');
			$this->load->view('admin');
		}
		public function loadheader(){
			$user['name'] = "myname"; 
			$this->load->view('header',$user);	
		}
	}

?>