<?php if (!defined('BASEPATH'))    exit('No direct script access allowed');
class Md_insert_comment extends CI_Model
{
	function __construct()
	{parent::__construct();}
	public function insert ($user, $destination, $rate, $comment, $time){      
		$data = array (
			'user' =>$user,
			'destination'=>$destination,
			'rate'=>$rate,
			'comment'=>$comment,
			'time'=>$time);
			
		$this->db->insert('comment_destination', $data);
	}
}