<?php
defined('BASEPATH') OR exit ('No script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Admin');
	}

	public function index() {
		
		$this->load->view('login_page');
		$this->session->sess_destroy();
	}

	public function cekLogin() {
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		$cek=$this->M_Admin->log($username,$password); //cek pada model M_Admin method log

		if ($cek->num_rows() > 0) {
			foreach ($cek->result() as $sess) {
				$sess_data['id_admin'] = $sess->id_admin;
				$sess_data['username'] = $sess->username;
				$sess_data['nama'] = $sess->nama;
				$sess_data['status'] = $sess->status;

				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('status')=='admin_produk') { 		//akses admin produk
				redirect('Produk/Dashboard');
			} elseif ($this->session->userdata('status')=='admin_user') { 	//akses admin user
				redirect('User/Dashboard');
			} else { 														//akses admin laporan
				redirect('Laporan/Dashboard');
			}
		} else {
			echo "<script>alert('Gagal login: Cek username & password !!!');history.go(-1);</script>";
		}
	}

	function logout(){
		$this->session->session_destroy();
		// $url=base_url('');
		// redirect($url);
		redirect('auth');
	}

}