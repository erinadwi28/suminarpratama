<?php

class Data_layanan extends CI_Controller{

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
		$data['layanan'] = $this->model_layanan->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_layanan', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_aksi2()
	{	
		$judul_layanan	= $this->input->post('judul_layanan');
		$gambar_layanan	= $_FILES['gambar_layanan']['name'];
		if ($gambar		=''){}else{
			$config ['upload_path'] = './uploads/berita';
			$config ['allowed_type'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar_layanan')){
				echo "Gambar Gagal Diupload";
			}else {
				$gambar_layanan=$this->upload->data('file_name');
			}
		}

		$data = array(
			'judul_layanan'			=> $judul_layanan,
			'gambar_layanan'		=> $gambar_layanan
		);

		$this->model_layanan->tambah_layanan($data, 'tb_layanan');
		redirect('admin/data_layanan/index');
		
	}

	public function edit($id)
	{
		$where = array('id_layanan' => $id);
		$data['layanan'] = $this->model_layanan->edit_layanan($where,'tb_layanan')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/edit_layanan', $data);
		$this->load->view('template_admin/footer');
	}

	public function update(){
		$id 				= $this->input->post('id_layanan');
		$judul_layanan	 	= $this->input->post('judul_layanan');
		$gambar_layanan 	= $this->input->post('gambar_layanan');

		$data = array(

			'judul_layanan' 	=> $judul_layanan,
			'gambar_layanan' 		=> $gambar_layanan,
		);

		$where = array(
			'id_layanan' => $id
		);

		$this->model_layanan->update_data($where,$data,'tb_layanan');
		redirect('admin/data_layanan/index');
	}

	public function hapus ($id)
	{
		$where = array('id_layanan' => $id);
		$this->model_layanan->hapus_data($where, 'tb_layanan');
		redirect('admin/data_layanan/index');
	}
}