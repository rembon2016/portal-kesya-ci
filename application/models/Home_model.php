<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
	
	function get_post_header(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		// $this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}
	function get_post_header2(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->where('post_category_id','');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	function get_post_header_2(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(2,1);
		$query = $this->db->get();
		return $query;
	}

	function get_post_header_3(){
		$this->db->select('tbl_post.*');
		$this->db->from('tbl_post');
		$this->db->where('post_category_id','1');
		//$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query;
	}
	function get_post_header_32(){
		$this->db->select('tbl_post.*');
		$this->db->from('tbl_post');
		$this->db->where('post_category_id','2');
		//$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query;
	}

	function get_latest_post(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(8);
		$query = $this->db->get();
		return $query;
	}

	function get_mitra(){
		$this->db->select('tbl_mitra.*, user_name');
		$this->db->from('tbl_mitra');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		//$this->db->limit(8);
		$query = $this->db->get();
		return $query;
	}

	function get_komisioner(){
		$this->db->select('tbl_komisioner.*');
		$this->db->from('tbl_komisioner');
		
		$this->db->order_by('post_id', 'ASC');
		
		$query = $this->db->get();
		return $query;
	}

	function get_popular_post(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_views', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query;
	}

	function checking_email($email){
		$query = $this->db->query("SELECT * FROM tbl_subscribe WHERE subscribe_email='$email'");
		return $query;
	}

	function save_subcribe($email){
		$query = $this->db->query("INSERT INTO tbl_subscribe (subscribe_email) VALUES ('$email')");
		return $query;
	}

	function get_komisoner_by_id($post_id){
		$result = $this->db->query("SELECT * FROM tbl_komisioner WHERE post_slug='$post_id'");
		return $result;
	}
	

	function get_foto($limit, $start,$id){
        $query = $this->db->where('post_category_id',$id)->get('tbl_gallery', $limit, $start);
        return $query;
    }

}