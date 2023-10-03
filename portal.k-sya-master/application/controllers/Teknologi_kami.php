<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknologi_kami extends CI_Controller {
	function __construct(){
		parent::__construct();
 
	} 
	function index(){
		$a['teknologi'] = $this->db->get('teknologi')->result();
		$this->load->view('teknologi_kami',$a);
	}


}