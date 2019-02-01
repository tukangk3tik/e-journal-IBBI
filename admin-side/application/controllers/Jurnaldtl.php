<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnaldtl extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("islogin")){
			redirect("login");
		}
		
		$this->load->model('jurnal_model');
	}

	public function index(){
		if($this->input->post()){
			$idjurnal = $this->input->post("idjurnal");

			$data["jurnal"] = $this->jurnal_model
								->ambildataJurnal($idjurnal)->result();

			$data["detail"] = $this->jurnal_model
								->ambilsemuaJenis($idjurnal);

			$data["enum"] = $this->_enum_select("tbljurnaldtl","jenis");

			$this->load->view("jurnaldtl_view",$data);
        } else {
            redirect("jurnal");
		}
	}
	
	public function view($id,$stats){
		$data["ket"] = $this->jurnal_model->ambildataJurnal($id)->result();
		$data["tampil"] = $this->jurnal_model->tampilDtl($id,$stats)->row();
		$this->load->view("detail_view",$data);
	}

	public function hapus($id,$stats){
		$this->jurnal_model->hapusjurnalDtl($id,$stats);
		redirect("jurnal/jurnaldtl");
	}


	public function simpan(){
		$data = array(
			"idjurnal"=>$this->input->post("idjurnal"),
			"jenis"=>$this->input->post("jenis"),
			"isi"=>$this->input->post("isi")
		);

		$this->jurnal_model->simpanjurnalDtl($data);
		redirect("jurnal/jurnaldtl");
	}

	private function _enum_select($table,$field){
		$query = " SHOW COLUMNS FROM `$table` LIKE '$field' ";
		$row = $this->db->query(" SHOW COLUMNS FROM `$table` LIKE '$field' ")->row()->Type;
		$regex = "/'(.*?)'/";
		preg_match_all( $regex , $row, $enum_array );
		$enum_fields = $enum_array[1];
		return ($enum_fields) ;
	}
}
