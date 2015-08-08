<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insta extends CI_Controller {
	function __construct(){
	    parent::__construct();
  	}
	public function index()
	{
		$data['title'] = "Instagram - Beranda Jakarta Tourism";
		$this->load->view('vw_insta.php',$data);
	}
}