<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Data_Model extends CI_Model{
		CONST TBL = 'data';

		public function __construct(){
			$this->load->database();
		}

		public function create(){
			$data = array(
				'id_color' => $this->input->post('id_color'),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'birthday' => $this->input->post('birthday')
			);
			return $this->db->insert(self::TBL, $data);
		}
	}
?>