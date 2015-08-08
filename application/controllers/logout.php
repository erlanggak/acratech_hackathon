<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	function __construct(){
     parent::__construct();
     $this->load->helper("html");
     $this->load->helper("form");
     $this->load->helper("text");
     $this->load->model('auth');
     $this->load->library('session');
  }


	public function index()
	{
		$data['title'] = 'Welcome to Jakart Tourism';
		$this->session->sess_destroy();
		redirect('login');
		//$this->load->view('login',$data);
	}

	public function auth_login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		if($this->auth->do_auth($username, $password) == true)
		{
			$newdata = array(
				'username'  => $username,
				'password' => $password,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('home');
		}
		else
		{
			redirect('login');
		}
	}

}
