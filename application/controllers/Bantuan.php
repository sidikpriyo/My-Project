<?php
defined('BASEPATH') OR exit('N script access allowed');

class Bantuan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->model(''); //load modelnya
	}

	public function index() {

		$this->load->view('Bantuan/bantuan_page');
	}
}