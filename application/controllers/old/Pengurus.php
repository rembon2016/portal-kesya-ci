<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {
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
		$jum=$this->blog_model->get_blogs();
	    $page=$this->uri->segment(3);
	    if(!$page):
	        $offset = 0;
	    else:
	        $offset = $page;
	    endif;
	    $limit=8;
	    $config['base_url'] = base_url() . 'blog/page/';
	    $config['total_rows'] = $jum->num_rows();
	    $config['per_page'] = $limit;
	    $config['uri_segment'] = 3;
	    $config['use_page_numbers']=TRUE;

	    //Tambahan untuk styling
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

	    $config['first_link'] = '<';
	    $config['last_link'] = '>';
	    $config['next_link'] = '>>';
	    $config['prev_link'] = '<<';
	    $this->pagination->initialize($config);
	    $x['page'] =$this->pagination->create_links();
		$x['data']=$this->blog_model->get_blog_perpage($offset,$limit);
		$x['judul']="Blog";
		if(empty($this->uri->segment(3))){
			$next_page=2;
			$x['canonical']=site_url('blog');
			$x['url_prev']="";
		}elseif($this->uri->segment(3)=='1'){
			$next_page=2;
			$x['canonical']=site_url('blog');
			$x['url_prev']=site_url('blog');
		}elseif($this->uri->segment(3)=='2'){
			$next_page=$this->uri->segment(3)+1;
			$x['canonical']=site_url('blog/page/'.$this->uri->segment(3));
			$x['url_prev']=site_url('blog');
		}else{
			$next_page=$this->uri->segment(3)+1;
			$prev_page=$this->uri->segment(3)-1;
			$x['canonical']=site_url('blog/page/'.$this->uri->segment(3));
			$x['url_prev']=site_url('blog/page/'.$prev_page);
		}
		$x['post_komisioner'] = $this->home_model->get_komisioner();
		$x['url_next']=site_url('blog/page/'.$next_page);
		$x['populer_post'] = $this->blog_model->get_popular_post();
		$x['header'] = $this->load->view('header','',TRUE);
		$x['footer'] = $this->load->view('footer','',TRUE);
		$site = $this->site_model->get_site_data()->row_array();
		$x['site_name'] = $site['site_name'];
		$x['site_twitter'] = $site['site_twitter'];
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$x['meta_description'] = $query['category_name'];
		$this->load->view('Pengurus_view',$x);
	}


	function detail($slug){
		$data=$this->home_model->get_komisoner_by_id(trim($slug));
	//	var_dump($data->num_rows());die();
		if($data->num_rows() > 0){
		    $q=$data->row_array();
			// var_dump($q);die();
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
    		$x['email']=$q['post_email'];
			$x['jabatan']=$q['post_jabatan'];
    	
    		$x['post_id']=$kode;
    		
    		
    		$x['header'] = $this->load->view('header','',TRUE);
    		$x['footer'] = $this->load->view('footer','',TRUE);
    		$site = $this->site_model->get_site_data()->row_array();
			$x['site_name'] = $site['site_name'];
			$x['site_twitter'] = $site['site_twitter'];
			$x['site_facebook'] = $site['site_facebook'];
    		$this->load->view('PengurusDetail_view',$x);
		}else{
		    redirect('pengurus');
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

}