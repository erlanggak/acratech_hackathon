<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = "Acratech App 1.0";
		$this->load->view('welcome_message',$data);
	}

	public function login()
	{
		$data['title'] = "Welcome | Acratech App 1.0";
		$this->load->view('login',$data);
	}
}
