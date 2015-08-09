<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coffeeshop extends CI_Controller {
	function __construct(){
     	parent::__construct();
     	$this->load->helper("html");
     	$this->load->helper("form");
     	$this->load->helper("text");
     	//$this->load->model('auth');
     	$this->load->library('session');
  	}

	public function index()
	{
        if ($this->session->userdata('logged_in')) {
		$data['title'] = "Coffee Shop in Jakarta";
		$this->load->view('vw_coffeeshop.php',$data);
        } else {
            redirect('login');
        }
	}
}
