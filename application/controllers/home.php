<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->library('session');
	    $this->load->model('auth');
	    $this->load->helper(array('form', 'url'));
  	}
	public function index(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "Welcome to Jakarta Tourism";
			$this->load->view('vw_home',$data);
		} else {
        	redirect('login');
    	}
	}

	public function destinasi(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "Tour Destination Jakarta Tourism";
			$this->load->view('vw_destinasi',$data);
		} else {
        	redirect('login');
    	}
	}
}
