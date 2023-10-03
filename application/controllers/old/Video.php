<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Blog_model','blog_model');
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Home_model','home_model');
		$this->load->model('Site_model','site_model');
		$this->load->model('backend/Gallery_model','gallery_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
	}
	function index(){

		$ApiKey = "AIzaSyC0pJLHlvlq8WpwztC-VrLI9CYtH06YpK4";
		$ChannelId = "UCdFHg8HZCPgHiYmUclj_xRw";
		$maxResult = 12 ;

		$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$ChannelId.'&maxResults='.$maxResult.'&key='.$ApiKey.''));
	//	var_dump($videoList);die();
		$x['data'] = $videoList;
		$x['header'] = $this->load->view('header','',TRUE);
		$x['footer'] = $this->load->view('footer','',TRUE);
		$site = $this->site_model->get_site_data()->row_array();
		$x['site_name'] = $site['site_name'];
		$x['site_twitter'] = $site['site_twitter'];
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$x['meta_description'] = $query['category_name'];
		$this->load->view('Video_view',$x);
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

}