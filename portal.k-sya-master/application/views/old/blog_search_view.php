<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo $judul;?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="shorcut icon" href="<?php echo base_url().'theme/images/favicon.ico'?>">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	<!-- Stylesheets -->
	<link href="<?php echo base_url().'theme/plugins/bootstrap.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'theme/fonts/ionicons.css'?>" rel="stylesheet">	
	<link href="<?php echo base_url().'theme/common/styles.css'?>" rel="stylesheet">
	
</head>
<body>
	
	<?php echo $header;?>

	<section class="ptb-0">
		<div class="brdr-ash-1 opacty-5"></div>
	</section>  
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					
					<h4 class="p-title"><b><?php echo strtoupper($judul);?></b></h4>
					<div class="row">
						<?php foreach ($data->result() as $row):?>
						<div class="col-sm-6">
							<a href="<?php echo site_url('blog/'.$row->post_slug);?>"><img src="<?php echo base_url().'assets/images/thumb/'.$row->post_image;?>" alt=""></a>
							<h4 class="pt-20"><a href="<?php echo site_url('blog/'.$row->post_slug);?>"><b><?php echo $row->post_title;?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b><?php echo $row->user_name;?>,</b></a>
								<?php echo date('d M Y',strtotime($row->post_date));?></li>
								<li><i class="color-primary mr-5 font-12 ion-eye"></i><?php echo $row->post_views;?></li>
							</ul>
						</div><!-- col-sm-6 -->
						<?php endforeach;?>
						
					</div><!-- row -->
				</div><!-- col-md-9 -->
				
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						
						<div>
							<h4 class="p-title"><b>TERPOPULER</b></h4>
							<?php foreach ($populer_post->result() as $row):?>
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="<?php echo site_url('blog/'.$row->post_slug);?>">
								<div class="wh-100x abs-tlr"><img src="<?php echo base_url().'assets/images/thumb/'.$row->post_image;?>" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b><?php echo $row->post_title;?></b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b><?php echo $row->user_name;?>,</b></span> <?php echo date('d M Y',strtotime($row->post_date));?></h6>
								</div>
							</a><!-- oflow-hidden -->
							<?php endforeach;?>
							
						</div><!-- mtb-50 -->
						
					</div><!--  pl-20 -->
				</div><!-- col-md-3 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>
	
	
	<?php echo $footer;?>
	
	<!-- SCIPTS -->
	
	<script src="<?php echo base_url().'theme/plugins/jquery-3.2.1.min.js'?>"></script>
	<script src="<?php echo base_url().'theme/plugins/tether.min.js'?>"></script>
	<script src="<?php echo base_url().'theme/plugins/bootstrap.js'?>"></script>
	<script src="<?php echo base_url().'theme/common/scripts.js'?>"></script>
	
</body>
</html>