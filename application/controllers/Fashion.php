<?php
defined('BASEPATH') OR exit ('No Script access allowed');

class Fashion extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->model(''); //load modelnya disini
	}

	public function index() {

		$this->load->view('allCategori/fashion');
	}

	//fashion perempuan
	public function fashionPerempuan() {
		$this->load->view('Fashion/perempuan_fashion');
	}

	//fashion laki-laki
	public function fashionLaki() {
		$this->load->view('Fashion/laki_fashion');
	}

	//fashion Anak
	public function fashionAnak() {
		$this->load->view('Fashion/anak_fashion');
	}
}