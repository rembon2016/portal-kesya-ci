<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$a['organ'] = $this->db->where('id',1)->get('organisasi')->row();
		$a['harapan'] = $this->db->where('id',2)->get('organisasi')->row();

		$this->load->view('organisasi',$a); 
	}


}