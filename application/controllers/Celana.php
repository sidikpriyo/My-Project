<?php
defined('BASEPATH') OR exit ('No Script access allowed');

class Celana extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->model(''); //load modelnya disini
	}

	public function index() {

		$this->load->view('allCategori/celana');
	}

	//Celana Perempuan
	public function celanaPerempuan() {
		$this->load->view('Celana/perempuan_celana');
	}

	//celana laki-laki
	public function celanaLaki() {
		$this->load->view('Celana/laki_celana');
	}

	//celana Anak
	public function celanaAnak() {
		$this->load->view('Celana/anak_celana');
	}
}