<?php
defined('BASEPATH') OR exit ('No Script access allowed');

class Sandal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->model(''); //load modelnya disini
	}

	public function index() {

		$this->load->view('allCategori/sandal');
	}

	//sandal perempuan
	public function sandalPerempuan() {
		$this->load->view('Sandal/perempuan_sandal');
	}

	//sandal laki
	public function sandalLaki() {
		$this->load->view('Sandal/laki_sandal');
	}

	//sandal Anak
	public function sandalAnak() {
		$this->load->view('Sandal/anak_sandal');
	}
}