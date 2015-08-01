<?php
class Main extends CI_Controller {
	public function index(){
		$data['title'] = "Acratech App 1.0";
		$this->load->view('main',$data);
	}
}
?>