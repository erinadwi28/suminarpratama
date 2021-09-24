<?php

class Layanan extends CI_Controller{
	public function index()
	{	
		$data['layanan'] = $this->model_layanan->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('layanan', $data);
		$this->load->view('template/footer');
	}
}
