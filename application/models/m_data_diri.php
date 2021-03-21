<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_diri extends CI_model{
	public function tampil_data()
	{
		$this->db->select('data_diri.*, status.nm_status');
  		$this->db->from('data_diri');
  		$this->db->join('status', 'status.id_status = data_diri.id_status');
  		$this->db->order_by("nama", "asc");
  		$query = $this->db->get();
		return $query->result();
	}
	public function input_data($data, $table){
		$this->db->insert($table, $data);
	}
	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit_data($where, $table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function detail_data($no_induk = NULL){
		$query = $this->db->get_where('data_diri',array('no_induk' => $no_induk))->row();
		return $query;
	}
	public function get_keyword($keyword){
		$this->db->select('data_diri.*, status.nm_status');
  		$this->db->from('data_diri');
  		$this->db->join('status', 'status.id_status = data_diri.id_status');
  		$this->db->or_like('no_induk', $keyword);
  		$this->db->or_like('nm_status', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('alamat', $keyword);
		return $this->db->get()->result();
	}
}

