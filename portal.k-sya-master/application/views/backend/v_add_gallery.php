<?php $this->load->view('backend/layouts/headers');?>

                <div class="page-title">
                    <h3>Add New Gallery</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li class="active">Tambah Baru</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <form action="<?php echo base_url().'backend/gallery/publish'?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-8">
                            <div class="panel panel-white">

                                <div class="panel-body">

                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Title" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" name="slug" class="form-control" placeholder="Link image"  required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Keterangan</label>
                                            <textarea name="description" id="summernote"></textarea>
                                        </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-white">

                                <div class="panel-body">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="filefoto" class="dropify" data-height="190" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Album</label>
                                            <select class="form-control" name="category" required>
                                                <option value="">-Select Option-</option>
                                                <?php foreach ($category->result() as $row) : ?>
                                                    <option value="<?php echo $row->post_id;?>"><?php echo $row->post_title;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" style="width:100%"><span class="icon-cursor"></span> PUBLISH</button>
                                        </div>
                                </div>
                            </div>

                           

                        </div>

                        </form>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
<?php $this->load->view('backend/layouts/footers');?>

        <!-- Javascripts -->
        <!-- <script src="<?php echo base_url().'assets/plugins/jquery/jquery-2.1.4.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/pace-master/pace.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-blockui/jquery.blockui.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/switchery/switchery.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/uniform/jquery.uniform.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/classie.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/main.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/waves/waves.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/main.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-mockjax-master/jquery.mockjax.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/moment/moment.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/datatables/js/jquery.datatables.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/modern.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/dropify.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/summernote-master/summernote.min.js'?>"></script> -->
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