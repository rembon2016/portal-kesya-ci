<?php

class Login_model extends CI_Model{
	
	function check_login($email,$password){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('user_email', $email);
		$this->db->where('user_password', $password);
		$this->db->where('user_level', 2);
		$query = $this->db->get();
		return $query;
	}
 
}