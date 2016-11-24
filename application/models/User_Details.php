<?php

	class User_Details extends CI_Model{
		public function getDoctorsDetails(){
			$this->db->select('*');
			$this->db->from('doctor_staff');
			$this->db->order_by("staff_id", "asc");
			$query1 = $this->db->get();
			return $query1->result();
		}

		public function getDemosDetails(){
			$this->db->select('*');
			$this->db->from('demo_staff');
			$this->db->order_by("staff_id", "asc");
			$query1 = $this->db->get();
			return $query1->result();
		}
	}

?>