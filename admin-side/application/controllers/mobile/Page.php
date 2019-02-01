<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("page_model");
	}
	
	public function index()
	{
		$this->load->view("mobile/page_view");
	}

	public function ambiljurnal(){
		echo json_encode($this->page_model->ambilJurnal()->result());
	}

	public function carijurnal($key){
		echo json_encode($this->page_model->cariJurnal($key)->result());
	}

	public function ambilsatujurnal($id){
		echo json_encode($this->page_model->ambilSatuJurnal($id)->result());
	}

	public function ambildetailjurnal($id){
		echo json_encode($this->page_model->ambilDetailJurnal($id)->result());
	}

	public function ambilisijurnal($id,$bab){
		echo json_encode($this->page_model->ambilIsiJurnal($id,$bab)->result());
	}
}