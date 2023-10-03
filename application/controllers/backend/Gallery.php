<?php
class Gallery extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };

		$this->load->model('backend/Album_model','album_model');
		$this->load->model('backend/Gallery_model','gallery_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->gallery_model->get_all_post();
		$this->load->view('backend/v_gallery',$x);
	}
 
	function add_new(){
		$x['category'] = $this->album_model->get_all_post();
		$this->load->view('backend/v_add_gallery',$x);
	}

	function get_edit($post_id ){
		//$post_id = $this->uri->segment(3);
		
		$x['category'] = $this->album_model->get_all_post();
		$x['data'] = $this->gallery_model->get_post_by_id($post_id);
		$this->load->view('backend/v_edit_gallery',$x);
	}

	function publish(){
		$config['upload_path'] = './assets/gallery/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/gallery/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/gallery/'.$img['file_name'];
	     

	            $image=$img['file_name'];
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
			
				$category = $this->input->post('category',TRUE);

				$preslug  = strip_tags(htmlspecialchars($this->input->post('slug',TRUE),ENT_QUOTES));
				$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
				$trim     = trim($string);
				$praslug  = strtolower(str_replace(" ", "-", $trim));
				$query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
				if($query->num_rows() > 0){
					$uniqe_string = rand();
					$slug = $praslug.'-'.$uniqe_string;
				}else{
					$slug = $praslug; 
				}
				$description=htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

				$this->gallery_model->save_post($title,$description,$image,$category,$slug);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/gallery');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/gallery');
	        }

	    }else{
			redirect('backend/gallery');
		}
	}

	function edit(){
		$config['upload_path'] = './assets/gallery/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/gallery/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 500;
	            $config['height']= 320;
	            $config['new_image']= './assets/gallery/'.$img['file_name'];
	            // $this->load->library('image_lib', $config);
	            // $this->image_lib->resize();

	            // $this->_create_thumbs($img['file_name']);

	            $image=$img['file_name'];
	            $id 	  = $this->input->post('post_id',TRUE);
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
				// $contents = $this->input->post('contents');
				$category = $this->input->post('category',TRUE);

				$preslug  = strip_tags(htmlspecialchars($this->input->post('slug',TRUE),ENT_QUOTES));
				$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
				$trim     = trim($string);
				$praslug  = strtolower(str_replace(" ", "-", $trim));

				$query = $this->db->get_where('tbl_gallery', array('post_slug' => $praslug));
				if($query->num_rows() > 1){
					$uniqe_string = rand();
					$slug = $praslug.'-'.$uniqe_string;
				}else{
					$slug = $praslug;
				}

			

				$description=htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

				$this->gallery_model->edit_post_with_img($id,$title,$description,$image,$category,$slug);
				echo $this->session->set_flashdata('msg','info');
				redirect('backend/gallery');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/gallery');
	        }

	    }else{
	    	$id 	  = $this->input->post('post_id',TRUE);
			$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
		
			$category = $this->input->post('category',TRUE);

			$preslug  = strip_tags(htmlspecialchars($this->input->post('slug',TRUE),ENT_QUOTES));
			$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
			$trim     = trim($string);
			$praslug  = strtolower(str_replace(" ", "-", $trim));

			$query = $this->db->get_where('tbl_gallery', array('post_slug' => $praslug));
			if($query->num_rows() > 1){
				$uniqe_string = rand();
				$slug = $praslug.'-'.$uniqe_string;
			}else{
				$slug = $praslug;
			}

			$xtags[]=$this->input->post('tag');
			foreach($xtags as $tag){
				$tags = @implode(",", $tag);
			}

			$description=htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);

			$this->gallery_model->edit_post_no_img($id,$title,$description,$category,$slug);
			echo $this->session->set_flashdata('msg','info');
			redirect('backend/gallery');
		}

	}

	function delete(){
		$post_id = $this->input->post('id',TRUE);
		$this->gallery_model->delete_post($post_id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('backend/gallery');
	}

	//upload image summernote
	function upload_image(){
		if(isset($_FILES["file"]["name"])){
			 $config['upload_path'] = './assets/gallery/';
			 $config['allowed_types'] = 'jpg|jpeg|png|gif';
			 $this->upload->initialize($config);
			 if(!$this->upload->do_upload('file')){
					$this->upload->display_errors();
					return FALSE;
			 }else{
					$data = $this->upload->data();
		            //Compress Image
		            $config['image_library']='gd2';
		            $config['source_image']='./assets/gallery/'.$data['file_name'];
		            $config['create_thumb']= FALSE;
		            $config['maintain_ratio']= TRUE;
		            $config['quality']= '60%';
		            $config['width']= 800;
		            $config['height']= 800;
		            $config['new_image']= './assets/gallery/'.$data['file_name'];
		            $this->load->library('image_lib', $config);
		            $this->image_lib->resize();
					echo base_url().'assets/gallery/'.$data['file_name'];
			 }
		}
	}


	function _create_thumbs($file_name){
        // Image resizing config
        $config = array(
            array(
                'image_library' => 'GD2',
                'source_image'  => './assets/images/'.$file_name,
                'maintain_ratio'=> FALSE,
                'width'         => 370,
                'height'        => 237,
                'new_image'     => './assets/images/thumb/'.$file_name
                ));

        $this->load->library('image_lib', $config[0]);
        foreach ($config as $item){
            $this->image_lib->initialize($item);
            if(!$this->image_lib->resize()){
                return false;
            }
            $this->image_lib->clear();
        }
    }


}
