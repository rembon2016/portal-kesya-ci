<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Contact_model','contact_model');
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Site_model','site_model');
        $this->visitor_model->count_visitor();
	}
	function index(){
		$site = $this->site_model->get_site_data()->row_array();
		$data['site_title'] = $site['site_name'];
		$data['site_desc'] = $site['site_name'];
		$data['site_name'] = $site['site_name'];
		$data['site_twitter'] = $site['site_twitter'];
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$data['meta_description'] = $query['category_name'];
		$data['header'] = $this->load->view('header','',TRUE);
		$data['footer'] = $this->load->view('footer','',TRUE); 
		$this->load->view('contact_view',$data);
	}

	function send(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('contact');
		}else{
			$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
 
			$userIp=$this->input->ip_address();
		 
			$secret = $this->config->item('google_secret');
	   
			$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
	 
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, $url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = curl_exec($ch); 
			curl_close($ch);      
			 
			$status= json_decode($output, true);
	 
			if ($status['success']) {
				$name=$this->input->post('name',TRUE);
				$email=$this->input->post('email',TRUE);
				$subject=$this->input->post('subject',TRUE);
				$message=strip_tags(htmlspecialchars($this->input->post('message',TRUE),ENT_QUOTES));
				$this->contact_model->save_message($name,$email,$subject,$message);
			    $this->session->set_flashdata('msg','<div class="alert alert-info">Terima kasih telah menghubungi kami, pesan Anda akan segera kami proses.</div>');
				redirect('contact');
			}else{
				$this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');
				redirect('contact');
			}

			
			
			
		}
	}
}