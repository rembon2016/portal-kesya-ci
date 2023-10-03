<!DOCTYPE html>
	<!-- <html lang="en"> -->
<html data-style-switcher-options="{'colorPrimary': '#0088cc', 'colorSecondary': '#0169fe', 'colorTertiary': '#005AEF', 'colorQuaternary': '#383f48'}">


<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $site_title;?></title>
    <meta name="keywords" content="KKT-PTI" />
    <meta name="description" content="<?php echo $site_desc;?>"/>
    <meta name="author" content="Aang Wiadi">
	

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
	<link rel="canonical" href="<?php echo site_url();?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $site_title;?>" />
    <meta property="og:description" content="<?php echo $site_desc;?>" />
    <meta property="og:url" content="<?php echo site_url();?>" />
    <meta property="og:site_name" content="<?php echo $site_name;?>" />
    <meta property="og:image" content="<?php echo base_url().'theme/images/logo.png'?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url().'theme/images/logo.png'?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $site_desc;?>" />
    <meta name="twitter:title" content="<?php echo $site_title;?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter;?>" />
   		<!-- Font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/vendor/css/font-awesome.min.css" media="all" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/vendor/css/bootstrap.min.css" media="all" />
		<!-- slicknav CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/css/slicknav.min.css">
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/css/owl.carousel.min.css">
		<!-- Lightbox CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/css/lightbox.min.css"/>
		<!-- Bx slider CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/css/jquery.bxslider.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/css/animate.min.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/vendor/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>theme/vendor/css/responsive.css" media="all" />
		<!-- Datatables CSS -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" media="all" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.js"></script>

		<style>
			.v-title {
				margin-bottom: 60px;
				font-size: 32px;
				font-weight: 700;
				margin-top: 50px;
			}
		</style>
