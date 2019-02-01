<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulis extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("islogin")){
			redirect("login");
		}
		$this->load->model("penulis_model");
	}

	public function index()
	{
		$this->load->view('penulis_view');
	}

	public function data(){
		echo json_encode($this->penulis_model->ambilPenulis()->result());
	}

	public function baca($id=null){
		echo json_encode($this->penulis_model->ambilsatuPenulis($id));
	}

	public function hapus($id){
		echo json_encode(array("status" => $this->penulis_model->hapusPenulis($id)));
	}

	public function simpan($mode){
		if($this->_validate($mode)){
			$data = array(
				"nim"=>$this->input->post("nim"),
				"nama"=>$this->input->post("nama"),
				"tempatlahir"=>$this->input->post("tempatlahir"),
				"tanggallahir"=>$this->input->post("tanggallahir"),
				"alamat"=>$this->input->post("alamat"),
				"jurusan"=>$this->input->post("jurusan"),
				"konsentrasi"=>$this->input->post("konsentrasi"),
				"telepon"=>$this->input->post("telepon"),
				"email"=>$this->input->post("email")
			);
	
			if($mode=="tambah"){
				$status = $this->penulis_model->buatPenulis($data);
				
			} elseif($mode=="ubah"){
				$status = $this->penulis_model->perbaruiPenulis($this->input->post("nim"),$data);
			}
			echo json_encode(array("status" => TRUE));
		} else {
			echo json_encode(array(
				"status" => FALSE,
				"message" => array(
					"nim" => form_error("nim"),
					"nama" => form_error("nama"),
					"jurusan" => form_error("jurusan"),
					"konsentrasi" => form_error("konsentrasi"),
					"telepon" => form_error("telepon"),
					"email" => form_error("email")
				)
			));
		} 
		
	}

	private function _validate($mode){
		$rules = array(
			array(
				"field" => "nim",
				"label" => "NIM",
				"rules" => "required|exact_length[10]".($mode=="tambah"?"|is_unique[tblpenulis.nim]":"")
			),
			array(
				"field" => "nama",
				"label" => "Nama",
				"rules" => "required|max_length[100]"
			),
			array(
				"field" => "jurusan",
				"label" => "Jurusan",
				"rules" => "required"
			),
			array(
				"field" => "konsentrasi",
				"label" => "Konsentrasi",
				"rules" => "required"
			),
			array(
				"field" => "telepon",
				"label" => "Telepon",
				"rules" => "max_length[15]"
			),
			array(
				"field" => "email",
				"label" => "Email",
				"rules" => "required|valid_email|max_length[50]"
			)
		);

		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters("<span class='help-block'>","</span>");
		return $this->form_validation->run();
	}
}
