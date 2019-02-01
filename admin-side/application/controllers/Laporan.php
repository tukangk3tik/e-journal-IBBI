<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {
    public function  __construct(){
        parent::__construct();
        $this->load->model("jurnal_model");
        $this->load->model("laporan_model");
    }
	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function jurnaltahun(){
        if($this->input->get()){
            $this->load->view("laporan/jurnal_laporan",array(
                "jurnal" => $this->laporan_model
                    ->getJurnal($this->input->get("tahun"))
                    ->result(),
                "title" => "Laporan Jurnal"
            ));
        }else{
            $this->load->view("dialog/jurnal_dialog",
                array(
                    "action" => "laporan/jurnaltahun"
                ));
        }
    }

    public function jurnaljurusan(){
        if($this->input->get()){
            $this->load->view("laporan/jurnal_laporan",array(
                "jurnal" => $this->laporan_model
                    ->getJurnalJurusan($this->input->get("jurusan"))
                    ->result(),
                "title" => "Laporan Jurnal Per-Jurusan"
            ));
        }else{
            $this->load->view("dialog/jurnaljurusan_dialog",
                array(
                    "action" => "laporan/jurnaljurusan"
                ));
        }
    }
    
    public function jurnallengkap(){
        if($this->input->get()){
            $data = $this->laporan_model->getJenis($this->input->get("idjurnal"));
        
            if (count($data) == 6) {
                $this->load->view("laporan/jurnalper_laporan",array(
                    "datajurnal" => $this->laporan_model
                        ->getJurnalOne($this->input->get("idjurnal"))
                        ->result(),
                    "isijurnal" => $this->laporan_model
                        ->getJenisJurnal($this->input->get("idjurnal"))
                        ->result_array(),
                    "title" => "Laporan Lengkap Per-Jurnal", "params" => $data
                ));
            } else {
                $this->_redirectjurnalper();
            }
        }else{
            $this->_redirectjurnalper();
        }
    }

    private function _redirectjurnalper(){
        $this->load->view("dialog/jurnalper_dialog",
                array(
                    "action" => "laporan/jurnallengkap",
                    "jurnalall" => $this->laporan_model->getJurnalAll()->result()
                ));
    }

    public function penulis(){
        $this->load->view("laporan/penulis_laporan",array(
            "penulis" => $this->laporan_model->getPenulis()->result(),
            "title" => "Laporan Penulis"
                ));
        }
    
    public function user(){
        $this->load->view("laporan/user_laporan",array(
            "user" => $this->laporan_model->getUser()->result(),
            "title" => "Laporan User"
            ));
        }
    
    }