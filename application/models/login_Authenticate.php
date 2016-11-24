<?php

	class login_Authenticate extends CI_Model{

		public function userAuthenticate($data){
			$this->db->select('*');
			$this->db->from('user');
			$select = "user_name =" . "'" . $data['uname']."'";
			//$select = "user_name=".$data['uname'];
			$this->db->where($select);
			$query = $this->db->get();
			
			$rowcount = $query->num_rows();

			if($rowcount==0){
				return "";
			}
			else if($rowcount==1){
				$rslt = $query->result();
				$correctPW = $rslt[0]->password;
				$givenPW = md5($data['pw']);
				if($givenPW==$correctPW){
					return $rslt[0]->designation;
				}
				else{
					return "";
				}
			}
			// 	$uname = $data['uname'];
			// 	$query = $query->result();
			// 	$result['uname']='T';
			// 	$pw = md5($data['pw']);

			// 	if($query[0]->password==$pw){
			// 		$pos = $query['designation'];
			// 		if($pos=="admin"){
			// 			$result['pw']='T';
			// 			$result['fname']='Administrator';
			// 			$result['lname']='Panel';
			// 		}
			// 		else if($pos=="doctor"){
			// 			$this->db->get('doctor_staff');
			// 			$qry = $this->db->where("user_name = '$uname'");
			// 			$result['pw']='T';
			// 			$result['fname']=$qry['firstName'];
			// 			$result['lname']=$qry['lastName'];
			// 		}
			// 		else if($pos=="demostrator"){
			// 			$this->db->get('demo_staff');
			// 			$qry = $this->db->where("user_name = '$uname'");
			// 			$result['pw']='T';
			// 			$result['fname']=$qry['firstName'];
			// 			$result['lname']=$qry['lastName'];
			// 		}
			// 	}
			// 	else{
			// 		$result['uname']='T';
			// 		$result['pw']='F';
			// 		$result['fname']='-';
			// 		$result['lname']='-';
			// 	}
			// }

			// return $result;
		}

		public function getDoctorData($username){
			$this->db->select('*');
			$this->db->from('doctor_staff');
			$select = "user_name =" . "'" . $username."'";
			$this->db->where($select);
			$query = $this->db->get();
			return $query->result();
		}

		public function getDemonstratorData($username){
			$this->db->select('*');
			$this->db->from('doctor_staff');
			$select = "user_name =" . "'" . $username."'";
			$this->db->where($select);
			$query = $this->db->get();
			return $query->result();
		}
	}

?>