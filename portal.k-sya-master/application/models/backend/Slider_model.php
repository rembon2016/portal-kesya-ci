<?php
class Slider_model extends CI_Model{

	//BACKEND
	function get_all_post(){
		$result = $this->db->query("SELECT g.post_id,g.post_image,g.post_title,g.post_description,g.post_date,g.post_slug,g.post_status,a.post_title AS kategori FROM slider g
		JOIN tbl_album a ON g.post_category_id = a.post_id");
		return $result;
	}

	function get_post_by_id($post_id){
		$result = $this->db->query("SELECT * FROM slider WHERE post_id='$post_id'");
		return $result;
	}

	function save_data($data){
		
		$this->db->insert('slider', $data);
	}
	function update($id, $data){
		$this->db->where('id',$id);
		$this->db->update('slider', $data);
	}
	function delete_data($id){
		$this->db->where('id', $id);
		$this->db->delete('slider');
	}
	
}