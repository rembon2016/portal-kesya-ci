<?php
class Category_produk_model extends CI_Model{

	function get_all_category(){
		$result = $this->db->get('tbl_kategori_produk');
		return $result; 
	}

	function add_new_row($category,$slug){
		$data = array(
	        'title' => $category,
	        'deskripsi' => $slug
		);
		$this->db->insert('tbl_kategori_produk', $data);
	}

	function edit_row($id,$category,$slug){
		$data = array(
	        'title' => $category,
	        'deskripsi' => $slug
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_kategori_produk', $data);
	}

	function delete_row($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_kategori_produk');
	}


}