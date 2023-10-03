<?php
class About extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->library('upload');
		$this->load->model('backend/About_model','about_model');
		$this->load->helper('text');
	}

	function index(){
		$x['data']=$this->db->where('delete_date =',null)->get('about');
		$this->load->view('backend/about/about',$x);
	}

	public function add_new() 
	{ 
		$x['title'] = "Add New About";
		$this->load->view('backend/about/add',$x);
	}

	public function edit($id)
	{ 
		$x['title'] = "Edit About";
		$x['data'] = $this->db->where('delete_date =',null)->where('id',$id)->get('about')->row();
		$this->load->view('backend/about/edit',$x); 
		
	}

	function publish(){
		$config['upload_path'] = './assets/about/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE; 

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/about/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/about/'.$img['file_name'];
	            $image	  = $img['file_name'];
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
				
				$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

				$data = array(
					"judul" => $title,
					"deskripsi" => $description,
					"foto" => $image,
					"create_date" => date('Y-m-d'), 
				);
				$this->about_model->save_data($data);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/about');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/about');
	        }

	    }else{
			redirect('backend/about');
		}
	}



	function update(){
		$config['upload_path'] = './assets/about/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/about/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/about/'.$img['file_name'];
	       

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

				$this->about_model->update($id,$data);

				echo $this->session->set_flashdata('msg','info');
				redirect('backend/about');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/about');
	        }

	    }else{
	    	$id 	  = $this->input->post('id',TRUE);
			$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
			$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);
			$data = array(
				"judul" => $title,
				"deskripsi" => $description,
			);
			$this->about_model->update($id,$data);
			echo $this->session->set_flashdata('msg','info');
			redirect('backend/about');
		}

	}

	function delete(){ 
		$id = $this->input->post('id',TRUE);
		$this->about_model->delete_data($id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('backend/about');
	}

	//upload image summernote
	function upload_image(){
		if(isset($_FILES["file"]["name"])){
			 $config['upload_path'] = './assets/about/';
			 $config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $this->upload->initialize($config);
			 if(!$this->upload->do_upload('file')){
					$this->upload->display_errors();
					return FALSE;
			 }else{
					$data = $this->upload->data();
		            //Compress Image
		            $config['image_library']='gd2';
		            $config['source_image']='./assets/about/'.$data['file_name'];
		            $config['create_thumb']= FALSE;
		            $config['maintain_ratio']= TRUE;
		            $config['quality']= '60%';
		            $config['width']= 800;
		            $config['height']= 800;
		            $config['new_image']= './assets/about/'.$data['file_name'];
		            $this->load->library('image_lib', $config);
		            $this->image_lib->resize();
					echo base_url().'assets/about/'.$data['file_name'];
			 }
		}
	}




}