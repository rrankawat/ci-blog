<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{	
		$data['title'] = 'Home';
		$this->load->view('templates/header');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}

	public function about()
	{	
		$data['title'] = 'About';
		$this->load->view('templates/header');
		$this->load->view('pages/about', $data);
		$this->load->view('templates/footer');
	}

}
