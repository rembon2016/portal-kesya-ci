<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vidio extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){ 
		$this->load->view('v2/vidio'); 
	}


}