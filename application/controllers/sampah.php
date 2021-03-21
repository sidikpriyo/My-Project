<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampah extends CI_Controller {
	public function index()
	{
		$data['sampah'] = $this->m_sampah->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_sampah/sampah', $data);
		$this->load->view('templates/footer');
	}
	public function tambah(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sampah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi(){
		$id_sampah 	= $this->input->post('id_sampah');
		$nm_sampah 	= $this->input->post('nm_sampah');
		$hrg_nasabah	= $this->input->post('hrg_nasabah');
		$hrg_pengurus = $this->input->post('hrg_pengurus');

		$foto 		= $_FILES['foto'];
			
			if ($foto=''){}else{
				$config['upload_path'] 		= './assets/foto_sampah';
				$config['allowed_types'] 	= 'jpg|png|gif';

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('foto')){
					echo "Upload GAGAL"; //die();
				}else{
					$foto=$this->upload->data('file_name');
				}
			}

		$data = array(
			'id_sampah'		=> $id_sampah,
			'nm_sampah'		=> $nm_sampah,
			'hrg_nasabah'	=> $hrg_nasabah,
			'hrg_pengurus'	=> $hrg_pengurus,
			'foto'			=> $foto
		);

		$this->m_sampah->input_data($data, 'sampah');
		
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil Ditambahkan!
			</div>');

		redirect('sampah');
	}
	public function hapus ($id_sampah)
	{
		$where = array('id_sampah'=>$id_sampah);
		$this->m_sampah->hapus_data($where, 'sampah');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil di Hapus!
			</div>');
		redirect('sampah');	
	}
	public function edit ($id_sampah)
	{
		$where = array('id_sampah'=>$id_sampah);
		$data['sampah'] = $this->m_sampah->edit_data($where, 'sampah')->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_sampah/edit', $data);
		$this->load->view('templates/footer');

	}
	public function update(){
		$id_sampah = $this->input->post('id_sampah');
		$nm_sampah = $this->input->post('nm_sampah');
		$hrg_pengurus = $this->input->post('hrg_pengurus');
		$hrg_nasabah = $this->input->post('hrg_nasabah');

			$data = array(
			'id_sampah'	=> $id_sampah,
			'nm_sampah'	=> $nm_sampah,
			'hrg_pengurus'=> $hrg_pengurus,
			'hrg_nasabah'=> $hrg_nasabah,

		);
			$where = array(
			'id_sampah' => $id_sampah
			);

		$this->m_sampah->update_data($where,$data,'sampah');
		
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Success, Data Berhasil di Edit!
			</div>');

		redirect('sampah');
	}

	public function detail ($id_sampah)
	{
		$this->load->model('m_sampah');
		$detail = $this->m_sampah->detail_data($id_sampah);
		$data['detail'] = $detail;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_sampah/detail', $data);
		$this->load->view('templates/footer');	
	}

	public function print_data() 
	{
		$data['sampah'] = $this->m_sampah->tampil_data("sampah")->result();
		$this->load->view('print_sampah', $data);
	}

	public function pdf(){
		$this->load->library('dompdf_gen');
		$data['sampah'] = $this->m_sampah->tampil_data('sampah')->result();
		$this->load->view('v_sampah/laporan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);

		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream("laporan_sampah.pdf", array('Attachment' =>0));
	}

		public function search(){
			$keyword = $this->input->post('keyword');
			$data['sampah']=$this->m_sampah->get_keyword($keyword);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('v_sampah/sampah', $data);
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