<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nota_setor extends CI_model{
	public function tampil_data()
	{
		$this->db->select('nota_setor.*, data_diri.nama, data_diri.alamat, data_diri.no_induk, data_diri.id_status' );
  		$this->db->from('nota_setor');
  		$this->db->join('data_diri', 'data_diri.no_induk = nota_setor.no_induk');
  		$this->db->order_by("tanggal_nota", "desc");
  		$query = $this->db->get();
		return $query->result();
	}

		public function find_nota($tanggal)
	{
		$this->db->select('nota_setor.*, data_diri.nama, data_diri.alamat, data_diri.no_induk');
  		$this->db->from('nota_setor');
  		$this->db->join('data_diri', 'data_diri.no_induk = nota_setor.no_induk');
  		$this->db->where(['nota_setor.tanggal_nota'=>$tanggal]);
  		$query = $this->db->get();
		return $query->result();

	}

	public function tampil_data_diri()
	{
		$this->db->select('nota_setor.*, data_diri.no_induk, data_diri.nama');
  		$this->db->from('nota_setor');
  		$this->db->join('data_diri', 'data_diri.no_induk = nota_setor.no_induk');
  		$query = $this->db->get();
		return $query->result();

	}

	public function getSampah(){
		// return $this->db->get('sampah')->result();
		$this->db->select('*');
  		$this->db->from('sampah');
  		$this->db->order_by("nm_sampah", "asc");
  		$query = $this->db->get();
		return $query->result();

	}
	public function data_diri(){
		$this->db->select('nama, no_induk, alamat');
		$this->db->from('data_diri');
		$this->db->order_by("nama", "asc");
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_nama($id){
		return	$this->db->get_where('data_diri',['no_induk'=>$id])->row_array();
	}
	public function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	public function pengurus($id){
		return $this->db->get_where('data_diri',['no_induk'=>$id])->row();
	}
	public function get_keyword($keyword){
		$this->db->select('nota_setor.*, data_diri.no_induk, data_diri.nama, data_diri.alamat');
  		$this->db->from('nota_setor');
  		$this->db->join('data_diri', 'data_diri.no_induk = nota_setor.no_induk');
  		// $this->db->or_like('id_nota', $keyword);
  		$this->db->or_like('tanggal_nota', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('alamat', $keyword);
		return $this->db->get()->result();
	}
	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function edit_data($id_nota){
		return $this->db->query("select data_diri.*, nota_setor.* from nota_setor join data_diri on nota_setor.no_induk = data_diri.no_induk where nota_setor.id_nota=$id_nota");
	}
	public function update($array_nota,$id_nota){
		$this->db->update('nota_setor',$array_nota,['id_nota'=>$id_nota]);
	}

	public function tambah_tabungan($no_induk){
	$cari	= $this->db->get_where('buku_tabungan',['no_induk'=>$no_induk])->num_rows();
	if ($cari==0) {
		$this->db->insert('buku_tabungan',['no_induk'=>$no_induk]);
	}
	}
}

//total setor
// SELECT no_induk, SUM(total_setor) as total FROM nota_setor GROUP BY no_induk;

// tabungan
// SELECT nota_setor.no_induk, SUM(nota_setor.total_setor) as saldo, SUM(penarikan.total_penarikan) as ambil, (SUM(nota_setor.total_setor)-SUM(penarikan.total_penarikan)) as tabungan FROM nota_setor LEFT JOIN penarikan ON nota_setor.no_induk = penarikan.no_induk GROUP BY no_induk

//SELECT nota_setor.no_induk, SUM(nota_setor.total_setor) as saldo, IFNULL(penarikan.total_penarikan,'0') as ambil, (SUM(nota_setor.total_setor)-IFNULL(penarikan.total_penarikan,'0')) as tabungan FROM nota_setor LEFT JOIN penarikan ON nota_setor.no_induk = penarikan.no_induk GROUP BY no_induk