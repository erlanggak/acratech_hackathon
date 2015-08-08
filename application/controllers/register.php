<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct(){
     	parent::__construct();
     	$this->load->helper("html");
     	$this->load->helper("form");
     	$this->load->helper("text");
     	$this->load->model("m_user");
     	//$this->load->model('auth');
     	$this->load->library('session');
  	}

	public function index()
	{
		$data['title'] = "Register";
		$this->load->view('vw_register.php',$data);
	}

	public function daftar_anggota()
	{
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$query = $this->m_user->daftar($nama_lengkap,$username,$email,$password);
		$data['title'] = "Login Now";
		$this->load->view('vw_login',$data);
	}
	
}