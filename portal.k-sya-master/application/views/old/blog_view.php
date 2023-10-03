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
                            <h1 class="text-uppercase">News </h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            
                        </div>
                    </div>
				</div>
			</div>
		</section><!-- hero area end -->

			<!-- blog area start -->
			<section class="blog-area ptb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-12">
                        <div class="row">
                            <div class="col-lg-12">
                               

								<?php foreach ($data->result() as $row):?>
									<div class="single-post">
                                    <div class="flexbox-center">
                                        <div class="post-thumbnail">
                                            <a href="<?php echo site_url('blog/'.$row->post_slug);?>"><img src="<?php echo base_url().'assets/images/thumb/'.$row->post_image;?>" alt="<?php echo $row->post_title;?>" class="img-responsive"></a>
                                        </div>
                                         <div class="post-details">
                                             <h5>
                                                 <a href="<?php echo site_url('blog/'.$row->post_slug);?>"><?php echo $row->post_title;?></a>
                                             </h5>
                                             <div class="post-author">
                                                 <p><a href="#"><?php echo $row->user_name;?></a>  |  22 January, 2017</p>
                                             </div>
                                             <p><?php echo substr($row->post_description,0,120);?></p>
                                             <a href="<?php echo site_url('blog/'.$row->post_slug);?>" class="read-more">Read more <i class="fa fa-angle-right"></i></a>
                                             <div class="post-meta">
                                                 <ul>
                                                    <li><a href="#"><i class="fa fa-heart"></i><?php echo $row->post_views;?></a></li>
                                                    <li><a href="#"><i class="fa fa-comment"></i><?php echo $row->post_views;?></a></li>
                                                    <li><a href="#"><i class="fa fa-share-alt"></i><?php echo $row->post_views;?></a></li>
                                                </ul>
                                             </div>
                                         </div>
                                    </div>
                                </div>

							<?php endforeach;?>

                            </div>
						</div>
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
					</div>
					<div class="col-lg-3 offset-lg-0 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
					    <div class="widget">
					        <h4 class="widget-title">Latest Content</h4>
					        <ul>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					        </ul>
					    </div>
					    <div class="widget">
					        <h4 class="widget-title">Featured Post</h4>
					        <ul>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					        </ul>
					    </div>
					</div>
				</div>
			</div>
		</section><!-- blog area end -->
		<!-- get quote area start -->
		<!-- product gallery area start -->
		<div class="product-gallery ptb-80">
			<div class="container">
		
			</div>
		</div><!-- product gallery area end -->
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
	

	
</body>
</html>