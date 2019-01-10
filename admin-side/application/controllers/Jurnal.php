<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("islogin")){
			redirect("login");
		}
		$this->load->model('jurnal_model');
	}

	public function index(){
		$data["penulis"] = $this->ambilPenulis("tambah");
		$this->load->view('jurnal_view',$data);
	}
	
	public function data(){
		echo json_encode($this->jurnal_model->ambilJurnal()->result());
	}

	public function baca($id=null){
		echo json_encode($this->jurnal_model->ambilsatuJurnal($id));
	}

	public function hapus($idjurnal){
		echo json_encode(array("status" => $this->jurnal_model->hapusJurnal($idjurnal)));
	}

	public function simpan($mode){
		if($this->_validate($mode)){
			$data = array(
				"judul"=>$this->input->post("judul"),
				"nim"=>$this->input->post("nim"),
				"jurusan"=>$this->input->post("jurusan"),
				"tahun"=>$this->input->post("tahun"),
				"jumlahhalaman"=>$this->input->post("jumlahhalaman"),
				"ringkasan"=>$this->input->post("ringkasan"),
				"iduser"=>$this->session->userdata("userid")
			);
	
			if($mode=="tambah"){
				$status = $this->jurnal_model->buatJurnal($data);				
			} elseif($mode=="ubah"){
				$status = $this->jurnal_model->perbaruiJurnal($this->input->post("idjurnal"),$data);
			}
			echo json_encode(array("status" => TRUE));
		} else {
			echo json_encode(array(
				"status" => FALSE,
				"message" => array(
					"judul" => form_error("judul"),
					"nim" => form_error("nim"),
					"jurusan" => form_error("jurusan"),
					"tahun" => form_error("tahun"),
					"jumlahhalaman" => form_error("jumlahhalaman"),
					"ringkasan" => form_error("ringkasan")
				)
			));
		} 
		
	}

	public function ambilPenulis($mode){
		$data = $this->jurnal_model->ambilPenulis($mode)->result();		
		
		return $data;
	}

	public function getnim(){
		echo json_encode($this->jurnal_model->ambilPenulis()->result());
	}

	private function _validate($mode){
		$rules = array(
			array(
				"field" => "judul",
				"label" => "Judul",
				"rules" => "required"
			),
			array(
				"field" => "nim",
				"label" => "NIM",
				"rules" => "required".($mode=="tambah"?"|is_unique[tbljurnal.nim]":"")
			),
			array(
				"field" => "jurusan",
				"label" => "Jurusan",
				"rules" => "required"
			),
			array(
				"field" => "tahun",
				"label" => "Tahun",
				"rules" => "required|numeric"
			),
			array(
				"field" => "jumlahhalaman",
				"label" => "Jumlah Halaman",
				"rules" => "required|numeric"
			),
			array(
				"field" => "ringkasan",
				"label" => "Ringkasan",
				"rules" => "required"
			)
		);

		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters("<span class='help-block'>","</span>");
		return $this->form_validation->run();
	}
}
