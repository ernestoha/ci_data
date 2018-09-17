<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function index(){

		$data = array('title' => "Data", 'colors' => $this->Colors_Model->get_colors());

		$this->load->view('templates/header', $data);
		$this->load->view('data/create', $data);
		$this->load->view('templates/footer', $data);
	}

	public function create(){
		$data = array('success' => false, 'messages' => array());
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name", "Name", "trim|required|max_length[80]");
		$this->form_validation->set_rules("birthday", "Date of Birth", "trim|required|callback_valid_date|max_length[10]");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|max_length[255]");
		$this->form_validation->set_rules("id_color", "Favorite Color", "trim|required|callback_valid_select");
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		if ($this->form_validation->run()){
			$res = $this->Data_Model->create();
			$data['success'] = true;
			if ($res){
				$data['messages'] = '<div class="alert alert-success">Data has been saved.</div>';
			} else {
				$data['messages'] = '<div class="alert alert-danger">Data has not been saved. Check, and try again.</div>';
			}
		} else {
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($data);
	}

	public function valid_date($date){//0123-56-89
		$year = (int) substr($date, 0, 4);
    	$month = (int) substr($date, 5, 2);
    	$day = (int) substr($date, 8, 2);
    	$res = checkdate($month, $day, $year);
    	if ($res == false) {
    		$this->form_validation->set_message('valid_date', 'The %s  field must containt a correct date (YYYY-MM-DD).');
    	}
    	return $res;
	}

	public function valid_select($value){
		if($value=="none"){
			$this->form_validation->set_message('valid_select', 'The %s field must be selected.');
			return false;
		} else{
			return true;
		}
	}

}
