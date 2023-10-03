<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){ 
		parent::__construct();
		$this->load->model('Login_model');
	} 
	public function signin(){ 
       $email = $this->input->post('email');
       $password = md5($this->input->post('password'));
       $check =  $this->Login_model->check_login($email,$password)->row(); 
       if($check->user_id != null ){
        $session = array(
                'user_id'  => $check->user_id,
                'email'     => $check->user_email,
                'username'     => $check->user_name,
                'logged_in' => TRUE
        );
        $this->session->set_userdata($session);
        redirect(site_url('member/profil'));
       }else{
        $this->session->set_flashdata('message','<script>Swal.fire(
            "Oops!",
            "Email atau password ada yang salah, Login kembali",
            "error"
          )</script>'); 
        redirect(site_url('register'));

       }
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url(''));
    }


}