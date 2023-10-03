<?php
class Produkhukum_model extends CI_Model{

	//BACKEND
	function get_all_post(){
		$result = $this->db->query("SELECT p.id,p.title,p.deskripsi,p.image_file,p.image_link,kp.title as category_name FROM tbl_produk_hukum p JOIN tbl_kategori_produk kp ON p.post_category_id=kp.id");
		return $result;
	}

	function get_post_by_id($post_id){
		$result = $this->db->query("SELECT * FROM tbl_produk_hukum WHERE id='$post_id'");
		return $result;
	}

	function save_post($title,$description,$image_file,$image_link,$category,$slug){
		$data = array(
	        'title' 	   => $title,
	        'deskripsi' => $description,
	        'image_file'    => $image_file,
	        'image_link' 	   => $image_link,
	        'post_category_id' => $category,
	      
	        'post_slug' 	   => $slug,
	        'post_user_id'	   => $this->session->userdata('id')
		);
		$this->db->insert('tbl_produk_hukum', $data);
	}

	function edit_post_with_img($id,$title,$description,$image_file,$category,$slug){
		$result = $this->db->query("UPDATE tbl_produk_hukum SET title='$title',deskripsi='$description',image_file='$image_file',post_category_id='$category',post_slug='$slug' WHERE id='$id'");
		return $result;
	}

	function edit_post_no_img($id,$title,$description,$category,$slug){
		$result = $this->db->query("UPDATE tbl_produk_hukum SET title='$title',deskripsi='$description',post_category_id='$category',post_slug='$slug' WHERE id='$id'");
		return $result;
	}

	function delete_post($post_id){
		$this->db->where('id', $post_id);
		$this->db->delete('tbl_produk_hukum');
	}
	
	//END BACKEND

}