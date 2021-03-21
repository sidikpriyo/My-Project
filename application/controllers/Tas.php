<?php
defined('BASEPATH') OR exit ('No Script access allowed');

class Tas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->model(''); //load modelnya disini
	}

	public function index() {

		$this->load->view('allCategori/tas');
	}

	//tas perempuan
	public function tasPerempuan() {
		$this->load->view('Tas/perempuan_tas');
	}

	//tas laki-laki
	public function tasLaki() {
		$this->load->view('Tas/laki_tas');
	}

	//tas Anak
	public function tasAnak() {
		$this->load->view('Tas/anak_tas');
	}
}