<?php

	class Admin_Model extends CI_Model{

		public function addNotice($notice){
			$sDate = date("Y-m-d");
			$data = array(
					'title' 		=> $notice['title'],
					'start_date' 	=> $sDate,
					'end_date' 		=> $notice['eDate'],
					'description' 	=> $notice['note']
				);
			$query = $this->db->insert('notice', $data);
			if($query){
				return true;
			}
			else{
				return false;
			}
		}

		public function addNewDemo($nUser){
			$this->db->"INSERT into demo_staff (staff_id,user_name,proffessionalTitle,firstName,lastName,gender,officialTelephone,personalTelephone,email) VALUES ('$nUser['uID']','$nUser['uname']','$nUser['pType']','$nUser['fname']','$nUser['lname']','$nUser['gender']','$nUser['teleO']','$nUser['teleP']','$nUser['email']')";
		}

		public function get_cal_data($year,$month){
			$query = $this->db->select('end_date, title')->from('notice')->like('end_date',"$year-$month", 'after')->get();
			$cal_data = array();
			foreach($query->result() as $row){
				$cal_data[substr($row->end_date,8,2)] = $row->title;
			}
			return $cal_data;
		}

		public function generate_Calendar($year,$month){
			$conf = array(
					'start_day' => 'monday',
					'show_next_prev' => true ,
					'next_prev_url' => base_url().'/index.php/Admin_Controller/calendar',
					
				);
			$conf['template'] = '

		           {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}

		           {heading_row_start}<tr>{/heading_row_start}

		           {heading_previous_cell}<th class="butn-left"><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
		           {heading_title_cell}<th class="mid-butn" colspan="{colspan}">{heading}</th>{/heading_title_cell}
		           {heading_next_cell}<th class="butn-right"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

		           {heading_row_end}</tr>{/heading_row_end}

		           {week_row_start}<tr>{/week_row_start}
		           {week_day_cell}<td class="week-day">{week_day}</td>{/week_day_cell}
		           {week_row_end}</tr>{/week_row_end}

		           {cal_row_start}<tr class="calendar_days">{/cal_row_start}
		           {cal_cell_start}<td class="day">{/cal_cell_start}

		           {cal_cell_content}
		                <div class="calendar_day_num">{day}</div>
		                <div class="calendar_content">{content}</div>
		           {/cal_cell_content}
		           {cal_cell_content_today}
		                <div class="calendar_day_num calendar_highlight">{day}</div>
		                <div class="calendar_content">{content}</div>
		           {/cal_cell_content_today}

		           {cal_cell_no_content}<div class="calendar_day_num">{day}</div>{/cal_cell_no_content}
		           {cal_cell_no_content_today}<div class="calendar_day_num calendar_highlight">{day}</div>{/cal_cell_no_content_today}

		           {cal_cell_blank}&nbsp;{/cal_cell_blank}

		           {cal_cell_end}</td>{/cal_cell_end}
		           {cal_row_end}</tr>{/cal_row_end}

		           {table_close}</table>{/table_close}
		    ';
			$this->load->library('calendar',$conf);

			$cal_data = $this->get_cal_data($year,$month);

			return $this->calendar->generate($year, $month, $cal_data);
		}
	}

?>