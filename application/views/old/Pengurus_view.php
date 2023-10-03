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
</head>
<body >
<div>
	<!-- Page loader -->
    <div id="preloader"></div>
    <!-- START HEADER -->
    <?php echo $header;?>

		<!-- hero area start -->
		<section class="theme2 hero-area ptb-80">
			<div class="container">
				<div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="hero-area-content">
                            <h1>Pengurus Organisasi</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                           
                        </div>
                    </div>
				</div>
			</div>
		</section><!-- hero area end -->
		<!-- all product area start -->
		<section class="all-product ptb-80">
			<div class="container">
				
				<div class="row">


			     	<?php foreach($post_komisioner->result() as $row):?>    
		

						<div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-product max-width-360">
							<div class="single-product-img">
								<div class="product-img">
									<img src="<?php echo base_url()?>assets/komisioner/<?php echo $row->post_image;?>" alt="">
									<div class="product-img-overlay">
										<a href="<?php echo base_url()?>pengurus/detail/<?php echo $row->post_slug;?>" class="krishok-btn">detail <i class=""></i></a>
									</div>
								</div>
							</div>
							<div class="product-details">
								<div class="product-info">
									<a href="product-details.html"><h4><?php echo $row->post_title;?></h4></a>
									<p><?php echo $row->post_jabatan;?></p>
                                    <!-- <span class="price">Price: <strong>$45</strong></span> -->
								</div>
								<div class="product-icon">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
								</div>
							</div>
						</div>
                    </div>
						<?php endforeach;?>


               
                  
				</div>
				<div class="row">
				    <div class="col-md-12">
				        <ul class="pagination">
				            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
				            <li><a href="#">1</a></li>
				            <li class="active"><a href="#">2</a></li>
				            <li><a href="#">3</a></li>
				            <li><a href="#">4</a></li>
				            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				        </ul>
				    </div>
				</div>
				<!-- <div class="row">
				    <div class="col-md-4">
				        <div class="product-tab">
				            <i class="fa fa-shopping-cart"></i>
				            <h4>Free Shipping</h4>
				        </div>
				    </div>
				    <div class="col-md-4">
				        <div class="product-tab product-tab-2">
				            <i class="fa fa-thermometer-quarter"></i>
				            <h4>Quality Product</h4>
				        </div>
				    </div>
				    <div class="col-md-4">
				        <div class="product-tab product-tab-3">
				            <i class="fa fa-thumbs-up"></i>
				            <h4>Money Back Guarantee</h4>
				        </div>
				    </div>
				</div> -->
			
			</div>
		</section><!-- all product area end -->
		<!-- get quote area start -->


	</div>
	
	

	


	
	
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
	
</body>
</html>