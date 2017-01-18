<?php
	class Patient extends CI_Model{

		public function insert_data($data){
			$this->db->insert('patient', $data); 
        	return TRUE;

		}

		public function view_data(){
			$query=$this->db->get('patient');

			return $query->result();
		}

		public function edit_data($patient_id){
			$query=$this->db->get_where('patient', array('patient_id' => $patient_id));

			return $query->result();
		}
	}
?>