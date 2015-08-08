<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct(){
	    parent::__construct();
  	}
	public function index()
	{
		$data['title'] = "Beranda Jakarta Tourism";
		$this->load->view('vw_beranda.php',$data);
	}
}