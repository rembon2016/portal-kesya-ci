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




				<!-- hero area start -->
		<section class="theme2 theme4 hero-area ptb-110">
			<div class="container">
				<div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="hero-area-content">
                            <h1 class="text-uppercase">Member</h1>
                            <p>Daftar Anggota KKT-PTI Seluruh Indonesia</p>
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
					<div class="v-title">Member KKT-PTI</div>
				</div>
			</div>
			<div class="row">
			  <div class="col-xs-12">
				<table summary="Data tables" class="table table-bordered table-hover dt-responsive">
				  
				  <thead>
					<tr>
					  <th>Provinsi</th>
					  <th>Kab Kota</th>
					  <th>Kecamatan</th>
					  <th>Kel/ Desa</th>
					  <th>Unit</th>
					  <th>Ketua</th>
					  <th>Jumlah Anggota</th>
					</tr>
				  </thead>
				  <tbody>
					
					<?php foreach($data->result() as $row):?>

					<tr>
					  <td><?php echo $row->Provinsi;?></td>
					  <td><?php echo $row->Kabkota;?></td>
					  <td><?php echo $row->Kec;?></td>
					  <td><?php echo $row->Desa;?></td>
					  <td><?php echo $row->NamaUnit;?></td>
					  <td><?php echo $row->Ketua;?></td>
					  <td><?php echo $row->jumlah_anggota;?></td>
					</tr>

					<?php endforeach;?>
				  </tbody>
				  <tfoot>
					
				  </tfoot>
				</table>
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
		</script>
	
</body>
	
</body>
</html>