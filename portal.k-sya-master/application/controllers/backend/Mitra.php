<?php
class Mitra extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->library('upload');
		$this->load->model('backend/Mitra_model','mitra_model');
		$this->load->helper('text');
	}

	function index(){
		$x['data']=$this->db->where('delete_date =',null)->get('mitra');
		$this->load->view('backend/mitra/mitra',$x);
	}

	public function add_new() 
	{  
		$x['title'] = "Add New mitra";
		$this->load->view('backend/mitra/add',$x);
	}

	public function edit($id)
	{ 
		$x['title'] = "Edit mitra";
		$x['data'] = $this->db->where('delete_date =',null)->where('id',$id)->get('mitra')->row();
		$this->load->view('backend/mitra/edit',$x); 
		
	}

	function publish(){
		$config['upload_path'] = './assets/mitra/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE; 

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/mitra/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320; 
	            $config['new_image']= './assets/mitra/'.$img['file_name'];
	            $image	  = $img['file_name'];
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
				
				$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

				$data = array(
					"judul" => $title,
					"deskripsi" => $description,
					"foto" => $image,
					"create_date" => date('Y-m-d'), 
				);
				$this->mitra_model->save_data($data);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/mitra');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/mitra');
	        }

	    }else{
			redirect('backend/mitra');
		}
	}



	function update(){
		$config['upload_path'] = './assets/mitra/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/mitra/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/mitra/'.$img['file_name'];
	       

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

				$this->mitra_model->update($id,$data);

				echo $this->session->set_flashdata('msg','info');
				redirect('backend/mitra');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/mitra');
	        }

	    }else{
	    	$id 	  = $this->input->post('id',TRUE);
			$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
		
		
			$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

			$data = array(
				"judul" => $title,
				"deskripsi" => $description,
			);
 
			$this->mitra_model->update($id,$data);

			echo $this->session->set_flashdata('msg','info');
			redirect('backend/mitra');
		}

	}

	function delete(){ 
		$id = $this->input->post('id',TRUE);
		$this->mitra_model->delete_data($id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('backend/mitra');
	}

	//upload image summernote
	function upload_image(){
		if(isset($_FILES["file"]["name"])){
			 $config['upload_path'] = './assets/mitra/';
			 $config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $this->upload->initialize($config);
			 if(!$this->upload->do_upload('file')){
					$this->upload->display_errors();
					return FALSE;
			 }else{
					$data = $this->upload->data();
		            //Compress Image
		            $config['image_library']='gd2';
		            $config['source_image']='./assets/mitra/'.$data['file_name'];
		            $config['create_thumb']= FALSE;
		            $config['maintain_ratio']= TRUE;
		            $config['quality']= '60%';
		            $config['width']= 800;
		            $config['height']= 800;
		            $config['new_image']= './assets/mitra/'.$data['file_name'];
		            $this->load->library('image_lib', $config);
		            $this->image_lib->resize();
					echo base_url().'assets/mitra/'.$data['file_name'];
			 }
		}
	}




}