<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tabungan extends CI_model{
	// public function tampil_data()
	// {
	// 	return $this->db->get('buku_tabungan');
	// }
	// public function tampil_semua_data()
	// {
	// 	return $this->db->query('SELECT nota_setor.no_induk, buku_tabungan.id_tabungan, data_diri.nama, data_diri.alamat,status.nm_status , SUM(nota_setor.total_setor) as saldo, IFNULL(penarikan.total_penarikan,"0") as ambil, (SUM(nota_setor.total_setor)-IFNULL(penarikan.total_penarikan,"0")) as tabungan FROM nota_setor LEFT JOIN penarikan ON nota_setor.no_induk = penarikan.no_induk JOIN data_diri on data_diri.no_induk= nota_setor.no_induk JOIN status on status.id_status= data_diri.id_status join buku_tabungan on buku_tabungan.no_induk=nota_setor.no_induk GROUP BY nota_setor.no_induk')->result();
	// }
	// public function tarik($id_tabungan){
	// 	return $this->db->query("SELECT nota_setor.no_induk, buku_tabungan.id_tabungan, data_diri.nama, data_diri.alamat,status.nm_status , SUM(nota_setor.total_setor) as saldo, IFNULL(penarikan.total_penarikan,\"0\") as ambil, (SUM(nota_setor.total_setor)-IFNULL(penarikan.total_penarikan,\"0\")) as tabungan FROM nota_setor LEFT JOIN penarikan ON nota_setor.no_induk = penarikan.no_induk JOIN data_diri on data_diri.no_induk= nota_setor.no_induk JOIN status on status.id_status= data_diri.id_status join buku_tabungan on buku_tabungan.no_induk=nota_setor.no_induk where buku_tabungan.id_tabungan=$id_tabungan GROUP BY nota_setor.no_induk")->row();
	// }

	public function getTotal($table,$no_induk,$col){
		$count = $this->db->get_where("$table",['no_induk'=>$no_induk])->num_rows();
		if ($count==0) {
			return "0";
		}else{

			$x = $this->db->query("SELECT SUM($col) as total FROM $table Where no_induk= $no_induk GROUP BY no_induk")->row_array();
			return $x['total'];
		}
	}

	//membuat jumlah
	public function hitungJumlahTabungan()
{
   $this->db->select_sum('total_setor');
   $query = $this->db->get('nota_setor');
   if($query->num_rows()>0)
   {
     return $query->row()->total_setor;
   }
   else
   {
     return 0;
   }
}

	public function tampil_data(){
		return $this->db->query('select buku_tabungan.id_tabungan, data_diri.* ,status.nm_status, status.id_status from buku_tabungan join data_diri on buku_tabungan.no_induk=data_diri.no_induk join status on data_diri.id_status=status.id_status')->result_array();
	}
	public function tampil_satu_data($id_tabungan){
		return $this->db->query("select buku_tabungan.id_tabungan, data_diri.* ,status.nm_status from buku_tabungan join data_diri on buku_tabungan.no_induk=data_diri.no_induk join status on data_diri.id_status=status.id_status where buku_tabungan.id_tabungan=$id_tabungan")->row_array();
	}
	public function get_keyword($keyword){

		$this->db->select('buku_tabungan.id_tabungan, data_diri.*, status.nm_status');
  		$this->db->from('buku_tabungan');
  		$this->db->join('data_diri', 'data_diri.no_induk = buku_tabungan.no_induk');
  		$this->db->join('status', 'data_diri.id_status = status.id_status');
  		// $this->db->or_like('no_induk', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('alamat', $keyword);
		return $this->db->get()->result_array();
	}
	//reset data!
	public function reset_data() {
	return $this->db->query("DELETE a.*, b.* FROM nota_setor a, buku_tabungan b");	
	}
	
	public function pengurus($id){
		return $this->db->get_where('data_diri',['no_induk'=>$id])->row();
	}
	// public function nasabah() {
	// 	return $this->db->query("select data_diri.id_status from buku_tabungan join data_diri on buku_tabungan.no_induk=data_diri.id_status")->result();
	// }

	// 	return $this->db->query("select data_diri.id_status from buku_tabungan join data_diri on buku_tabungan.no_induk=data_diri.id_status where id_status = 2")->result();
	// }
	// public function pengurus($id){
	// 	return $this->db->get_where('buku_tabungan',['no_induk'=>$id])->row();
	// }

	//select data_diri.id_status from buku_tabungan join data_diri on buku_tabungan.no_induk=data_diri.id_status where id_status = 2
}

////SELECT nota_setor.no_induk, buku_tabungan.id_tabungan, data_diri.nama, data_diri.alamat,status.nm_status , SUM(nota_setor.total_setor) as saldo, IFNULL(penarikan.total_penarikan,'0') as ambil, (SUM(nota_setor.total_setor)-IFNULL(penarikan.total_penarikan,'0')) as tabungan FROM nota_setor LEFT JOIN penarikan ON nota_setor.no_induk = penarikan.no_induk JOIN data_diri on data_diri.no_induk= nota_setor.no_induk JOIN status on status.id_status= data_diri.id_status join buku_tabungan on buku_tabungan.no_induk=nota_setor.no_induk GROUP BY nota_setor.no_induk


//query riset data : mengapus isi tabel nota_setor+buku_tabungan
//DELETE a.*, b.* FROM nota_setor a, buku_tabungan b