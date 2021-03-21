<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function CreateAccount() {
		$nama_user = $this->input->post('nama_user');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jk = $this->input->post('jk');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$password = $this->input->post('password');

		$insert_user = $this->db->insert('m_user', [
			'nama_user' => $nama_user,
			'tgl_lahir' => $tgl_lahir,
			'jk' => $jk,
			'email' => $email,
			'no_telp' => $no_telp,
			'alamat' => $alamat,
			'password' => $password
		]);

		if ($insert_user) {
			return true;
		} else {
			return false;
		}
	}

	public function Login() {
		$susername 	= $this->input->post('email');
		$spassword 	= $this->input->post('password');
		$check_user = $this->db->get_where('m_user',
		[
		'email'=>$susername,
		'password'=>$spassword
		]);
		if ($check_user->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	// next function

}
?>