<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi_kami extends CI_Controller {
	function __construct(){
		parent::__construct();
	} 
	function index(){ 
		$this->load->view('v2/hubungi_kami'); 
	}


}