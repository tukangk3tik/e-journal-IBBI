<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("islogin")){		//fungsi untuk cek login, jika user tidak login, maka akan kembali ke login
			redirect("login");
		}
	}

	public function index()
	{
		$this->load->view('beranda_view');
	}
}
