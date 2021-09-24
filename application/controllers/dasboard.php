<?php

class Dasboard extends CI_Controller{
	public function index()
	{	
		$data['berita'] = $this->model_berita->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dasboard', $data);
		$this->load->view('template/footer');
	}
}
