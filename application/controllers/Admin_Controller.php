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
			$this->load->model('User_Details');
		}

		public function home(){
			$userProfile['user'] = "admin";
			$userProfile['name'] = "Administrator Panel";
			$userdata['doctors'] = $this->User_Details->getDoctorsDetails();
			$userdata['demonstrators'] = $this->User_Details->getDemosDetails();
			$this->load->view('header',$userProfile);
			$this->load->view('admin',$userdata);
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
				$this->home();
			}
		}

		public function insertNewUser(){
			$nUser['type'] = $this->input->post('uType');
			$nUser['fname'] = $this->input->post('fname');
			$nUser['lname'] = $this->input->post('lname');
			$nUser['gender'] = $this->input->post('gender');
			$nUser['teleO'] = $this->input->post('teleO');
			$nUser['teleP'] = $this->input->post('teleP');
			$nUser['pType'] = $this->input->post('pType');
			$nUser['email'] = $this->input->post('email');
			$nUser['cert'] = $this->input->post('cert');
			$nUser['spec'] = $this->input->post('spec');
			$nUser['uname'] = $this->input->post('uname');
			$nUser['pw1'] = $this->input->post('pw1');
			$nUser['pw2'] = $this->input->post('pw2');
			$nUser['uID'] = $this->input->post('uID');

			if($nUser['type']=="Demonstrator"){
				$this->Admin_Model->addNewDemo($nUser);
			}
			else{
				$this->Admin_Model->addNewDoct($nUser);
			}
		}

		public function userRegistration(){
			$userProfile['user'] = "admin";
			$userProfile['name'] = "Administrator Panel";
			$this->load->view('header',$userProfile);
			$this->load->view('userRegistration');
		}

		public function calendar($year,$month){
			$data['calendar'] = $this->Admin_Model->generate_Calendar($year,$month);
			$userProfile['user'] = "admin";
			$userProfile['name'] = "Administrator Panel";
			$this->load->view('header',$userProfile);
			$this->load->view('calendar',$data);
		}

		public function userInfo(){
			$userProfile['user'] = "admin";
			$userProfile['name'] = "Administrator Panel";
			$userdata['doctors'] = $this->User_Details->getDoctorsDetails();
			$userdata['demonstrators'] = $this->User_Details->getDemosDetails();
			$this->load->view('header',$userProfile);
			$this->load->view('userInfo',$userdata);
		}

		public function loadContacts(){
			$userProfile['user'] = "admin";
			$userProfile['name'] = "Administrator Panel";
			$this->load->view('header',$userProfile);
			$this->load->view('contactList');
		}
	}

?>