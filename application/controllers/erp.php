<?php

class ERP extends CI_Controller{
	public function index()
	{	
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('erp');
		$this->load->view('template/footer');
	}
}
