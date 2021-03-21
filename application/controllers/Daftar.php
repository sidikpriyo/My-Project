<?php
defined('BASEPATH') OR exit('No script access allowed');

class Daftar extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		// $this->load->model('M_Daftar');
}
	public function index() {
		$this->load->view('Daftar/daftar_page');
	}

	public function daftarAkun() {
		//code
	}
}