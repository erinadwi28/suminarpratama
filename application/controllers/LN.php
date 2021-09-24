<?php

class LN extends CI_Controller{
	public function index()
	{	
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('LN');
		$this->load->view('template/footer');
	}
}