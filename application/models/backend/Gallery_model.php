<?php
class Gallery_model extends CI_Model{

	//BACKEND
	function get_all_post(){
		$result = $this->db->query("SELECT g.post_id,g.post_image,g.post_title,g.post_description,g.post_date,g.post_slug,g.post_status,a.post_title AS kategori 
		FROM tbl_gallery g
		LEFT JOIN tbl_album a ON g.post_category_id = a.post_id");
		return $result;
	}


	function get_post_by_id($post_id){
		$result = $this->db->query("SELECT * FROM tbl_gallery WHERE post_id='$post_id'");
		return $result;
	}

	function get_member(){
		$result = $this->db->query("SELECT * FROM member ");
		return $result;
	}

	function get_post_by_categori_id($post_id){
		$result = $this->db->query("SELECT * FROM tbl_gallery WHERE post_category_id='$post_id'");
		return $result;
	}

	function get_post_by_slug($slug){
		$result = $this->db->query("SELECT g.post_id,g.post_image,g.post_title,g.post_description,g.post_date,g.post_slug,g.post_status,a.post_title AS kategori FROM tbl_gallery g
		JOIN tbl_album a ON g.post_category_id = a.post_id WHERE g.post_slug = '$slug' ");
		return $result;
	}

	function save_post($title,$description,$image,$category,$slug){
		$data = array(
	        'post_title' 	   => $title,
	        'post_description' => $description,
	        'post_image'       => $image,
	       	'post_category_id' => $category,
	        'post_slug' 	   => $slug,
			'post_status' 	   => 1,
	        'post_user_id'	   => $this->session->userdata('id')
		);
		$this->db->insert('tbl_gallery', $data);
	}

	function edit_post_with_img($id,$title,$description,$image,$category,$slug){
		$result = $this->db->query("UPDATE tbl_gallery SET post_title='$title',post_description='$description',post_image='$image',post_category_id='$category',post_slug='$slug' WHERE post_id='$id'");
		return $result;
	}

	function edit_post_no_img($id,$title,$description,$category,$slug){
		$result = $this->db->query("UPDATE tbl_gallery SET post_title='$title',post_description='$description',post_category_id='$category',post_slug='$slug' WHERE post_id='$id'");
		return $result;
	}

	function delete_post($post_id){
		$this->db->where('post_id', $post_id);
		$this->db->delete('tbl_gallery');
	}
	
	//END BACKEND

}