<?php

class Member_model extends CI_Model{
	
	function getUserById($user_id){
		$this->db->select('tbl_user.*, member.*');
		$this->db->from('tbl_user');
		$this->db->where('tbl_user.user_id', $user_id);
		$this->db->join('member', 'member.UserId = tbl_user.user_id','left');
		$query = $this->db->get();
		return $query; 
	}
 
}
