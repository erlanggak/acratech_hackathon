<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
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
		$data['title'] = "Place Details";
		$this->load->view('vw_detail.php',$data);
	}
	
}
