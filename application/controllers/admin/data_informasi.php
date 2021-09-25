<?php

class Data_informasi extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') !='1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Anda Belum Login!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
			redirect('auth/login');
		}
        $this->load->model('model_informasi');
	}

	public function index()
	{	
		$data['informasi'] = $this->model_informasi->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_informasi', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_aksi()
	{	
        $config['upload_path']          = './uploads/informasi';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = 'informasi-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar'))
		{
				$error = array('error' => $this->upload->display_errors());
				redirect('admin/data_informasi', $error);
		}
		else
		{
			$data['gambar'] = $this->upload->data("file_name");
			$data['nama_dokumen'] = $this->input->post('nama_dokumen');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['persyaratan'] = $this->input->post('persyaratan');
			$data['prosedur'] = $this->input->post('prosedur');
			
			$this->db->insert('tb_informasi',$data);
			redirect('admin/data_informasi');
		}
	}

	public function edit($id)
	{
		$where = array('id_informasi' => $id);
		$data['informasi'] = $this->model_informasi->edit_data($where,'tb_informasi')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/edit_informasi', $data);
		$this->load->view('template_admin/footer');
	}

	public function update($id){
		$config['upload_path']          = './uploads/informasi';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = 'informasi-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		
		if (!empty($_FILES['gambar']['name'])) {
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		//replace foto lama 
		$item = $this->db->where('id_informasi', $id)->get('tb_informasi')->row();

        if ($item->gambar != "placeholder.png") {
                $target_file = './uploads/informasi/' . $item->gambar;
                unlink($target_file);
        }
		
		
		
		$data['gambar'] = $this->upload->data("file_name");
		$data['nama_dokumen'] = $this->input->post('nama_dokumen');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['persyaratan'] = $this->input->post('persyaratan');
		$data['prosedur'] = $this->input->post('prosedur');
			
		
		$this->model_informasi->update_data($id,$data,'tb_informasi');
		$url = $_SERVER['HTTP_REFERER'];
        redirect($url);
		} else {
		$data['nama_dokumen'] = $this->input->post('nama_dokumen');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['persyaratan'] = $this->input->post('persyaratan');
		$data['prosedur'] = $this->input->post('prosedur');
			
		$this->model_informasi->update_data($id,$data,'tb_informasi');
		$url = $_SERVER['HTTP_REFERER'];
        redirect($url);
		}
	}
}