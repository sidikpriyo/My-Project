<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Seller/SellerModel','sm');
	}

	public function index() {
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == ""){
		$this->load->view('Seller/index');
		} else {
			return redirect('Seller/Dashboard');
		}
	}

		public function CreateAccount() {
			$result = $this->sm->CreateAccount();
			$seller_email = $this->input->post('email');
			$seller_password = $this->input->post('password');
			// $this->load->view('Seller/mymail','',true);
			if ($result) { /*
				$this->load->library('email');
				$config['charset'] = 'utf-8';	
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				$this->email->to($seller_email); 
				$this->email->from('gsidik52@gmail.com');
				$this->email->subject('Create Seller Account on Online Shop');
				$this->email->message($msg);
				if ($this->email->send()) {
					$this->load->view('Seller/Dashboard');
				}
				else{
					return redirect('Seller/index');
				}*/
				$session_data = [
					'seller_username' => '$seller_email',
					'seller_password' => '$seller_password'
				];
				$this->session->set_userdata($session_data);
				return redirect('Seller/Dashboard');
			} else {
				return redirect('Seller/index');
			}
		}


// 	public function CreateAccount() {
// 	$config = Array(  
//     'protocol' => 'smtp',  
//     'smtp_host' => 'ssl://smtp.googlemail.com',  
//     'smtp_port' => 587,  
//     'smtp_user' => 'gsidik52@gmail.com',   
//     'smtp_pass' => 'AA4098YA',   
//     'mailtype' => 'html',   
//     'charset' => 'UTF-8'  
//    );  
//    $this->load->library('email', $config);  
//    $this->email->set_newline("\r\n");  
//    $this->email->from('gsidik52@gmail.com', 'Admin Re:Code');   
//    $this->email->to('mmuslimah892@gmail.com');   
//    $this->email->subject('Percobaan email');   
//    $this->email->message('Ini adalah email percobaan untuk Tutorial CodeIgniter: Mengirim Email via Gmail SMTP menggunakan Email Library CodeIgniter @ recodeku.blogspot.com');  
//    if (!$this->email->send()) {  
//     show_error($this->email->print_debugger());   
//    }else{  
//     echo 'Success to send email';   
//    }
// }

		public function Dashboard() {
			if ($this->session->userdata('seller_email') == "" && $this->session->userdata('seller_password') == "") {
				return redirect('Seller/index');
			} else {
				$this->load->view('Seller/Dashboard');
			}
		}

		public function Login() {
			$susername = $this->input->post('seller_username');
			$spassword = $this->input->post('seller_password');
			$result = $this->sm->Login();
			if ($result) {
				$session_data = [
					'seller_username'=>$susername,
					'seller_password'=>$spassword
				];
				$this->session->set_userdata($session_data);
				return redirect('Seller/Dashboard');
			}
			else {
				return redirect('Seller/index');
			}
		}

		public function Logout() {
		$this->session->unset_userdata('seller_username');
		$this->session->unset_userdata('seller_password');
		return redirect('Seller/index');
	}

	public function CreateListing() {
	if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
		return redirect('Seller/index');
	} else {
		$result = $this->sm->CheckContact();
		if ($result) {
			$this->load->view('Seller/SellerContact');
		}
		else {
				$this->load->view('Seller/CreateListing');
			}
		}
	}


	public function InsertSellerContact() {
	if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
		return redirect('Seller/index');
	}
	else {
			$result = $this->sm->InsertSellerContact();
			if ($result) {
				return redirect('Seller/Dashboard');
			}
			else {
				$this->load->view('Seller/SellerContact');
			}
		}
	}

	public function PerempuanBajuUpload() {
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			return redirect('Seller/index');
		}
		else {
			$this->load->view('Seller/Listing/PerempuanBaju');
		}
	}

}    
?>