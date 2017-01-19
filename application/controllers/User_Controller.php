<?php

	class User_Controller extends CI_Controller{

		public function __construct() {
			parent::__construct();

			// Load form helper library
			$this->load->helper('form');

			// Load form validation library
			$this->load->library('form_validation');

			// Load session library
			$this->load->library('session');

			// Load database
			$this->load->model('login_Authenticate');
		}

		public function userLogin(){

			$username = $this->input->post('username');
			$password = $this->input->post('password');


			if(($username == "")||($password == "")){
				$this->load->view('login');
			}

			else{
				$loginData['uname'] = $username;
				$loginData['pw'] = $password;
				$result = $this->login_Authenticate->userAuthenticate($loginData);

				if($result==""){
					$this->load->view('login');
				}
				else if($result=="admin"){
					$userProfile['user'] = "admin";
					$userProfile['name'] = "Administrator Panel";
					$userProfile['email'] = "";
					$userProfile['title'] = "Administrator";

					$this->load->model('User_Details');
					$doctors = $this->User_Details->getDoctorsDetails();
					$demos = $this->User_Details->getDemosDetails();
					$userProfile['doctors'] = $doctors;
					$userProfile['demos'] = $demos;

					$this->session->set_userdata($userProfile);
					$this->load->view('header',$userProfile);
					$this->load->view('admin');
					//header('location:index.php');					
				}
				else if($result=="doctor"){
					$userData = $this->login_Authenticate->getDoctorData($username);
					//echo sizeof($userData);
					$fname = $userData[0]->firstName;
					$lname = $userData[0]->lastName;
					$userProfile['user'] = "doctor";
					$userProfile['name'] = $fname." ".$lname;
					$userProfile['email'] = $userData[0]->email;
					$userProfile['title'] = $userData[0]->professionalTitle;
									
					//$this->session->set_userdata('logged_in', $userProfile);
					$this->load->view('header',$userProfile);
					$this->load->view('doctor',$userProfile);
				}
				else if($result=="demonstrator"){
					$userData = $this->login_Authenticate->getDemonstratorData($username);
					$fname = $userData[0]->firstName;
					$lname = $userData[0]->lastName;
					$userProfile['user'] = "demonstrator";
					$userProfile['name'] = $fname." ".$lname;
					$userProfile['email'] = $userData[0]->email;
					$userProfile['title'] = $userData[0]->professionalTitle;
									
					//$this->session->set_userdata('logged_in', $userProfile);
					$this->load->view('header',$userProfile);
					$this->load->view('patient/demo',$userProfile);
				}
			}
		}
	}

?>