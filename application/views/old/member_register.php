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
		

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.js"></script>

</head>
<body>
		<!-- Page loader -->
	    <div id="preloader"></div>
		<?php echo $header;?>
	
		<!-- contact area start -->
		<section class="ptb-80" id="email-us">
			<div class="container">

	

				<div class="row">
				    <div class="col-lg-6">
				        <div class="contact-form">
                            <h4>Pendaftaran Akun Member <?= $this->session->flashdata('message'); ?></h4>
				            <form class="contact-form" action="<?php echo base_url()?>register/signup" method="POST" >

							<div class="form-group">
								<label for="">Provinsi</label>
								<select name="provinsi_id" id="provinsi_id" required>
                                    <option value="">-- Pilih Provinsi --</option>
									<?php
										foreach($provinsi as $prov){
									?>
                                    	<option value="<?= $prov->id ?>"><?= $prov->provinsi ?></option>
									<?php 
										}
									?>
                                </select>
							</div>
							<div class="form-group">
								<label for="">Kabupaten/Kota</label>
                                <select name="kabupaten_id" id="kabupaten_id" required>
                                    <option value="">-- Pilih Kabupaten/Kota --</option>
                                </select>
							</div>
							<div class="form-group">
								<label for="">Kecamatan</label>
                                <select name="kecamatan_id" id="kecamatan_id" required>
                                    <option value="">-- Pilih Kecamatan --</option>
                                </select> 
							</div>
							<div class="form-group">
								<label for="">Desa</label>
                                <select name="desa_id" id="desa_id" required>  
                                    <option value="">-- Pilih Desa --</option>
                                </select>
							</div>
							<div class="form-group">
								<label for="">Nama Ketua</label>
				                <input type="text" name="ketua" placeholder="Nama Ketua">
							</div>
							<div class="form-group">
								<label for="">Jumlah Anggota</label>
				                <input type="text" placeholder="Jumlah Anggota" name="jumlah_anggota"> 
									</div>
								<div class="form-group">
								<label for="">Nama Unit</label>
								<input type="text" placeholder="Nama Unit" name="nama_unit" required="">  
								</div>
							
				                
				        </div>
				    </div>
				    <div class="col-lg-6 mt-4">
					<div class="contact-form ">
					<h4></h4>
							<div class="form-group">
								<label for="">Nama </label>
								<input type="text" name="user_name" placeholder="Nama">
									</div>
								<div class="form-group">
								<label for="">Email</label>
								<input type="text" name="user_email" placeholder="Email">
									</div>
								<div class="form-group">
								<label for="">Password</label>
								<input type="password" placeholder="Password" name="password" required=""> 
									</div>
								<div class="form-group">
								<label for="">Ulangi Password</label> 
								<input type="password" placeholder="Ulangi Password" name="password2" required="">  

								
				                <button  type="submit" value="Kirim Pesan" class="btn btn-primary btn-modern" data-loading-text="Loading...">Register</button>
				            </form>
				        <!-- <div class="contact-form">
                            <h4>Office Address</h4>
				            <div class="contact-area">
				                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text psum has been standard dummy text ever</p>
				                <p>We are open from 9am — 5pm week days.</p>
				                <p>652 Main Road, Apt 12 <br> New York, USA 10033</p>
				                <p>Email: example@mail.com <br> Phone: 0123 4567 8913</p>
				            </div>
				        </div> -->
				    </div>
				    </div>
				</div>
			</div>
		</section><!-- contact gallery area end -->
		<!-- contact map area start -->
		<section>
			<div class="container">
				<div class="row map-area">
                    <div class="col-lg-12">
                        <div class="sec-title pt-75">
                            <h3>Find us on maps</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
				</div>
			</div>
        	<div class="google-map"></div>
		</section><!-- contact map area end -->
		<!-- footer area start -->
	
	<?php echo $footer;?>

	<script>
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
	</script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


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

		<script src='https://www.google.com/recaptcha/api.js'></script>
	
</body>
</html>