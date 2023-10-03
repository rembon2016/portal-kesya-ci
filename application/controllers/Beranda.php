<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model','blog_model');

	} 

	public function privacypolice(){
		$this->load->view('privacypolice');
	}
	function index(){
		$a['slider'] = $this->db->get('slider')->result();
 
		$a['panduan'] = $this->db->where('id',1)->get('page')->row();

		$a['komando'] = $this->db->where('type','kktpti')->get('page')->row();
		$a['tanimodern'] = $this->db->where('id',4)->get('page')->row();
		$a['tanimilenial'] = $this->db->where('id',5)->get('page')->row();
		$a['mediakomando'] = $this->db->where('id',6)->get('page')->row();
		$a['jokowi'] = $this->db->where('id',7)->get('page')->row();
		$a['limpo'] = $this->db->where('id',8)->get('page')->row();
		$a['works'] = $this->db->where('id',9)->get('page')->row();
		$a['milenial'] = $this->db->where('id',10)->get('page')->row();


		$a['milen1'] = $this->db->where('id',11)->get('page')->row();
		$a['milen2'] = $this->db->where('id',12)->get('page')->row();
		$a['milen3'] = $this->db->where('id',13)->get('page')->row();
		$a['mitra'] = $this->db->get('mitra')->result();

		$a['site'] = $this->db->get('tbl_site')->row();

		$a['new_post'] = $this->blog_model->get_blogs_new(6)->result();
		
		// var_dump($data->site_facebook);
		$this->load->view('beranda',$a);
	}


}