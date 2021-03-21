<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_diri extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('m_data_diri');
    }
	public function index()
	{
		$data['data_diri'] = $this->m_data_diri->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_data_diri/data_diri', $data);
		$this->load->view('templates/footer');
	}
	public function tambah(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_diri');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi(){
		$no_induk 	= $this->input->post('no_induk');
		$id_status 	= $this->input->post('id_status');
		$nama 		= $this->input->post('nama');
		$alamat 	= $this->input->post('alamat');
		$no_hp 		= $this->input->post('no_hp');
		$foto 		= $_FILES['foto'];
			
			if ($foto=''){}else{
				$config['upload_path'] 		= './assets/foto';
				$config['allowed_types'] 	= 'jpg|png|gif';

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('foto')){
					echo "Upload GAGAL"; //die();
				}else{
					$foto=$this->upload->data('file_name');
				}
			}

		$data = array(
			'no_induk'	=> $no_induk,
			'id_status'	=> $id_status,
			'nama'		=> $nama,
			'alamat'	=> $alamat,
			'no_hp'		=> $no_hp,
			'foto'		=> $foto
		);

		$this->m_data_diri->input_data($data, 'data_diri');
		
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil Ditambahkan!
			</div>');

		redirect('data_diri');
	}
	public function hapus ($no_induk)
	{
		$where = array('no_induk'=>$no_induk);
		$this->m_data_diri->hapus_data($where, 'data_diri');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil di Hapus!
			</div>');
		redirect('data_diri');	
	}
	public function edit ($no_induk)
	{
		$where = array('no_induk'=>$no_induk);
		$data['data_diri'] = $this->m_data_diri->edit_data($where, 'data_diri')->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_data_diri/edit', $data);
		$this->load->view('templates/footer');

	}
	public function update(){
		$no_induk = $this->input->post('no_induk');
		$id_status = $this->input->post('id_status');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');

			$data = array(
			'no_induk'	=> $no_induk,
			'id_status'	=> $id_status,
			'nama'		=> $nama,
			'alamat'	=> $alamat,
			'no_hp'		=> $no_hp,
		);
			$where = array(
			'no_induk' => $no_induk
			);

		$this->m_data_diri->update_data($where,$data,'data_diri');
		
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil di Edit!
			</div>');

		redirect('data_diri');
	}

	public function detail ($no_induk)
	{
		
		$this->load->model('m_data_diri');
		$detail = $this->m_data_diri->detail_data($no_induk);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_data_diri/detail', $data);
		$this->load->view('templates/footer');	
	}
	public function pdf(){
		$this->load->library('dompdf_gen');
		$data['data_diri'] = $this->m_data_diri->tampil_data('data_diri');
		$this->load->view('v_data_diri/laporan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		// $this->dompdf_gen->set_paper($paper_size, $orientation);

		// $this->dompdf_gen->load_html($html);
		// $this->dompdf_gen->render();
		// $this->dompdf_gen->stream("laporan_data_diri.pdf", array('Attachment' =>0));
	}

		public function search(){
			$keyword = $this->input->post('keyword');
			$data['data_diri']=$this->m_data_diri->get_keyword($keyword);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('v_data_diri/data_diri', $data);
			$this->load->view('templates/footer');
		}

}
	// public function excel(){
	// 	$data['data_diri'] = $this->m_data_diri->tampil_data('data_diri')->result();

	// 	require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
	// 	require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

	// 	$objek = new PHPExcel();
	// 	$objek->getProperties()->setCreator("Universitas Muhammadiyah Magelang");
	// 	$objek->getProperties()->setLastModifiedBy("Universitas Muhammadiyah Magelang");
	// 	$objek->getProperties()->setTitle("Data Diri");

	// 	$objek->setActiveSheetIndex(0);

	// 	$objek->getActiveSheet()->setCellValue('A1', 'No');
	// 	$objek->getActiveSheet()->setCellValue('B1', 'No Induk');
	// 	$objek->getActiveSheet()->setCellValue('C1', 'Id Status');
	// 	$objek->getActiveSheet()->setCellValue('D1', 'Nama');
	// 	$objek->getActiveSheet()->setCellValue('E1', 'Alamat');
	// 	$objek->getActiveSheet()->setCellValue('F1', 'No Hp');

	// 	$baris = 2;
	// 	$no = 1;

	// 	foreach ($data['data_diri'] as $dt) {
	// 		$objek->getActiveSheet()->setCellValue('A'.$baris, $no++);
	// 		$objek->getActiveSheet()->setCellValue('B'.$baris, $dt->no_induk);
	// 		$objek->getActiveSheet()->setCellValue('C'.$baris, $dt->id_status);
	// 		$objek->getActiveSheet()->setCellValue('D'.$baris, $dt->nama);
	// 		$objek->getActiveSheet()->setCellValue('E'.$baris, $dt->alamat);
	// 		$objek->getActiveSheet()->setCellValue('F'.$baris, $dt->no_hp);

	// 		$baris++;
	// 	}

	// 	$filename="data_diri".'.xlsx';

	// 	$objek->getActiveSheet()->setTitle("DATA DIRI");

	// 	header('Content-Type : application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	// 	header('Content-Disposition: attachment;filename="'.$filename. '"');
	// 	header('Cache-Control: max-age=0');

	// 	$writer=PHPExcel_IOFactory::createwriter($objek, 'Excel2007');
	// 	$writer->save('php://output');

	// 	exit;

	// }