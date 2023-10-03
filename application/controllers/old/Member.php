<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Blog_model','blog_model');
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Home_model','home_model');
		$this->load->model('Site_model','site_model');
		$this->load->model('Member_model'); 
		$this->load->model('backend/Gallery_model','gallery_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
	}
	function index(){
		$x['data'] = $this->gallery_model->get_member();
		$x['header'] = $this->load->view('header','',TRUE);
		$x['footer'] = $this->load->view('footer','',TRUE);
		$site = $this->site_model->get_site_data()->row_array();
		$x['site_name'] = $site['site_name'];
		$x['site_twitter'] = $site['site_twitter'];
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$x['meta_description'] = $query['category_name'];
		$this->load->view('member_view',$x);
	}


	function detail($slug){
		$data=$this->blog_model->get_post_by_slug($slug);
		if($data->num_rows() > 0){
		    $q=$data->row_array();
    		$kode=$q['post_id'];
    		$x['title']=$q['post_title'];
    		if(empty($q['post_description'])){
    			$x['description'] = strip_tags(word_limiter($q['post_contents'],25));	
    		}else{
    			$x['description'] = $q['post_description'];
    		}
    		$x['image']=$q['post_image'];
    		$x['slug']=$q['post_slug'];
    		$x['content']=$q['post_contents'];
    		$x['views']=$q['post_views'];
    		$x['comment']=$q['comment_total'];
    		$x['author']=$q['user_name'];
    		$x['category']=$q['category_name'];
    		$x['category_slug']=$q['category_slug'];
    		$x['date']=$q['post_date'];
    		$x['tags']=$q['post_tags'];
    		$x['post_id']=$kode;
    		$category_id = $q['category_id'];
    		$this->blog_model->count_views($kode);
    		$x['related_post']  = $this->blog_model->get_related_post($category_id,$kode);
    		$x['show_comments'] = $this->blog_model->show_comments($kode);
    		$x['header'] = $this->load->view('header','',TRUE);
    		$x['footer'] = $this->load->view('footer','',TRUE);
    		$site = $this->site_model->get_site_data()->row_array();
			$x['site_name'] = $site['site_name'];
			$x['site_twitter'] = $site['site_twitter'];
			$x['site_facebook'] = $site['site_facebook'];
    		$this->load->view('blog_detail_view',$x);
		}else{
		    redirect('blog');
		}
			
	}


	function submit_komentar(){
    	$post_id = htmlspecialchars($this->input->post('post_id',TRUE),ENT_QUOTES);
    	$slug = htmlspecialchars($this->input->post('slug',TRUE),ENT_QUOTES);
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('comment', 'Comment', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('blog/'.$slug);
		}else{
			$name=$this->input->post('name',TRUE);
			$email=$this->input->post('email',TRUE);
			$comment=strip_tags(htmlspecialchars($this->input->post('comment',TRUE),ENT_QUOTES));
			$this->blog_model->save_comment($post_id,$name,$email,$comment);
			$this->session->set_flashdata('msg','<div class="alert alert-info">Terima kasih atas respon Anda, komentar Anda akan tampil setelah moderasi</div>');
			redirect('blog/'.$slug);
		}
	}

	function subscribe(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			$base_url = site_url();
			redirect($base_url);
		}else{
			$email = $this->input->post('email',TRUE);
			$url = $this->input->post('url',TRUE);
			$checking_email = $this->home_model->checking_email($email);
			if($checking_email->num_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-info">Terima kasih telah berlangganan.</div>');
				redirect($url);
			}else{
				$this->home_model->save_subcribe($email);
				$this->session->set_flashdata('msg','<div class="alert alert-info">Terima kasih telah berlangganan.</div>');
				redirect($url);
			}
			
		}
	}

	public function profil()
	{

		$user_id = $this->session->userdata('user_id'); 
		$x['provinsi'] = $this->db->order_by('provinsi','ASC')->get('tbl_provinsi')->result(); 
		$x['user'] = $this->Member_model->getUserById($user_id)->row();
		$x['header'] = $this->load->view('header','',TRUE);
		$x['footer'] = $this->load->view('footer','',TRUE);
		$site = $this->site_model->get_site_data()->row_array();
		$x['site_name'] = $site['site_name'];
		$x['site_twitter'] = $site['site_twitter'];
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$x['meta_description'] = $query['category_name'];
		$this->load->view('member/profil',$x);
	}

	public function update_profil()
	{
		$user_id = $this->session->userdata('user_id');
		$image = $this->input->post('images');
		$password = $this->input->post('password');
		$ulangi_password = $this->input->post('ulangi_password');

		if($_FILES['images']['name'] != null){

				$config['upload_path'] = './assets/images/user';
				$config['allowed_types'] = '*';
				$config['max_size']	= 50000;
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload');
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('images'))
				{
					$img = "image.png";
				}
				else
				{
					$img = $this->upload->file_name;
				}
 
		}else{
			$img = $this->input->post('image2');
		}

		if($password != ""){
			if($password == $ulangi_password){
				$pass = md5($password);
			}else{
				$this->session->set_flashdata('message','<script>Swal.fire(
					"Oops!",
					"Password tidak sama, ulangi kembali",
					"error"
				  )</script>');
				redirect(site_url('member/profil')); 
			}
		}else{ 
			$pass = $this->input->post('old_password');
		}
			$user = array(
				"user_name" => $this->input->post('username'),
				"user_email" => $this->input->post('email'),
				"user_password" => $pass, 
				"user_photo" => $img,
			);
			$this->db->where('user_id',$user_id);
			$this->db->update('tbl_user',$user);
			$member = array(
					"Provinsi" => $this->input->post('provinsi_id'),
					"Kabkota" => $this->input->post('kabupaten_id'),
					"Kec" => $this->input->post('kecamatan_id'),
					"Desa" => $this->input->post('desa_id'),
					"Ketua" => $this->input->post('ketua'),
					"jumlah_anggota" => $this->input->post('jumlah_anggota'),
					"NamaUnit" => $this->input->post('NamaUnit'),
			);
			$this->db->where('UserId',$user_id);
			$this->db->update('member',$member);
			$this->session->set_flashdata('message','<script>Swal.fire(
				"Berhasil!",
				"Data profil berhasil diubah",
				"success"
			)</script>');
			redirect(site_url('member/profil')); 
			
	}

}