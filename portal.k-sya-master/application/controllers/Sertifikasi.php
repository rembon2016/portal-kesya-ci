<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikasi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Blog_model','blog_model');
		$this->db2 = $this->load->database('db_dashboard', TRUE);

	} 
 
	// public function privacypolice(){ 
	// 	$this->load->view('privacypolice');
	// } 
	function index(){
		$a['pemuda'] = $this->db2->where('id_pemuda','8ec26bc4-cb22-403d-9bd2-e9409053a0f1')->get('user.pemuda_tani')->row();
 
		
		$this->load->view('sertifikat',$a);
	}

	public function getSertifikat()
	{ 
							$nik = $this->input->post('nik');
							 $this->db2->select('pt.nama_lengkap,up.tgl_registrasi');
							 $this->db2->from('user.pemuda_tani pt');
							 $this->db2->join('user.user_pengguna up','pt.id_unit = up.id','left');
							 $this->db2->where('pt.nik',$nik);
		$a['sertifikat'] = $this->db2->get()->row();
		if($a['sertifikat'] == null){
			echo "";
		}else{

			$this->load->view('sertifikat_detail',$a);
		}
	}


}