<?php 

class model_informasi extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_informasi');
	}

	public function tampil_data_detail($id){
		$this->db->select('*');
        $this->db->from('tb_informasi');
        $this->db->where('id_informasi', $id);
		$query = $this->db->get();
        return $query->result();
	}

	public function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($id,$data,$table)
	{
		$this->db->where('id_informasi',$id);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}