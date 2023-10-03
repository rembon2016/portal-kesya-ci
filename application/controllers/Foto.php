<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}

	function index($id = ""){ 
		$a['album'] = $this->db->get('tbl_album')->result();
	
		$this->load->view('foto',$a); 
	}

	public function lihat_foto($id)
	{
		$a['album'] = $this->db->where('post_id',$id)->get('tbl_album')->row();


		 //konfigurasi pagination
		 $config['base_url'] = site_url('foto/lihat_foto/'.$id); //site url 
		 $config['total_rows'] = count($this->db->where('post_category_id',$id)->get('tbl_gallery')->result()); //total row
		 $config['per_page'] = 12;  //show record per halaman
		 $config["uri_segment"] = 4;  // uri parameter
		 $choice = $config["total_rows"] / $config["per_page"];
		 $config["num_links"] = floor($choice);
  
	 	 $config['first_link']       = 'First';
		 $config['last_link']        = 'Last';
		 $config['next_link']        = 'Next';
		 $config['prev_link']        = 'Prev';
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
  
		 $this->pagination->initialize($config);
		 $a['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
  
		 $a['foto'] = $this->Home_model->get_foto($config["per_page"], $a['page'],$id)->result();           
  
		 $a['pagination'] = $this->pagination->create_links();


		$this->load->view('detail_foto',$a); 

	}
 

}