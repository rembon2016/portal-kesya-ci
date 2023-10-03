<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){ 
		$this->load->view('v2/blog'); 
	}
	function blog_post(){ 
		$this->load->view('v2/blog_detail'); 
	}


}