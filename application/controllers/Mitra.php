<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {
	function __construct(){
		parent::__construct();
 
	} 
	function index(){
		$a['mitra'] = $this->db->get('mitra')->result();

		$this->load->view('mitra',$a);
	}


}