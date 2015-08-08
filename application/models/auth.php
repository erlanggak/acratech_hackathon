<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Model{

    function do_auth($username,$password){
        $hasil = $this->db->query("select * from user where username = '$username' and password = '$password'");
        if($hasil->num_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }

 }
?>