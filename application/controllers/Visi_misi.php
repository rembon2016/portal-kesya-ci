<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$a['visi'] = $this->db->get('visi')->row();
		$a['misi'] = $this->db->get('misi')->row();
		$this->load->view('visi_misi',$a); 
	}


}