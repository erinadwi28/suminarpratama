<?php

class Model_layanan extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tb_layanan');
	}

	public function tambah_layanan($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_layanan($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}