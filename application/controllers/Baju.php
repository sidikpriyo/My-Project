<?php
defined('BASEPATH') OR exit ('No Script access allowed');

class Baju extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->model(''); //load modelnya disini
	}

	public function index() {

		$this->load->view('allCategori/baju');
	}

	//Baju Perempuan
	public function bajuPerempuan() {
		$this->load->view('Baju/perempuan_baju');
	}

	//baju laki-laki
	public function bajuLaki() {
		$this->load->view('Baju/laki_baju');
	}

	//baju Anak
	public function bajuAnak() {
		$this->load->view('Baju/anak_baju');
	}
}