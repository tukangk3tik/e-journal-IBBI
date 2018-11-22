<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulis extends CI_Controller {

	public function index()
	{
		$this->load->view('penulis_view');
	}
}
