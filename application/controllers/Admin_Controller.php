<?php

	class Admin_Controller extends CI_Controller{

		public function __construct() {
			parent::__construct();

			// Load form helper library
			$this->load->helper('form');

			// Load form validation library
			$this->load->library('form_validation');

			// Load database
			$this->load->model('Admin_Model');
		}

		public function home(){
			$userProfile['user'] = "admin";
			$userProfile['name'] = "Administrator Panel";
			$this->load->view('header',$userProfile);
			$this->load->view('admin');
		}

		public function addNotice(){
			$notice['note'] = $this->input->post('notice');
			$notice['eDate'] = $this->input->post('endDate');
			$notice['title'] = $this->input->post('title');
			//echo $notice;

			$result = $this->Admin_Model->addNotice($notice);
			if($result){
				$userProfile['user'] = "admin";
				$userProfile['name'] = "Administrator Panel";
				$this->load->view('header',$userProfile);
				$this->load->view('admin');	
			}
		}

		public function userRegistration(){
			$userProfile['user'] = "admin";
			$userProfile['name'] = "Administrator Panel";
			$this->load->view('header',$userProfile);
			$this->load->view('userRegistration');
		}

		public function calendar(){
			$data['calendar'] = $this->Admin_Model->generate_Calendar();
			$userProfile['user'] = "admin";
			$userProfile['name'] = "Administrator Panel";
			$this->load->view('header',$userProfile);
			$this->load->view('calendar',$data);
		}

		public function userInfo(){
			$userProfile['user'] = "admin";
			$userProfile['name'] = "Administrator Panel";
			$this->load->view('header',$userProfile);
			$this->load->view('userInfo');
		}

		public function loadContacts(){
			$userProfile['user'] = "admin";
			$userProfile['name'] = "Administrator Panel";
			$this->load->view('header',$userProfile);
			$this->load->view('contactList');
		}
	}

?>