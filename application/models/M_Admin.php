<?php
defined('BASEPATH') OR exit ('No script access allowed');

class M_Admin extends CI_Model
{
	//cek login
	public function log($username, $password){
		$query=$this->db->query("SELECT * FROM m_admin WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}

}