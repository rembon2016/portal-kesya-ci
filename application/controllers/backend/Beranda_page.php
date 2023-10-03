<?php
class Beranda_page extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->library('upload');
		$this->load->model('backend/Beranda_page_model','Beranda_page_model');
		$this->load->helper('text');
	}

	function index(){
		$x['data']=$this->db->where('delete_date =',null)->get('page');
		$this->load->view('backend/beranda_page/beranda_page',$x);
	}

	public function add_new() 
	{ 
		$x['title'] = "Add New";
		$this->load->view('backend/beranda_page/add',$x);
	}

	public function edit($id)
	{ 
		$x['title'] = "Edit";
		$x['data'] = $this->db->where('delete_date =',null)->where('id',$id)->get('page')->row();
		$this->load->view('backend/beranda_page/edit',$x); 
	}

	function publish(){
		$config['upload_path'] = './assets/visi/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE; 

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/visi/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/visi/'.$img['file_name'];
	            $image	  = $img['file_name'];
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
				
				$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

				$data = array(
					"judul" => $title,
					"deskripsi" => $description,
					"foto" => $image,
					"create_date" => date('Y-m-d'), 
				);
				$this->Beranda_page_model->save_data($data);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/visi');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/visi');
	        }

	    }else{
			redirect('backend/visi');
		}
	}



	function update(){
		$config['upload_path'] = './assets/beranda_page/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	           
	            $image    = $img['file_name'];
	            $id 	  = $this->input->post('id',TRUE);
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
			
				$description=htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

				$data = array(
					"judul" => $title,
					"deskripsi" => $description,
					"foto" => $image,
					"create_date" => date('Y-m-d'), 
				);

				$this->Beranda_page_model->update($id,$data);

				echo $this->session->set_flashdata('msg','info');
				redirect('backend/beranda_page');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/beranda_page');
	        }

	    }else{
	    	$id 	  = $this->input->post('id',TRUE);
	    	$video 	  = $this->input->post('video',TRUE);
			$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
		
		
			$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

			$data = array(
				"judul" => $title,
				"deskripsi" => $description,
				"video" => $video,
			);
 
			$this->Beranda_page_model->update($id,$data);

			echo $this->session->set_flashdata('msg','info');
			redirect('backend/beranda_page');
		}

	}

	function delete(){ 
		$id = $this->input->post('id',TRUE);
		$this->Beranda_page_model->delete_data($id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('backend/visi');
	}

	//upload image summernote
	function upload_image(){
		if(isset($_FILES["file"]["name"])){
			 $config['upload_path'] = './assets/visi/';
			 $config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $this->upload->initialize($config);
			 if(!$this->upload->do_upload('file')){
					$this->upload->display_errors();
					return FALSE;
			 }else{
					$data = $this->upload->data();
		            //Compress Image
		            $config['image_library']='gd2';
		            $config['source_image']='./assets/visi/'.$data['file_name'];
		            $config['create_thumb']= FALSE;
		            $config['maintain_ratio']= TRUE;
		            $config['quality']= '60%';
		            $config['width']= 800;
		            $config['height']= 800;
		            $config['new_image']= './assets/visi/'.$data['file_name'];
		            $this->load->library('image_lib', $config);
		            $this->image_lib->resize();
					echo base_url().'assets/visi/'.$data['file_name'];
			 }
		}
	}




}