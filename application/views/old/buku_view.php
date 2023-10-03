<!DOCTYPE html>
	<!-- <html lang="en"> -->
<html data-style-switcher-options="{'colorPrimary': '#0088cc', 'colorSecondary': '#0169fe', 'colorTertiary': '#005AEF', 'colorQuaternary': '#383f48'}">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $site_title;?></title>
    <meta name="keywords" content="Kompolnas" />
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
    <!-- <meta name="twitter:image" content="<?php echo base_url().'theme/images/logo.png'?>" /> -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800&amp;display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/vendor/magnific-popup/magnific-popup.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>theme/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/css/theme-elements.css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/css/theme-blog.css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/css/theme-shop.css">
    <link rel="stylesheet" href="<?php echo base_url()?>theme/css/demos/demo-landing.css">
    <link id="skinCSS" rel="stylesheet" href="<?php echo base_url()?>theme/css/skins/skin-landing.css">

    <link rel="stylesheet" href="<?php echo base_url()?>theme/css/custom.css">

    <script src="<?php echo base_url()?>theme/vendor/modernizr/modernizr.min.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SEP1T05Z5V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SEP1T05Z5V');
    </script>
</head>
<body data-plugin-page-transition>
	<div class="body">
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
			<div class="container py-2">
				<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center"
					data-sort-id="portfolio" data-option-key="filter"
					data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
					<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active"
							href="#">Show All</a></li>
					<li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase"
							href="#">Websites</a></li>
					<li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase"
							href="#">Logos</a></li>
					<li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase"
							href="#">Brands</a></li>
					<li class="nav-item" data-option-value=".medias"><a class="nav-link text-1 text-uppercase"
							href="#">Medias</a></li>
				</ul>
				<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
					<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
						<div class="col-md-6 col-lg-4 isotope-item brands">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Presentation</span>
												<span class="thumb-info-type">Brand</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item medias">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<span class="owl-carousel owl-theme dots-inside m-0"
												data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}"><span><img
														src="<?php echo base_url();?>theme/img/projects/project-1.jpg"
														class="img-fluid border-radius-0" alt=""></span><span><img
														src="<?php echo base_url();?>theme/img/projects/project-1-2.jpg"
														class="img-fluid border-radius-0" alt=""></span></span>
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Porto Watch</span>
												<span class="thumb-info-type">Media</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item logos">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project-2.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Identity</span>
												<span class="thumb-info-type">Logo</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item websites">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project-27.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Porto Screens</span>
												<span class="thumb-info-type">Website</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item logos">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project-4.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Three Bottles</span>
												<span class="thumb-info-type">Logo</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item brands">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project-5.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Company T-Shirt</span>
												<span class="thumb-info-type">Brand</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item websites">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project-6.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Mobile Mockup</span>
												<span class="thumb-info-type">Website</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item medias">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project-7.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Porto Label</span>
												<span class="thumb-info-type">Media</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item logos">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project-23.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Business Folders</span>
												<span class="thumb-info-type">Logo</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item websites">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project-24.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Tablet Screen</span>
												<span class="thumb-info-type">Website</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item medias">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project-25.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Black Watch</span>
												<span class="thumb-info-type">Media</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item websites">
							<div class="portfolio-item">
								<a href="portfolio-single-wide-slider.html">
									<span class="thumb-info thumb-info-lighten border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="<?php echo base_url();?>theme/img/projects/project-26.jpg" class="img-fluid border-radius-0"
												alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Monitor Mockup</span>
												<span class="thumb-info-type">Website</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i
														class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	
	

	


	
	
	<?php echo $footer;?>
	
	<!-- SCIPTS -->
	<script src="<?php echo base_url()?>theme/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/popper/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/lazysizes/lazysizes.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/vide/jquery.vide.min.js"></script>
    <script src="<?php echo base_url()?>theme/vendor/vivus/vivus.min.js"></script>
    <script src="<?php echo base_url()?>theme/js/theme.js"></script>

    <script src="<?php echo base_url()?>theme/js/theme.init.js"></script>
	
</body>
</html>