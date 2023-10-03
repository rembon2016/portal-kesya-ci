<?php 
    error_reporting(0);
    $b = $data->row_array();
?>
<?php $this->load->view('backend/layouts/headers');?>

                <div class="page-title">
                    <h3>Edit Gallery</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li class="active">Edit</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <form action="<?php echo base_url().'backend/gallery/edit'?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-8">
                            <div class="panel panel-white">
                               
                                <div class="panel-body">
 

                                <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" value="<?php echo $b['post_title'];?>" placeholder="Title" required>
                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="text" name="slug" class="form-control" value="<?php echo $b['post_slug'];?>" placeholder="Permalink" style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;">
                                        </div> -->
                                        <div class="form-group">
                                            <label class="control-label">Deskripsi</label>
                                            <textarea name="description" id="summernote"><?php echo $b['post_deskripsi'];?></textarea>
                                        </div>
                                        
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-white">
                                
                                <div class="panel-body">
                                 
                                      
                                       
                                     
                                
                                       
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="filefoto" class="dropify" data-height="190" data-default-file="<?php echo base_url().'assets/gallery/'.$b['post_image'];?>">
                                        </div>
 
                                        <div class="form-group">
                                            <label>Album</label>
                                            <select class="form-control" name="category" required>
                                                <option value="">-Select Option-</option>
                                                <?php foreach ($category->result() as $row) :
                                                    $selected = $row->post_id == $b['post_category_id'] ? 'selected' : ''; ?>
                                                    <option value="<?php echo $row->post_id;?>" <?php echo $selected; ?>><?php echo $row->post_title;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>

                               
                                      


                                        <div class="form-group">
                                            <input type="hidden" name="post_id" value="<?php echo $b['post_id'];?>" required>
                                            <button type="submit" class="btn btn-primary btn-lg" style="width:100%"><span class="icon-cursor"></span> UPDATE</button>
                                        </div>
                                </div>
                            </div>

                      

                        </div>

                        </form>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
           
        <?php $this->load->view('backend/layouts/footers');?>

        <script>
            $(document).ready(function(){
                $('#summernote').summernote({
                  height: 590,
                  toolbar: [    
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],       
                        ['insert', ['link', 'picture', 'hr']],
                        ['view', ["fullscreen", "codeview", "help"]],
                      ],

                    onImageUpload: function(files, editor, welEditable) {
                        sendFile(files[0], editor, welEditable);
                    } 

                });

                function sendFile(file, editor, welEditable) {
                    data = new FormData();
                    data.append("file", file);
                    $.ajax({
                        data: data,
                        type: "POST",
                        url: "<?php echo site_url()?>backend/post/upload_image",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(url) {
                            editor.insertImage(welEditable, url);
                        }
                    });
                }

                $('.dropify').dropify({
                    messages: {
                        default: 'Drag atau drop untuk memilih gambar',
                        replace: 'Ganti',
                        remove:  'Hapus',
                        error:   'error'
                    }
                });

            });
        </script>
        