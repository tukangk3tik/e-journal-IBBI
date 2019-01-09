<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnaldtl extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("islogin")){
			redirect("login");
		}
		base_url('ejurnalibbi/jurnal/');
		$this->load->model('jurnaldtl_model');
	}

	public function index(){
		if($this->input->get()){
            $this->load->view("jurnaldtl_view",array(
                "mahasiswa" => $this->jurnal_model
                    ->getjurnalDtl($this->input->get("idjurnal"))
                    ->result(),
                "title" => "Laporan Mahasiswa"
            ));
        }
	}

	public function data($id){
		echo json_encode($this->jurnal_model->ambilJurnal($id)->result());
	}
	
}
