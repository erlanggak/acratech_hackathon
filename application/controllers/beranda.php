<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct(){
	    parent::__construct();
  	}
	public function index()
	{
		$data['title'] = "Beranda Jakarta Tourism";
		$this->load->view('vw_beranda',$data);
	}

	public function map(){
		$data['title'] = "Map Jakarta Tourism";
		$this->load->view('vw_map',$data);
	}

	public function aboutus(){
		$data['title'] = "About Us Jakarta Tourism";
		$this->load->view('vw_aboutus',$data);
	}
}