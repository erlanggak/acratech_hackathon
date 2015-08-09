<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model{

    function daftar($nama_lengkap,$username,$email,$password){
        $this->db->query("insert into user (nama_lengkap,username,email,password) values ('$nama_lengkap','$username','$email','$password')");
    }

 }
?>