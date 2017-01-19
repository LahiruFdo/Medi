<?php
	class Patient extends CI_Model{

		public function insert_data($data){
			$this->db->insert('patient', $data); 
        	return TRUE;

		}

		public function view_data(){
			$query=$this->db->where('active',1);
			$query=$this->db->get('patient');

			return $query->result();
		}

		public function edit_data($patient_id){
			$query=$this->db->get_where('patient', array('patient_id' => $patient_id));

			return $query->result();
		}

		public function delete_data($patient_id){
			$query=$this->db->get_where('patient', array('patient_id' => $patient_id));
			$this->db->SET('active',0);
	    	$this->db->where('patient_id', $patient_id);
        	$this->db->update('patient');

			return $query->result();
		}
	}
?>