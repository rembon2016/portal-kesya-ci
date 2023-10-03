<?php
class About_model extends CI_Model{

	function save_data($data){
		
		$this->db->insert('about', $data);
	}
	function update($id, $data){ 
		$this->db->where('id',$id);
		$this->db->update('about', $data);
	}
	function delete_data($id){
		$this->db->where('id', $id);
		$this->db->delete('about');
	}
	
}