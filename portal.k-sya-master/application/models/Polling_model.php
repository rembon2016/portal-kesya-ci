<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polling_model extends CI_Model{

    function get_pertanyaan(){
		$this->db->select('polling_pertanyaan.*');
		$this->db->from('polling_pertanyaan');
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get();
		return $query;
	}

}