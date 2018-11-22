<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal extends CI_Controller {

	public function index()
	{
		$this->load->view('jurnal_view');
    }
}
