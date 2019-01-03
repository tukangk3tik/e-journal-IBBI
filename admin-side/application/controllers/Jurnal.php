<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('jurnal_model');
	}

	public function index(){
		$this->load->view('jurnal_view');
	}
	
	public function data(){
		echo json_encode($this->jurnal_model->ambilJurnal()->result());
	}
}
