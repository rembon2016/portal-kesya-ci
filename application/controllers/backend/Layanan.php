<?php
class Layanan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->library('upload');
		$this->load->model('backend/Layanan_model','layanan_model');
		$this->load->helper('text');
	}

	function index(){
		$x['data']=$this->db->where('delete_date =',null)->get('layanan');
		$this->load->view('backend/layanan/layanan',$x);
	}

	public function add_new() 
	{ 
		$x['title'] = "Add New Layanan";
		$this->load->view('backend/layanan/add',$x);
	}

	public function edit($id)
	{ 
		$x['title'] = "Edit Layanan";
		$x['data'] = $this->db->where('delete_date =',null)->where('id',$id)->get('layanan')->row();
		$this->load->view('backend/layanan/edit',$x); 
		
	}

	function publish(){
		$config['upload_path'] = './assets/layanan/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE; 

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/layanan/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/layanan/'.$img['file_name'];
	            $image	  = $img['file_name'];
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
				
				$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

				$data = array(
					"judul" => $title,
					"deskripsi" => $description,
					"foto" => $image,
					"create_date" => date('Y-m-d'), 
				);
				$this->layanan_model->save_data($data);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/layanan');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/layanan');
	        }

	    }else{
			redirect('backend/layanan');
		}
	}



	function update(){
		$config['upload_path'] = './assets/layanan/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/layanan/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/layanan/'.$img['file_name'];
	       

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

				$this->layanan_model->update($id,$data);

				echo $this->session->set_flashdata('msg','info');
				redirect('backend/layanan');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/layanan');
	        }

	    }else{
	    	$id 	  = $this->input->post('id',TRUE);
			$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
		
		
			$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

			$data = array(
				"judul" => $title,
				"deskripsi" => $description,
			);
 
			$this->layanan_model->update($id,$data);

			echo $this->session->set_flashdata('msg','info');
			redirect('backend/layanan');
		}

	}

	function delete(){ 
		$id = $this->input->post('id',TRUE);
		$this->layanan_model->delete_data($id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('backend/layanan');
	}

	//upload image summernote
	function upload_image(){
		if(isset($_FILES["file"]["name"])){
			 $config['upload_path'] = './assets/layanan/';
			 $config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $this->upload->initialize($config);
			 if(!$this->upload->do_upload('file')){
					$this->upload->display_errors();
					return FALSE;
			 }else{
					$data = $this->upload->data();
		            //Compress Image
		            $config['image_library']='gd2';
		            $config['source_image']='./assets/layanan/'.$data['file_name'];
		            $config['create_thumb']= FALSE;
		            $config['maintain_ratio']= TRUE;
		            $config['quality']= '60%';
		            $config['width']= 800;
		            $config['height']= 800;
		            $config['new_image']= './assets/layanan/'.$data['file_name'];
		            $this->load->library('image_lib', $config);
		            $this->image_lib->resize();
					echo base_url().'assets/layanan/'.$data['file_name'];
			 }
		}
	}




}