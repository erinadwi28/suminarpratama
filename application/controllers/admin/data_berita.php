<?php

class Data_berita extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') !='1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Anda Belum Login!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{	
		$data['berita'] = $this->model_berita->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_berita', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_aksi()
	{	
		$keterangan		= $this->input->post('keterangan');
		$link			= $this->input->post('link');
		$gambar_berita			= $_FILES['gambar_berita']['name'];
		if ($gambar	=''){}else{
			$config ['upload_path'] = './uploads/';
			$config ['allowed_type'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar_berita')){
				echo "Gambar Gagal Diupload";
			}else {
				$gambar_berita=$this->upload->data('file_name');
			}
		}


		

		$data = array(
			'keterangan'	=> $keterangan,
			'link'			=> $link,
			'gambar_berita'		=> $gambar_berita
		);

		$this->model_berita->tambah_berita($data, 'tb_berita');
		redirect('admin/data_berita/index');
		
	}

	public function edit($id)
	{
		$where = array('id_berita' => $id);
		$data['berita'] = $this->model_berita->edit_berita($where,'tb_berita')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/edit_berita', $data);
		$this->load->view('template_admin/footer');
	}

	public function update(){
		$id 		= $this->input->post('id_berita');
		$keterangan = $this->input->post('keterangan');
		$gambar_berita 	= $this->input->post('gambar_berita');
		$link 		= $this->input->post('link');

		$data = array(

			'keterangan' 	=> $keterangan,
			'gambar_berita' 		=> $gambar_berita,
			'link' 	=> $link
		);

		$where = array(
			'id_berita' => $id
		);

		$this->model_berita->update_data($where,$data,'tb_berita');
		redirect('admin/data_berita/index');
	}

	public function hapus ($id)
	{
		$where = array('id_berita' => $id);
		$this->model_berita->hapus_data($where, 'tb_berita');
		redirect('admin/data_berita/index');
	}

}