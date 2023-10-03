
<?php $this->load->view('layouts/header'); ?>

<section class="py-0" id="header">
<div id="carouselExampleIndicators" class="carousel slide">
  <center>
  <div class="container mt-3">
        <div class="row">
            <h3 class="lh-sm fs-4 fs-lg-5 fs-xl-6">Screenshoot</h3>
            <a>jelajahi fitur-fitur utama kesya</a>
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
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

    <?php $this->load->view('layouts/footer'); ?>
