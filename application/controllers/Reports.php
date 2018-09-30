<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function view($num = 1){
		$data = array('title' => "Report 00$num", 'refresh' => 5);

		$this->load->view('templates/header', $data);
		$this->load->view('reports/index', $data);
		$this->load->view('templates/footer', $data);
	}

}
