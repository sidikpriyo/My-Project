<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_grafik extends CI_model{
	// public function __construct()
	// {
	// 	$this->load->database();
	// }
 
	public function graph()
	{
		$this->db->order_by("nm_sampah", "asc");
		$data = $this->db->get('sampah');
		return $data->result();

		// $data = $this->db->query("SELECT * from sampah");
		// return $data->result();
	}
}

?>