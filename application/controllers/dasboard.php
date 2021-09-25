<?php

class Dasboard extends CI_Controller{
	
	public function index()
	{	
		$this->load->model('model_informasi');
		$data['berita'] = $this->model_berita->tampil_data()->result();
		$data['informasi'] = $this->model_informasi->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $data);
		$this->load->view('dasboard', $data);
		$this->load->view('template/footer');
	}

	public function detail_informasi($id)
	{	
		$this->load->model('model_informasi');
		$data['informasi'] = $this->model_informasi->tampil_data()->result();
		$detail['detail_informasi'] = $this->model_informasi->tampil_data_detail($id);
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $data);
		$this->load->view('informasi', $detail);
		$this->load->view('template/footer');
	}
}
