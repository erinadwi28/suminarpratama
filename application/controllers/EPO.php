<?php

class EPO extends CI_Controller{
	public function index()
	{	
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('EPO');
		$this->load->view('template/footer');
	}
}
