<?php
class Organisasi extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->library('upload');
		$this->load->model('backend/Organisasi_model','organisasi_model');
		$this->load->helper('text');
	}

	function index(){
		$x['data']=$this->db->where('delete_date =',null)->get('organisasi');
		$this->load->view('backend/organisasi/organisasi',$x);
	}

	public function add_new() 
	{ 
		$x['title'] = "Add New organisasi";
		$this->load->view('backend/organisasi/add',$x);
	}

	public function edit($id)
	{ 
		$x['title'] = "Edit organisasi";
		$x['data'] = $this->db->where('delete_date =',null)->where('id',$id)->get('organisasi')->row();
		$this->load->view('backend/organisasi/edit',$x); 
		
	}

	function publish(){
		$config['upload_path'] = './assets/organisasi/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE; 

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/organisasi/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/organisasi/'.$img['file_name'];
	            $image	  = $img['file_name'];
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
				
				$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

				$data = array(
					"judul" => $title,
					"deskripsi" => $description,
					"foto" => $image,
					"create_date" => date('Y-m-d'), 
				);
				$this->organisasi_model->save_data($data);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/organisasi');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/organisasi');
	        }

	    }else{
			redirect('backend/organisasi');
		}
	}



	function update(){
		$config['upload_path'] = './assets/organisasi/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/organisasi/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/organisasi/'.$img['file_name'];
	       

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

				$this->organisasi_model->update($id,$data);

				echo $this->session->set_flashdata('msg','info');
				redirect('backend/organisasi');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/organisasi');
	        }

	    }else{
	    	$id 	  = $this->input->post('id',TRUE);
			$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
		
		
			$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

			$data = array(
				"judul" => $title,
				"deskripsi" => $description,
			);
 
			$this->organisasi_model->update($id,$data);

			echo $this->session->set_flashdata('msg','info');
			redirect('backend/organisasi');
		}

	}

	function delete(){ 
		$id = $this->input->post('id',TRUE);
		$this->organisasi_model->delete_data($id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('backend/organisasi');
	}

	//upload image summernote
	function upload_image(){
		if(isset($_FILES["file"]["name"])){
			 $config['upload_path'] = './assets/organisasi/';
			 $config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $this->upload->initialize($config);
			 if(!$this->upload->do_upload('file')){
					$this->upload->display_errors();
					return FALSE;
			 }else{
					$data = $this->upload->data();
		            //Compress Image
		            $config['image_library']='gd2';
		            $config['source_image']='./assets/organisasi/'.$data['file_name'];
		            $config['create_thumb']= FALSE;
		            $config['maintain_ratio']= TRUE;
		            $config['quality']= '60%';
		            $config['width']= 800;
		            $config['height']= 800;
		            $config['new_image']= './assets/organisasi/'.$data['file_name'];
		            $this->load->library('image_lib', $config);
		            $this->image_lib->resize();
					echo base_url().'assets/organisasi/'.$data['file_name'];
			 }
		}
	}




}