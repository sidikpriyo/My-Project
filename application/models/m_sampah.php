<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sampah extends CI_model{
	public function tampil_data()
	{
		$this->db->order_by("nm_sampah", "asc");
		return $this->db->get('sampah');
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
	public function detail_data($id_sampah = NULL){
		$query = $this->db->get_where('sampah',array('id_sampah' => $id_sampah))->row();
		return $query;
	}
	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('sampah');
		$this->db->or_like('id_sampah', $keyword);
		$this->db->or_like('nm_sampah', $keyword);
		return $this->db->get()->result();
	}
}

