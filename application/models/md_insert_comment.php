<?php if (!defined('BASEPATH'))    exit('No direct script access allowed');
class Md_insert_comment extends CI_Model
{
	function __construct()
	{parent::__construct();}
	public function insert ($nama, $username, $password){      
		$data = array (
			'user' =>$user,
			'destination'=>$destination,
			'rate'=>$rate,
			'comment'=>$comment);
			
		$this->db->insert('comment_destination', $data);
	}
}