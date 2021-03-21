<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nota_setor extends CI_Controller {

	function __construct()
	{
		parent::__construct();    
		$this->load->model('m_nota_setor');
	}

	public function index()
	{
		$data['nota_setor'] = $this->m_nota_setor->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_nota_setor/nota_setor', $data);
		$this->load->view('templates/footer');
	}

	public function find_nota()
	{
		$tanggal = $this->input->post('tanggal_nota').strftime('Y-m-d');
		$data['nota_setor'] = $this->m_nota_setor->find_nota($tanggal);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_nota_setor/nota_setor', $data);
		$this->load->view('templates/footer');
	}	

	public function carinota(){
		// echo json_encode(['tanggal'=>'hai']);
		$tanggal = $this->input->post('tanggal').strftime('Y-m-d');
		echo json_encode($this->m_nota_setor->find_nota($tanggal));
	}
	public function tambah_nota_setor(){
		// load lookup data_diri
		$data['dd_bidang'] = $this->m_nota_setor->data_diri();
		$data['sampah']=$this->m_nota_setor->getSampah();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_nota_setor/tambah_nota_setor', $data);
		$this->load->view('templates/footer');
	}
	
	public function find_note(){
		$nama = $this->input->post('nama');
		echo json_encode($this->m_nota_setor->cari_nama($nama));
	}

	public function update(){
		$id_nota = $this->input->post("id_nota");
		$no_induk = $this->input->post('no_induk');
		$sampah =$this->m_nota_setor->getSampah();
		$total_setor = 0;
		foreach ($sampah as $key => $value) {
		$nama = str_replace("", "", $value->nm_sampah);
		$x=	$this->input->post("$nama");

		$datadiri = $this->m_nota_setor->pengurus($no_induk);

		// if ($datadiri->id_status==1) {
		// $total_setor += $x * $value->hrg_pengurus;	
		// } else {
		//  $total_setor += $x * $value->hrg_nasabah;
		// }
		// }

		if ($datadiri->id_status==1) {
		$total_setor += ((int)$x * (int)$value->hrg_pengurus);	
		} else {
		 $total_setor += ((int)$x * (int)$value->hrg_pengurus);
		}
		}

		$array_nota = ['total_setor'=>$total_setor
					];
		$this->m_nota_setor->update($array_nota, $id_nota);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil Di Edit!
			</div>');
		redirect('nota_setor');
	}
	public function tambah_data(){
		$tanggal_nota 	= $this->input->post('tanggal_nota');
		$no_induk = $this->input->post('no_induk');
		$sampah =$this->m_nota_setor->getSampah();
		$total_setor = 0;
		foreach ($sampah as $key => $value) {
		$nama = str_replace("", "", $value->nm_sampah);
		$x=	$this->input->post("$nama");

		$datadiri = $this->m_nota_setor->pengurus($no_induk);

		// if ($datadiri->id_status==1) {
		// $total_setor += $x * $value->hrg_pengurus;	
		// } else {
		//  $total_setor += $x * $value->hrg_nasabah;
		// }
		// }

		if ($datadiri->id_status==1) {
		$total_setor += ((int)$x * (int)$value->hrg_pengurus);	
		} else {
		 $total_setor += ((int)$x * (int)$value->hrg_pengurus);
		}
		}

		

		$array_nota = ['tanggal_nota'=>$tanggal_nota,
						'total_setor'=>$total_setor,
						'no_induk'=>$no_induk
					];
		$this->m_nota_setor->input_data($array_nota, 'nota_setor');
		$this->m_nota_setor->tambah_tabungan($no_induk);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil Ditambahkan!
			</div>');

		redirect('nota_setor');
		}
		
		public function search(){
			$keyword = $this->input->post('keyword');
			$data['nota_setor']=$this->m_nota_setor->get_keyword($keyword);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('v_nota_setor/nota_setor', $data);
			$this->load->view('templates/footer');
		}

		public function hapus ($id_nota){
		$where = array('id_nota'=>$id_nota);
		$this->m_nota_setor->hapus_data($where, 'nota_setor');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil di Hapus!
			</div>');
		redirect('nota_setor');
	}
	public function edit($id_nota)
	{
		//$where = array('id_nota'=>$id_nota);
		$data['nota_setor'] = $this->m_nota_setor->edit_data($id_nota)->row();
		$data['sampah']=$this->m_nota_setor->getSampah();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_nota_setor/edit', $data);
		$this->load->view('templates/footer');
	}


	
}
