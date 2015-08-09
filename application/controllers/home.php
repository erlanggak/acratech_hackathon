<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->library('session');
	    $this->load->model('auth');
		$this->load->model('m_user');
		$this->load->model('md_rencana');
	    $this->load->helper(array('form', 'url'));
  	}
	public function index(){
		if ($this->session->userdata('logged_in')) {
			$username = $this->session->userdata('username');
			$id_user = $this->m_user->getId($username);
			$data['rencana'] = $this->md_rencana->getAll($id_user);
			$data['title'] = "Welcome to Jakarta Tourism";
			$this->load->view('vw_home',$data);
		} else {
        	redirect('login');
    	}
	}

	public function destinasi(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "Tour Destination | Baper";
			$this->load->view('vw_destinasi',$data);
		} else {
        	redirect('login');
    	}
	}


	public function timeline(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "Curhat di Timeline | Baper";
			$this->load->view('vw_timeline',$data);
		} else {
        	redirect('login');
    	}
	}

	public function list_cafe(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "List Cafe | Baper";
			$this->load->view('vw_list_cafe',$data);
		} else {
        	redirect('login');
    	}
	}

	public function list_museum(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "List Museum | Baper";
			$this->load->view('vw_list_museum',$data);
		} else {
        	redirect('login');
    	}
	}

	public function list_shoping(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "List Shoping Center | Baper";
			$this->load->view('vw_list_shoping',$data);
		} else {
        	redirect('login');
    	}
	}

	public function list_travel(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "List Tour & Travel Agent | Baper";
			$this->load->view('vw_list_travel',$data);
		} else {
        	redirect('login');
    	}
	}

	public function error_404(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "Sorry | Baper";
			$this->load->view('vw_404',$data);
		} else {
        	redirect('login');
    	}
	}
	
	public function hapus_rencana(){
		if ($this->session->userdata('logged_in')) {
			$data['rencana'] = $this->input->post('rencana');
			$this->md_rencana->hapus_rencana($rencana);
			redirect('home');
		} else {
        	redirect('login');
    	}
	}

}
