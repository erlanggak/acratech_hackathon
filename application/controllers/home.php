<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->library('session');
	    $this->load->model('auth');
	    $this->load->helper(array('form', 'url'));
  	}
	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$data['title'] = "Login Sukses to Jakarta Tourism";
			$this->load->view('vw_home.php',$data);
		} else {
        	redirect('login');
    	}
	}
}
