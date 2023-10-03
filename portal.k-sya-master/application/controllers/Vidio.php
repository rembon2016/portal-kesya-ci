<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vidio extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){ 
		$a['video'] = $this->db->get('video')->result();
		$this->load->view('vidio',$a); 
	}


}