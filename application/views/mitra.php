<?php $this->load->view('layouts/header'); ?>

<section class="py-0" id="header">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 90px;">
        <div class="carousel-inner">
<div id="carouselExampleIndicators" class="carousel slide">
  <center>
  <div class="container ">
        <div class="row align-items-center mt-1">
            <div class="col-md-12 col-lg-12 col-xxl-12 py-3  text-sm-start text-center ">
            </div>
        </div>
    </div>
    <main class="main" id="top">
        <div class="row">
            <center>
                <h3 class="lh-sm fs-4 fs-lg-4 fs-xl-5">Screenshoot</h3>
                <a>jelajahi fitur-fitur utama kesya</a>
            </center>
    </div>
    
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/slider/Gambar1.png" class="d-block w-40" alt="bg1">
    </div>
    <div class="carousel-item">
      <img src="assets/slider/Gambar2.png" class="d-block w-40" alt="bg2">
    </div>
    <div class="carousel-item">
      <img src="assets/slider/Gambar3.png" class="d-block w-40" alt="bg3">
    </div>
    </center>
  </div>
  <button class="carousel-control-prev " style="left:0px !important" type="button"
  data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
  <span class="carousel-control-prev-icon " aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions"
  data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
</div>
</section>
    
    <?php $this->load->view('layouts/footer');?>