<?php $this->load->view('backend/layouts/headers'); ?>

                <div class="page-title">
                    <h3>Site Information</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li><a href="#">Site</a></li>
                            <li class="active">Settings</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <form class="form-horizontal" action="<?php echo base_url().'backend/settings/update'?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="panel panel-white">

                                <div class="panel-body">

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Site Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" id="input1" value="<?php echo $site_name;?>" placeholder="Site Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Site Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title" class="form-control" id="input1" value="<?php echo $site_title;?>" placeholder="Site Title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Site Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" class="form-control" rows="6"><?php echo $site_description;?></textarea>
                                            </div>
                                        </div>
                                       

                                        <!-- <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Logo Header</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="logo_header" class="form-control" id="input1">
                                                <p class="help-block">Logo harus beresolusi 123 x 25 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$site_logo_header;?>" class="thumbnail">
                                            </div>
                                        </div> -->

                                        <!-- <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Logo Footer</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="logo_footer" class="form-control" id="input1">
                                                <p class="help-block">Logo harus beresolusi 123 x 25 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$site_logo_footer;?>" class="thumbnail">
                                            </div>
                                        </div> -->

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Facebook URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="facebook" class="form-control" value="<?php echo $site_facebook;?>" id="input1" placeholder="Facebook URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Twitter URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="twitter" class="form-control" value="<?php echo $site_twitter;?>" id="input1" placeholder="Twitter URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Instagram URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="instagram" class="form-control" value="<?php echo $site_instagram;?>" id="input1" placeholder="Linkedin URL">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-10">
                                                <textarea name="address" class="form-control" rows="6"><?php echo $address;?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="phone" class="form-control" value="<?php echo $phone;?>" id="input1" placeholder="Phone">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Maps</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="maps" class="form-control" value="<?php echo $maps;?>" id="input1" placeholder="Maps">
                                            </div>
                                        </div>
                                      
                                        
                                        <div class="form-group">
                                            <input type="hidden" name="site_id" value="<?php echo $site_id?>" required>
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success">UPDATE</button>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>


                        </form>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <?php $this->load->view('backend/layouts/footers'); ?>

        
        <?php if($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Site Information Saved!",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php else:?>

        <?php endif;?>
