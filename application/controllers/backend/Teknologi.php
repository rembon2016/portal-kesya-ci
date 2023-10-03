<?php
class Teknologi extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->library('upload');
		$this->load->model('backend/teknologi_model','teknologi_model');
		$this->load->helper('text');
	}

	function index(){
		$x['data']=$this->db->where('delete_date =',null)->get('teknologi');
		$this->load->view('backend/teknologi/teknologi',$x);
	}

	public function add_new() 
	{ 
		$x['title'] = "Add New teknologi";
		$this->load->view('backend/teknologi/add',$x);
	}

	public function edit($id)
	{ 
		$x['title'] = "Edit teknologi";
		$x['data'] = $this->db->where('delete_date =',null)->where('id',$id)->get('teknologi')->row();
		$this->load->view('backend/teknologi/edit',$x); 
		
	}

	function publish(){
		$config['upload_path'] = './assets/teknologi/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE; 

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/teknologi/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320; 
	            $config['new_image']= './assets/teknologi/'.$img['file_name'];
	            $image	  = $img['file_name'];
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
				
				$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

				$data = array(
					"judul" => $title,
					"deskripsi" => $description,
					"foto" => $image,
					"create_date" => date('Y-m-d'), 
				);
				$this->teknologi_model->save_data($data);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/teknologi');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/teknologi');
	        }

	    }else{
			redirect('backend/teknologi');
		}
	}



	function update(){
		$config['upload_path'] = './assets/teknologi/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/teknologi/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/teknologi/'.$img['file_name'];
	       

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

				$this->teknologi_model->update($id,$data);

				echo $this->session->set_flashdata('msg','info');
				redirect('backend/teknologi');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/teknologi');
	        }

	    }else{
	    	$id 	  = $this->input->post('id',TRUE);
			$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
		
		
			$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

			$data = array(
				"judul" => $title,
				"deskripsi" => $description,
			);
 
			$this->teknologi_model->update($id,$data);

			echo $this->session->set_flashdata('msg','info');
			redirect('backend/teknologi');
		}

	}

	function delete(){ 
		$id = $this->input->post('id',TRUE);
		$this->teknologi_model->delete_data($id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('backend/teknologi');
	}

	//upload image summernote
	function upload_image(){
		if(isset($_FILES["file"]["name"])){
			 $config['upload_path'] = './assets/teknologi/';
			 $config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $this->upload->initialize($config);
			 if(!$this->upload->do_upload('file')){
					$this->upload->display_errors();
					return FALSE;
			 }else{
					$data = $this->upload->data();
		            //Compress Image
		            $config['image_library']='gd2';
		            $config['source_image']='./assets/teknologi/'.$data['file_name'];
		            $config['create_thumb']= FALSE;
		            $config['maintain_ratio']= TRUE;
		            $config['quality']= '60%';
		            $config['width']= 800;
		            $config['height']= 800;
		            $config['new_image']= './assets/teknologi/'.$data['file_name'];
		            $this->load->library('image_lib', $config);
		            $this->image_lib->resize();
					echo base_url().'assets/teknologi/'.$data['file_name'];
			 }
		}
	}




}