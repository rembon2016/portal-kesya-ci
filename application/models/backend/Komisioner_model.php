<?php
class Komisioner_model extends CI_Model{

	//BACKEND
	function get_all_post(){
		$result = $this->db->query("SELECT post_id,post_title,post_image,post_jabatan,post_email,DATE_FORMAT(post_date,'%d %M %Y') AS post_date,post_status FROM tbl_komisioner");
		return $result;
	}

	function get_post_by_id($post_id){
		$result = $this->db->query("SELECT * FROM tbl_komisioner WHERE post_id='$post_id'");
		return $result;
	}

	function save_post($title,$slug,$jabatan,$email,$image,$description){
		$data = array(
	        'post_title' 	   => $title,
	        'post_description' => $description,
	        'post_image' 	   => $image,
			'post_jabatan'     => $jabatan,
			'post_email'     => $email,
	        'post_slug' 	   => $slug,
	        'post_status' 	   => 1,
	        'post_user_id'	   => $this->session->userdata('id')
		);
		$this->db->insert('tbl_komisioner', $data);
	}

	function edit_post_with_img($id,$title,$jabatan,$email,$slug,$image,$description){
		$result = $this->db->query("UPDATE tbl_komisioner SET post_title='$title',post_description='$description',post_jabatan='$jabatan',post_email='$email',post_image='$image',post_last_update=NOW(),post_slug='$slug' WHERE post_id='$id'");
		return $result;
	}

	function edit_post_no_img($id,$title,$jabatan,$email,$slug,$description){
		$result = $this->db->query("UPDATE tbl_komisioner SET post_title='$title',post_description='$description',post_jabatan='$jabatan',post_email='$email',post_last_update=NOW(),post_slug='$slug' WHERE post_id='$id'");
		return $result;
	}

	function delete_post($post_id){
		$this->db->where('post_id', $post_id);
		$this->db->delete('tbl_komisioner');
	}
	
	//END BACKEND

}