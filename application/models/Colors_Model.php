<?php
	class Colors_Model extends CI_Model{
		const TBL = 'colors';

		public function __construct(){
			$this->load->database();
		}

		public function get_colors(){
			$this->db->order_by('name');
			$query = $this->db->get(self::TBL);
			return $query->result_array();
		}
	}
?>