<?php
defined('BASEPATH') OR exit ('No Script access allowed');

class Sepatu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->model(''); //load modelnya disini
	}

	public function index() {

		$this->load->view('allCategori/sepatu');
	}

	//sepatu perempuan
	public function sepatuPerempuan() {
		$this->load->view('Sepatu/perempuan_sepatu');
	}

	//sepatu laki-laki
	public function sepatuLaki() {
		$this->load->view('Sepatu/laki_sepatu');
	}

	//sepatu Anak
	public function sepatuAnak() {
		$this->load->view('Sepatu/anak_sepatu');
	}
}