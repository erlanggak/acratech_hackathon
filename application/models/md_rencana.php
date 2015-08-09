<?php if (!defined('BASEPATH'))    exit('No direct script access allowed');
class Md_rencana extends CI_Model
{
	function __construct()
	{parent::__construct();}
	public function getAll($id_user){      
		return $this->db->query("select * from rencana where id_user = '$id_user'")->result();
	}
	
	public function hapus_rencana($rencana){
		$this->db->query("delete Id from rencana where Id = '$rencana'");
	}
}