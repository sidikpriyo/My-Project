<?php
defined('BASEPATH') OR exit ('No script access allowed');

class User extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('M_Admin');

		if ($this->session->userdata('status') != 'admin_user') {
			redirect('Auth');
		}
	}

	public function Dashboard() {
		$this->load->view('adm_user/overview');
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
	public function user(){
		$this->load->view('adm_user/user');
	}

	public function user_a() {
		$this->load->view('adm_user/user_a');
	}

	//navbar menu
	public function profil() {
		$this->load->view('adm_user/profil');
	}

	public function pengaturan() {
		$this->load->view('adm_user/pengaturan');
	}

}