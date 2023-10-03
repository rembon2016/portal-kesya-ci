<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi_kami extends CI_Controller {
	function __construct(){
		parent::__construct();
	} 
	function index(){ 
		$a['site'] = $this->db->get('tbl_site')->row();
		$this->load->view('hubungi_kami',$a); 
	}

	public function send_message()
	{
		$inbox_name = $this->input->post('inbox_name');
		$inbox_email = $this->input->post('inbox_email');
		$inbox_subject = $this->input->post('inbox_subject');
		$inbox_message = $this->input->post('inbox_message');

		$data = array(
			"inbox_name" => $inbox_name,
			"inbox_email" => $inbox_email,
			"inbox_subject" => $inbox_subject,
			"inbox_message" => $inbox_message,
			"inbox_created_at" => date('Y-m-d H:i:s'),
			"inbox_status" => '0',
		);

		$this->db->insert('tbl_inbox',$data);
	}


}