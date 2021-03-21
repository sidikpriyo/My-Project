<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user','sm');
	}

	public function index() {
		if ($this->session->userdata('email') == "" && $this->session->userdata('password') == ""){
		$this->load->view('Home/index');
		} else {
			return redirect('Home/Dashboard');
		}
	}

	// tambah akun
	public function Tambah_user() {
		$result = $this->sm->CreateAccount();
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if ($result) {
			$session_data = [
				'email' 	=> '$email',
				'password' 	=> '$password'
			];
			$this->session->set_userdata($session_data);
			return redirect('Home/Dashboard');
		} else {
			return redirect('Home/index');
		}
	}

	//dashboard user
	public function Dashboard() {
			if ($this->session->userdata('email') == "" && $this->session->userdata('password') == "") {
				return redirect('Home/index');
			} else {
				$this->load->view('Home/DashboardUser');
			}
		}

	// login user
	public function Login() {
			$susername = $this->input->post('email');
			$spassword = $this->input->post('password');
			$result = $this->sm->Login();
			if ($result) {
				$session_data = [
					'email'=>$susername,
					'password'=>$spassword
				];
				$this->session->set_userdata($session_data);
				return redirect('Home/Dashboard');
			}
			else {
				return redirect('Home/index');
			}
		}

	// logout user
		public function Logout() {
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		return redirect('Home/index');
	}

	public function mBajuMenu() {

	$this->load->view('Home/mBajuProductMenu');
	}
	
	public function mCelanaMenu() {

	$this->load->view('Home/mCelanaProductMenu');
	}

	public function mTasMenu() {

	$this->load->view('Home/mTasProductMenu');
	}

	public function mSepatuMenu() {

	$this->load->view('Home/mSepatuProductMenu');
	}

	public function mFashionMenu() {

	$this->load->view('Home/mFashionProductMenu');
	}

	
}