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

		<div role="main" class="main">
		<section class="page-header page-header-modern bg-color-dark-scale-1 page-header-md">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<!-- <h1 class="text-dark font-weight-bold text-8">Post Full Width</h1><span class="sub-title text-dark">Check out our Latest News!</span> -->
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb d-block text-center">
									<!-- <li><a href="#">Home</a></li>
									<li class="active">Berita</li> -->
								</ul>
							</div>
						</div>
					</div>
			</section>
			<section class="ptb-0">
				<div class="brdr-ash-1 opacty-5"></div>
			</section>
			<div class="container pt-5 pb-2">
				<div class="overflow-hidden">
					<h2 class="text-color-dark font-weight-normal text-6 mb-0 appear-animation"
						data-appear-animation="maskUp"><strong class="font-weight-extra-bold">Projects</strong></h2>
				</div>
				<div class="overflow-hidden mb-3">
					<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
				</div>
				<div class="row">
					<div class="col">
						<div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter"
							data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
							<div class="owl-carousel owl-theme pb-3"
								data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
												<span class="thumb-info-type">Brand</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-1.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto
													Watch</span>
												<span class="thumb-info-type">Media</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-1.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-2.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Identity</span>
												<span class="thumb-info-type">Logo</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-2.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-27.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto
													Screens</span>
												<span class="thumb-info-type">Website</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-27.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-4.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Three
													Bottles</span>
												<span class="thumb-info-type">Logo</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-4.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-5.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Company
													T-Shirt</span>
												<span class="thumb-info-type">Brand</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-5.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-6.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Mobile
													Mockup</span>
												<span class="thumb-info-type">Website</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-6.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-7.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto
													Label</span>
												<span class="thumb-info-type">Media</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-7.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-23.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Business
													Folders</span>
												<span class="thumb-info-type">Logo</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-23.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-24.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Tablet
													Screen</span>
												<span class="thumb-info-type">Website</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-24.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-25.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Black
													Watch</span>
												<span class="thumb-info-type">Media</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-25.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
								<div class="portfolio-item">
									<span
										class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="img/projects/project-26.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span
													class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Monitor
													Mockup</span>
												<span class="thumb-info-type">Website</span>
											</span>
											<span class="thumb-info-action">
												<a href="portfolio-single-wide-slider.html">
													<span
														class="thumb-info-action-icon thumb-info-action-icon-primary"><i
															class="fas fa-link"></i></span>
												</a>
												<a href="img/projects/project-26.jpg" class="lightbox-portfolio">
													<span class="thumb-info-action-icon thumb-info-action-icon-light"><i
															class="fas fa-search text-dark"></i></span>
												</a>
											</span>
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


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