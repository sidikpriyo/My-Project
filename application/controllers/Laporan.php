<?php
defined('BASEPATH') OR exit ('No script access allowed');

class Laporan extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('M_Admin');

		if ($this->session->userdata('status') != 'admin_laporan') {
			redirect('Auth');
		}
	}

	public function Dashboard() {
		$this->load->view('adm_laporan/overview');
	}

	public function logout() {
		$this->session->unset_userdata('id_admin');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('status');
		session_destroy();
		redirect('Auth');
	}

	//menu
	public function laporan(){
		$this->load->view('adm_laporan/laporan');
	}

	public function laporan_a(){
		$this->load->view('adm_laporan/laporan_a');
	}

	//navbar menu
	public function profil() {
		$this->load->view('adm_laporan/profil');
	}

	public function pengaturan() {
		$this->load->view('adm_laporan/pengaturan');
	}
}