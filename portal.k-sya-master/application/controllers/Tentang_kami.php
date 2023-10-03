<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller {
	function __construct(){
		parent::__construct();

	}
	function index(){

		$a['latar'] = $this->db->where('id',1)->get('about')->row();
		$a['sejarah'] = $this->db->where('id',3)->get('about')->row();
		$a['dibawah'] = $this->db->where('id',4)->get('about')->row();
		$a['solusi'] = $this->db->where('id',5)->get('about')->row();
		$a['pembentukan'] = $this->db->where('id',6)->get('about')->row();
		$a['inspirasi'] = $this->db->where('id',7)->get('about')->row();


		$this->load->view('tentang_kami',$a);
	}


}