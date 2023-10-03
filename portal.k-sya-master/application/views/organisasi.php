
<?php $this->load->view('layouts/header'); ?>

<section class="py-5" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>

      <div class="container mt-5">
        <div class="row align-items-center mt-5">
          <div class="col-md-12 col-lg-12 col-xxl-12 py-3  text-sm-start text-center">

            <div class="row">
              <div class="col-md-7">
                <img src="<?= base_url('assets/organisasi/'.$organ->foto) ?>" alt=""
                  style="border-radius: 6%; box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 30%) !important;"
                  class="mt-5 img-thumbnail" width="550" id="myImg" alt="Snow">
              </div>
              <div class="col-md-5">
                <h5 class="mt-6 lh-sm fs-4 fs-lg-5 fs-xl-6"><?= $organ->judul; ?></h5>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container ">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-12 col-xxl-12 py-3  text-sm-start">

            <div class="row">

              <div class="col-md-8">
                <h6 class="mt-6 lh-sm fs-4 fs-lg-5 fs-xl-6"><?= $harapan->judul; ?></h6>
                <p class="text-justify"><?= $harapan->deskripsi; ?></p> 
              </div>
              <div class="col-md-4">
                <img src="<?= base_url('assets/v2') ?>/assets/img/illustrations/undraw_under_construction_46pa.png" alt=""
                  style="border-radius: 6%; box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 20%) !important; width:450px; margin-top: 120px;  width:100%">
              </div>

            </div>

          </div>
        </div>
      </div>

    </section>

    <?php $this->load->view('layouts/footer'); ?>
