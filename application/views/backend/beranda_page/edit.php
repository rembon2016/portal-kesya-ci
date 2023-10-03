<?php $this->load->view('backend/layouts/headers');?>
            <div class="page-title">
                    <h3><?= $title ?></h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li><a href="#">Beranda Page</a></li>
                            <li class="active">Update</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row"> 
                        <form action="<?php echo base_url().'backend/beranda_page/update'?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-8">
                            <div class="panel panel-white">
                               
                                <div class="panel-body">
                                         <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" value="<?= $data->judul; ?>" placeholder="Title" required>
                                        </div>
                                        <?php if($data->id == 1){ ?>
                                         <div class="form-group">
                                            <label>Link Video</label>
                                            <input type="text" name="video" class="form-control" value="<?= $data->video; ?>" placeholder="Video" required>
                                        </div>
                                        <?php } ?>
                                       <?php if($data->id != 1 and $data->id != 9 and $data->id != 10 ){ ?>

                                        <div class="form-group">
                                            <label class="control-label">Deskripsi</label>
                                            <textarea name="description" id="summernote"><?= $data->deskripsi; ?></textarea>
                                        </div>

                                       <?php } ?>
                                       

                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-white">
                                  
                                <div class="panel-body">
                                     <?php if($data->id != 1 and $data->id != 3 and $data->id != 4 and $data->id != 5 and $data->id != 6 and $data->id != 11 and $data->id != 12 and $data->id != 13 ){ ?>
                                        <div class="form-group"> 
                                            <input type="file" name="filefoto" class="dropify" data-height="190" data-default-file="<?php echo base_url().'assets/beranda_page/'.$data->foto;?>">
                                        </div>
                                        <?php } ?>
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?= $data->id ?>" required>
                                            <button type="submit" class="btn btn-primary btn-lg" style="width:100%"><span class="icon-cursor"></span> UPDATE</button>
                                        </div>
                                </div>
                            </div>

                      

                        </div>

                        </form>
                    </div>
            </div>
         
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