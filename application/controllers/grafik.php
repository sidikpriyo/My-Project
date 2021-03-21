<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_grafik');
	}
 
	public function index()
	{
		$data['graph'] = $this->m_grafik->graph();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_grafik/grafik', $data);
		$this->load->view('templates/footer');

	}
}
?>