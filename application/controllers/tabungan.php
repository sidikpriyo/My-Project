<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabungan extends CI_Controller {

	function __construct()
	{
		parent::__construct();    
		$this->load->model('m_tabungan');
 
	}
	public function index()
	{
		$x= $this->m_tabungan->tampil_data();
		$data['total_inventori'] = $this->m_tabungan->hitungJumlahTabungan();
		$data['tabungan'] =[];
		for ($i=0; $i <count($x) ; $i++) {
		$total_tabungan = $this->m_tabungan->getTotal('nota_setor',$x[$i]['no_induk'],'total_setor');
		$total_penarikan = $this->m_tabungan->getTotal('penarikan',$x[$i]['no_induk'],'total_penarikan');
		$status = $this->m_tabungan->tampil_data();		
		$pendapatan_kotor = $total_tabungan;
		$pajak=0;
		$pendapatan_bersih = $pendapatan_kotor;

		// logika pajak

		if ($x[$i]['nm_status']=='Nasabah') {
			$pajak = $total_tabungan*0.15;
		} else{
			$pajak = 0;
		}

		$saldo =($total_tabungan-$total_tabungan*0.15)-$total_penarikan;
		$data['tabungan'][$i] =[
			'id_tabungan'=>$x[$i]['id_tabungan'],
			'no_induk'=>$x[$i]['no_induk'],
			'id_status'=>$x[$i]['id_status'],
			'nama'=>$x[$i]['nama'],
			'alamat'=>$x[$i]['alamat'],
			'nm_status'=>$x[$i]['nm_status'],
			'saldo'=> $saldo,
			'pendapatan_kotor'=> $pendapatan_kotor,
			'pajak' => $pajak,
			'pendapatan_bersih'=>$pendapatan_bersih-$pajak
		];
		}

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_tabungan/tabungan', $data);
		$this->load->view('templates/footer');
	}

	public function tarik($id_tabungan)
	{
		$this->load->library('form_validation');
		$data['buku_tabungan'] = $this->m_tabungan->tampil_satu_data($id_tabungan);
		//saldo awal
		$total_tabungan = $this->m_tabungan->getTotal('nota_setor',$data['buku_tabungan']['no_induk'],'total_setor');
		//total tarik
		$total_penarikan = $this->m_tabungan->getTotal('penarikan',$data['buku_tabungan']['no_induk'],'total_penarikan');

		//saldo=saldo akhir
		$saldo = ($total_tabungan-$total_tabungan*0.15) - $total_penarikan ;
		$data['buku_tabungan'] +=[
			'saldo'=>$saldo];

		$this->form_validation->set_rules('tarik', 'Tarik', "required|less_than_equal_to[$saldo]",array(
                        'less_than_equal_to' => '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  GAGAL! Jumlah Tarik Tidak Boleh Melebihi Saldo!
			</div>'));
    

     		if ($this->form_validation->run() == FALSE)
                {
                       $this->load->view('templates/header');
						$this->load->view('templates/sidebar');
						$this->load->view('v_tabungan/tarik', $data);
						$this->load->view('templates/footer');
                }
                else
                {
                		$no_induk = $this->input->post('no_induk');
                		$tarik = $this->input->post('tarik');
						$x =$this->db->insert('penarikan',['no_induk'=>$no_induk,'total_penarikan'=>$tarik]);
						if ($x) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Berhasil Tarik Tabungan!
			</div>');
							redirect ('tabungan/pdf/'.$id_tabungan.'/'.$tarik);
						}
				}
	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$x= $this->m_tabungan->get_keyword($keyword);
		//$x= $this->m_tabungan->tampil_data();
		$data['total_inventori'] = $this->m_tabungan->hitungJumlahTabungan();
		$data['tabungan'] =[];
		for ($i=0; $i <count($x) ; $i++) {
		$total_tabungan = $this->m_tabungan->getTotal('nota_setor',$x[$i]['no_induk'],'total_setor');
		$total_penarikan = $this->m_tabungan->getTotal('penarikan',$x[$i]['no_induk'],'total_penarikan');
		$status = $this->m_tabungan->tampil_data();		
		$pendapatan_kotor = $total_tabungan;
		$pajak=0;
		$pendapatan_bersih = $pendapatan_kotor;

		// logika pajak

		if ($x[$i]['nm_status']=='Nasabah') {
			$pajak = $total_tabungan*0.15;
		} else{
			$pajak = 0;
		}

		$saldo =($total_tabungan-$total_tabungan*0.15)-$total_penarikan;
		$data['tabungan'][$i] =[
			'id_tabungan'=>$x[$i]['id_tabungan'],
			'no_induk'=>$x[$i]['no_induk'],
			'id_status'=>$x[$i]['id_status'],
			'nama'=>$x[$i]['nama'],
			'alamat'=>$x[$i]['alamat'],
			'nm_status'=>$x[$i]['nm_status'],
			'saldo'=> $saldo,
			'pendapatan_kotor'=> $pendapatan_kotor,
			'pajak' => $pajak,
			'pendapatan_bersih'=>$pendapatan_bersih-$pajak
		];
		}

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_tabungan/tabungan', $data);
		$this->load->view('templates/footer');
		}

	public function pdf($id_tabungan,$tarik){

		$this->load->library('dompdf_gen');
		$data['buku_tabungan'] = $this->m_tabungan->tampil_satu_data($id_tabungan);

		//for ($i=0; $i <count($data['buku_tabungan'] ) ; $i++) { 
			$total_tabungan = $this->m_tabungan->getTotal('nota_setor',$data['buku_tabungan'] ['no_induk'],'total_setor');
			$total_penarikan = $this->m_tabungan->getTotal('penarikan',$data['buku_tabungan'] ['no_induk'],'total_penarikan');
			$saldo_akhir =($total_tabungan-$total_tabungan*0.15)-$total_penarikan ;
			$data['tabungan'] =[
				'id_tabungan'=>$data['buku_tabungan'] ['id_tabungan'],
				'no_induk'=>$data['buku_tabungan'] ['no_induk'],
				'nama'=>$data['buku_tabungan'] ['nama'],
				'alamat'=>$data['buku_tabungan'] ['alamat'],
				'nm_status'=>$data['buku_tabungan'] ['nm_status'],
				'pendapatan_kotor'=>$total_tabungan,
				'pajak'=>$total_tabungan*0.15,
				'saldo'=> $saldo_akhir,
				'total_tabungan'=>$saldo_akhir+$tarik,
				'total_penarikan'=>$tarik
			];
			//}
		$this->load->view('v_tabungan/laporan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_data_diri.pdf", array('Attachment' =>0));
	}

	//membuat print data tabungan
	public function print_tabungan() {
		$data['total_inventori'] = $this->m_tabungan->hitungJumlahTabungan();
		$this->load->library('dompdf_gen');
		// $data['buku_tabungan'] = $this->m_tabungan->tampil_data();
		$x= $this->m_tabungan->tampil_data();
		$data['tabungan'] =[];
		
		for ($i=0; $i <count($x) ; $i++) {
		$total_tabungan = $this->m_tabungan->getTotal('nota_setor',$x[$i]['no_induk'],'total_setor');
		$total_penarikan = $this->m_tabungan->getTotal('penarikan',$x[$i]['no_induk'],'total_penarikan');
		$status = $this->m_tabungan->tampil_data();		
		$pendapatan_kotor = $total_tabungan;
		$pajak=0;
		$pendapatan_bersih = $pendapatan_kotor;

		// logika pajak

		if ($x[$i]['nm_status']=='Nasabah') {
			$pajak = $total_tabungan*0.15;
		} else{
			$pajak = 0;
		}

		$saldo =($total_tabungan-$total_tabungan*0.15)-$total_penarikan;
		$data['tabungan'][$i] =[
			'id_tabungan'=>$x[$i]['id_tabungan'],
			'no_induk'=>$x[$i]['no_induk'],
			'id_status'=>$x[$i]['id_status'],
			'nama'=>$x[$i]['nama'],
			'alamat'=>$x[$i]['alamat'],
			'nm_status'=>$x[$i]['nm_status'],
			'saldo'=> $saldo,
			'pendapatan_kotor'=> $pendapatan_kotor,
			'pajak' => $pajak,
			'pendapatan_bersih'=>$pendapatan_bersih-$pajak
		];
		}

		$this->load->view('v_tabungan/print_tabungan', $data);

		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);

		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream("print_tabungan.pdf", array('Attachment' =>0));
	}
	
	//reset data
	public function reset()
	{
		//$data['graph'] = $this->m_tabungan->graph();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_tabungan/reset_data');
		$this->load->view('templates/footer');

	}

	public function reset_data()
	{
		$this->m_tabungan->reset_data();
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, SELURUH DATA Berhasil di Hapus!
			</div>');
		redirect('tabungan');
	}

	public function hapus ()
	{
		//form validasi
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil di Hapus!
			</div>');
		redirect('tabungan');	
	}


}