</head>
<body>
		<!-- Page loader -->
	    <div id="preloader"></div>
		<?php echo $header;?>

        <?= $this->session->flashdata('message');?>



				<!-- hero area start -->
		<section class="theme2 theme4 hero-area ptb-110">
			<div class="container">
				<div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="hero-area-content">
                            <h1 class="text-uppercase">Member</h1>
                            <p>Selamat datang  <?= $this->session->userdata('username'); ?> </p>
                            <!-- <a href="products.html" class="krishok-btn">Shop Now</a> -->
                        </div>
                    </div>
				</div>
			</div>
		</section><!-- hero area end -->
		<!-- product gallery area start -->
		<div class="container">
			<div class="row">
				<div class="col-12"> 
					<div class="v-title">Profil</div>

                    <div class="container rounded bg-white mb-5"> 
                        <form action="<?= site_url('member/update_profil') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-3 border-right"> 
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                                <?php
                                    if($user->user_photo != ""){ ?>
                                    <img class="rounded-circle mt-5" src="<?= base_url('assets/images/user/'.$user->user_photo)?>" style="width:150px; height:140px;">      

                                <?php
                                    }else{?>
                                    <img class="rounded-circle mt-5" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" style="width:150px; height:140px;">      

                                 <?php   }
                                ?>

                                    <span class="font-weight-bold"><?= $this->session->userdata('username'); ?></span>
                                    <span class="text-black-50"><?= $this->session->userdata('email'); ?></span>
                                
                                    <input type="file" name="images"/>
                                    <input type="hidden" name="image2" value="<?= $user->user_photo ?>"  />


                                </div>
                            </div>
                           
                            <div class="col-md-5">
                                <div class="p-3 py-5">
                                    <!-- <div class="d-flex justify-content-between align-items-center experience"><span>Ubah Alamat</span></div><br> -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            
                                            <label class="labels">Provinsi</label>
                                            <select name="provinsi_id" id="provinsi_id" required  class="form-control">
                                                <option value="">-- Pilih Provinsi -- </option>
                                                <?php
                                                    foreach($provinsi as $prov){
                                                        if($prov->id == $user->Provinsi){
                                                            $sel = "selected";
                                                        }else{
                                                            $sel = "";
                                                        }
                                                ?>
                                                    <option value="<?= $prov->id ?>" <?= $sel ?>><?= $prov->provinsi ?></option>
                                                <?php 
                                                    }
                                                ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                                <label class="labels">Kabupaten/Kota</label>
                                                <select name="kabupaten_id" id="kabupaten_id" class="form-control">
                                                    <option value="">Kabupaten Kota</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label class="labels">Kecamatan</label>
                                                <select name="kecamatan_id" id="kecamatan_id" class="form-control">
                                                    <option value="">Kecamatan</option>
                                                </select>
                                        </div>
                                        <div class="form-group"> 
                                                <label class="labels">Desa</label>
                                                <select name="desa_id" id="desa_id" class="form-control">
                                                    <option value="">Desa</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label class="labels">Ketua</label>
                                                <input type="text" name="ketua" class="form-control" placeholder="Ketua" value="<?= $user->Ketua; ?>">
                                        </div>
                                        <div class="form-group">
                                                <label class="labels">Jumlah Anggota</label>
                                                <input type="text" name="jumlah_anggota" class="form-control" placeholder="Jumlah Anggota" value="<?= $user->jumlah_anggota; ?>">
                                        </div> 
                                        <div class="form-group">
                                                <label class="labels">Nama Unit</label>
                                                <input type="text" name="NamaUnit" class="form-control" placeholder="Nama unit" value="<?= $user->NamaUnit; ?>">
                                        </div>
                                  
                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-4 border-right">
                                <div class="p-3 py-5">
                                    <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Pengaturan Profil</h4>
                                    </div> -->
                                    <div class="row mt-2">
                                        <div class="col-md-12"><label class="labels">Name</label>
                                        <input type="text" name="username" class="form-control" placeholder="first name" value="<?= $user->user_name; ?>"></div>
                                    </div>
                                    <div class="row mt-3"> 
                                        <div class="col-md-12">
                                            <label class="labels">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="enter email id" value="<?= $user->user_email; ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Password</label>  
                                            <input type="password" class="form-control" name="password" placeholder="Password" value="">
                                            <input type="hidden" name="old_password" value="<?= $user->user_password; ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Ulangi Password</label>
                                            <input type="password" class="form-control" name="ulangi_password" placeholder="Ulangi Password" value="">
                                        </div>
                                       
                                    </div>
                                   
                                    <div class="mt-5 text-center">
                                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                                    </div>
                                </div>
                            </div>
                          

                        </div>

                        </form>
                    </div>
                    </div>
                    </div>



				</div>
			</div>
			
		  </div>
		<!-- footer area start -->
	
	
	<?php echo $footer;?>
	
	<!-- SCIPTS -->
	<script src="<?php echo base_url()?>theme/vendor/js/jquery.min.js"></script>
		<!-- Poppers JS -->
		<script src="<?php echo base_url()?>theme/vendor/js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url()?>theme/vendor/js/bootstrap.min.js"></script>
		<!-- slicknav JS -->
		<script src="<?php echo base_url()?>theme/vendor/js/jquery.slicknav.min.js"></script>
		<!-- owl carousel JS -->
		<script src="<?php echo base_url()?>theme/vendor/js/owl.carousel.min.js"></script>
		<!-- Isotope JS -->
		<script src="<?php echo base_url()?>theme/vendor/js/isotope-3.0.4.min.js"></script>
		<!-- Bx slider JS -->
		<script src="<?php echo base_url()?>theme/vendor/js/jquery.bxslider.min.js"></script>
		<!-- lightbox JS -->
		<script src="<?php echo base_url()?>theme/vendor/js/lightbox.min.js"></script>
		<!-- Wow JS -->
		<script src="<?php echo base_url()?>theme/vendor/js/wow-1.3.0.min.js"></script>
        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXNQbOV3ZGoxAQ_H2FtRAS_i9yOdZFfBo&region=GB"></script>
		<!-- Imagezoom JS -->
		<script src="<?php echo base_url()?>theme/vendor/js/jquery.imagezoom.js"></script>
		<!-- main JS -->
		<script src="<?php echo base_url()?>theme/vendor/js/main.js"></script>
		<!-- Datatables JS -->
		<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

		<script>
			$('table').DataTable();

 
            $('#provinsi_id').change(function(){
                var provinsi_id = $(this).val(); 
                $.ajax({
                    url:"<?= site_url('register/getKabkota') ?>/"+provinsi_id,
                    type:"get",
                    dataType:"json",
                    success:function(data){ 
                        var kab = '<option value="">Kabupaten/Kota</option>';
                        $.each(data, function( key, value ) { 
                            kab += '<option value="'+value.id+'">'+value.kabupaten_kota+'</option>';
                        });
                        $('#kabupaten_id').html(kab);
                        $('#kecamatan_id').html('<option value="">Kecamatan</option>');
                        $('#desa_id').html('<option value="">Desa</option>');
                    },
                }); 
            });

            $('#kabupaten_id').change(function(){
                var kabupaten_id = $(this).val();
                $.ajax({
                    url:"<?= site_url('register/getKecamatan') ?>/"+kabupaten_id,
                    type:"get",
                    dataType:"json",
                    success:function(data){ 
                        var kec = '<option value="">Kecamatan</option>';
                        $.each(data, function( key, value ) { 
                            kec += '<option value="'+value.id+'">'+value.kecamatan+'</option>';
                        });
                        $('#kecamatan_id').html(kec);
                    },
                });
            });
            $('#kecamatan_id').change(function(){
                var kec_id = $(this).val();
                $.ajax({
                    url:"<?= site_url('register/getDesa') ?>/"+kec_id, 
                    type:"get",
                    dataType:"json",
                    success:function(data){ 
                        var des = '<option value="">Desa</option>';
                        $.each(data, function( key, value ) { 
                            des += '<option value="'+value.id+'">'+value.kelurahan+'</option>';
                        });
                        $('#desa_id').html(des);
                    },
                });
            });



            var provinsi_id =  $("#provinsi_id option:selected" ).val();                                     
            $.ajax({
				url:"<?= site_url('register/getKabkota') ?>/"+provinsi_id,
				type:"get",
				dataType:"json",
				success:function(data){ 
					var kab = '<option value="">Kabupaten/Kota</option>';
					$.each(data, function( key, value ) { 
                        if( value.id == "<?= $user->Kabkota?>"){
                            var sel = "selected";
                        }else{
                            var sel = "";
                        }
						 kab += '<option value="'+value.id+'" '+sel+'>'+value.kabupaten_kota+'</option>';
					});
					$('#kabupaten_id').html(kab);

                        var kabupaten_id = $("#kabupaten_id option:selected" ).val();
                        $.ajax({
                            url:"<?= site_url('register/getKecamatan') ?>/"+kabupaten_id,
                            type:"get",
                            dataType:"json",
                            success:function(data){ 
                                var kec = '<option value="">Kecamatan</option>';
                                $.each(data, function( key, value ) { 
                                    if( value.id == "<?= $user->Kec?>"){
                                        var sel = "selected";
                                    }else{
                                        var sel = "";
                                    }
                                    kec += '<option value="'+value.id+'" '+sel+'>'+value.kecamatan+'</option>';
                                });
                                $('#kecamatan_id').html(kec);

                                var kec_id = $("#kecamatan_id option:selected" ).val();
                                    $.ajax({
                                        url:"<?= site_url('register/getDesa') ?>/"+kec_id, 
                                        type:"get",
                                        dataType:"json",
                                        success:function(data){ 
                                            var des = '<option value="">Desa</option>';
                                            $.each(data, function( key, value ) { 
                                                if( value.id == "<?= $user->Desa?>"){
                                                        var sel = "selected";
                                                    }else{
                                                        var sel = "";
                                                    }
                                                des += '<option value="'+value.id+'" '+sel+'>'+value.kelurahan+'</option>';
                                            });
                                            $('#desa_id').html(des);
                                        },
                                    });
                                    
                            },
                        });
				}, 
			}); 





            

		</script>
	

</body>
	
</body>
</html>