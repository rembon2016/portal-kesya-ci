<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct(){ 
		parent::__construct();
		$this->load->model('Blog_model','blog_model');
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Home_model','home_model');
		$this->load->model('Site_model','site_model');
        $this->visitor_model->count_visitor(); 
        $this->load->helper('text');
        error_reporting(0); 
	} 
	function index(){
		$x['provinsi'] = $this->db->order_by('provinsi','ASC')->get('tbl_provinsi')->result(); 
		$x['header'] = $this->load->view('header','',TRUE);
		$x['footer'] = $this->load->view('footer','',TRUE);
		$site = $this->site_model->get_site_data()->row_array();
		$x['site_name'] = $site['site_name'];
		$x['site_twitter'] = $site['site_twitter'];
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$x['meta_description'] = $query['category_name'];
		$this->load->view('member_register',$x); 
	}

	public function getKabkota($provinsi_id)
	{
		$data = $this->db->where('provinsi_id',$provinsi_id)->order_by('kabupaten_kota','ASC')->get('tbl_kabkot')->result(); 
		echo json_encode($data);
	}
	public function getKecamatan($kabupaten_id)
	{
		$data = $this->db->where('kabkot_id',$kabupaten_id)->order_by('kecamatan','ASC')->get('tbl_kecamatan')->result(); 
		echo json_encode($data);
	} 
	public function getDesa($kec_id)
	{
		$data = $this->db->where('kecamatan_id',$kec_id)->order_by('kelurahan','ASC')->get('tbl_kelurahan')->result(); 
		echo json_encode($data);
	}

	public function signup()
	{ 
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');
		$email = $this->input->post('user_email');
		$cek = $this->db->where('user_email',$email)->get('tbl_user')->row();

		if($password != $password2){
			$this->session->set_flashdata('message','<script>Swal.fire(
				"Oops!",
				"Password tidak sama, ulangi kembali",
				"error"
			  )</script>');
			redirect(site_url('register'));
			
		}else if($cek != ""){
			$this->session->set_flashdata('message','<script>Swal.fire(
				"Oops!",
				"Email sudah terpakai",
				"error"
			  )</script>'); 
			redirect(site_url('register'));
		}else{
			$user = array(
				"user_name" => $this->input->post('user_name'),
				"user_email" => $this->input->post('user_email'),
				"user_password" => md5($password),
				"user_level" => 2,
			);
			$this->db->insert('tbl_user',$user); 
			$userid = $this->db->insert_id();
			$member = array(
				"Provinsi" => $this->input->post('provinsi_id'),
				"Kabkota" => $this->input->post('kabupaten_id'),
				"Kec" => $this->input->post('kecamatan_id'),
				"Desa" => $this->input->post('desa_id'),
				"Ketua" => $this->input->post('ketua'),
				"jumlah_anggota" => $this->input->post('jumlah_anggota'),
				"NamaUnit" => $this->input->post('nama_unit'),
				"UserId" => $userid,
			);
			$this->db->insert('member', $member);
			
			$this->session->set_flashdata('message','<script>Swal.fire(
				"Terimakasih!",
				"Akun anda telah terdaftar, silahkan login",
				"success"
			  )</script>');
			redirect(site_url('register'));

		}




	}





}