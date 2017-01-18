<?php
	class Demo_controller extends CI_Controller{

		public function __construct()
	    {
	        parent::__construct();
	        $this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
	        $this->load->model('patient'); 
	    }

		public function index(){
			$user['name'] = "Administrator Panel";
			$this->load->view('header',$user);
			$this->load->view('patient/demo');
		}

		public function registerpatient(){
			$user['name'] = "Administrator Panel";
			$this->load->view('header',$user);
			$this->load->view('patient/regPatient');
		}

		public function submit_data(){
	    $data = array('patient_name'                   => $this->input->post('patient_name'),
	                  'gender'                         => $this->input->post('gender'),
	                  'address'                        => $this->input->post('address'),
	                  'telephone_no'                   => $this->input->post('telephone_no'),
	                  'telephone_no' 				   => (!empty($telephone_no)) ? $telephone_no : NULL,
	                  'mobile_no'                      => $this->input->post('mobile_no'),
	                  'mobile_no'  				   	   => (!empty($mobile_no)) ? $mobile_no : NULL,
	                  'dob'                            => $this->input->post('dob'),
	                  'district'					   => $this->input->post('district'),
	                  'siblings'					   => $this->input->post('siblings'),
	                  'siblings'  				  	   => (!empty($siblings)) ? $siblings : NULL,
	                  'father'						   => $this->input->post('f_occupation'),
	                  'mother'						   => $this->input->post('m_occupation'),
	                  'income'						   => $this->input->post('income'),
	                  'income' 						   => (!empty($income)) ? $income : NULL,
	                  'guardian'					   => $this->input->post('guardian'),
	                  'diagnosis'					   => $this->input->post('diagnosis'),
	                  'bed_id'						   => $this->input->post('bed_id'));
	    
	    $insert = $this->patient->insert_data($data);
	    //$this->session->set_flashdata('message', 'Your data inserted Successfully..');
	    redirect('demo_controller/registerpatient');
	    }

		public function viewpatient(){
			$user['name'] = "Administrator Panel";
			$this->load->view('header',$user);
			$this->data['view_data']= $this->patient->view_data();
			$this->load->view('patient/patientView',$this->data, FALSE);
		}

		public function editpatient($patient_id){
			$user['name'] = "Administrator Panel";
			$this->load->view('header',$user);
			$this->data['edit_data']= $this->patient->edit_data($patient_id);
    		$this->load->view('patient/updatePatient', $this->data, FALSE);
			
		}

		public function updatepatient($patient_id)
	    {
	    $data = array('patient_name'                   => $this->input->post('patient_name'),
	                  'gender'                         => $this->input->post('gender'),
	                  'address'                        => $this->input->post('address'),
	                  'telephone_no'                   => $this->input->post('telephone_no'),
	                  'telephone_no' 				   => (!empty($telephone_no)) ? $telephone_no : NULL,
	                  'mobile_no'                      => $this->input->post('mobile_no'),
	                  'mobile_no'  				   	   => (!empty($mobile_no)) ? $mobile_no : NULL,
	                  'dob'                            => $this->input->post('dob'),
	                  'district'					   => $this->input->post('district'),
	                  'siblings'					   => $this->input->post('siblings'),
	                  'siblings'  				  	   => (!empty($siblings)) ? $siblings : NULL,
	                  'father'						   => $this->input->post('f_occupation'),
	                  'mother'						   => $this->input->post('m_occupation'),
	                  'income'						   => $this->input->post('income'),
	                  'income' 						   => (!empty($income)) ? $income : NULL,
	                  'guardian'					   => $this->input->post('guardian'),
	                  'diagnosis'					   => $this->input->post('diagnosis'),
	                  'bed_id'						   => $this->input->post('bed_id'));
	    $this->db->where('patient_id', $patient_id);
	    $this->db->update('patient', $data);
	    //$this->session->set_flashdata('message', 'Your data updated Successfully..');
	    redirect('demo_controller/viewpatient');
	    }
	}
?>