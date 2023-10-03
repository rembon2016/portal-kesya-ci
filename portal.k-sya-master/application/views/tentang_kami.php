
<?php $this->load->view('layouts/header'); ?>

<section class="py-5" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>

      <div class="container ">
        <div class="row align-items-center mt-5">
          <div class="col-md-12 col-lg-12 col-xxl-12 py-3  text-sm-start text-center ">


          <img  alt="" src="<?= base_url('assets/about/'.$latar->foto)?>" style="border-radius: 2%; box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 25%) !important; width:100%;" >
           
           <h3 class="mt-4 lh-sm fs-4 fs-lg-5 fs-xl-6"><?= $latar->judul; ?></h3>


           <p class="text-justify mt-2" style="text"><?php echo html_entity_decode($latar->deskripsi); ?></p>



          </div>
        </div>
      </div> 
      <div class="container ">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-12 col-xxl-12 py-3  text-sm-start text-center">

            <h3 class="lh-sm fs-4 fs-lg-5 fs-xl-6"><?= $sejarah->judul; ?></h3>
      <div class="row">

          <div class="col-md-8">
                  <p class="text-justify"  ><?php echo html_entity_decode($sejarah->deskripsi); ?></p>
                </div>
                <div class="col-md-4">
                  <div>
                    <img src="<?= base_url('assets/about/'.$sejarah->foto)?>"  class="img" style="border-radius: 6%; box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 25%) !important; width:100%" alt="">

                  </div>
                </div>

          </div>

          </div>
        </div>
      </div>

    </section>

    <section class="py-3">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bgright.png);background-position:top right;background-size:225px 755px;margin-top:-17.5rem;">
      </div>
      <div class="container-lg">
        <div class="row justify-content-center">

          <div class="col-sm-12 col-md-12 col-xl-12 ">
            <h5 class="fs-3 fs-xxl-5 lh-sm text-center"><?= $dibawah->judul; ?></h5>
          </div>

          <div class="row p-5">
            <div class="col-md-5">
              <img src="<?= base_url('assets/about/'.$dibawah->foto)?>"  class="img"
                style="border-radius: 6%; box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 25%) !important; width:100%" alt="">
            </div>
            <div class="col-md-7 mt-3 ">
                <?php echo html_entity_decode($dibawah->deskripsi); ?>
            </div>
          </div>



        </div>
      </div>
    </section>

    <section class="py-2" id="testimonial">
      <div class="container-lg">


        <div class="row flex-center">
          <div class="col-12 col-lg-10 col-xl-12">
            <!-- <div class="bg-holder"
              style="background-image:url(../assets/v2/assets/img/illustrations/testimonial-bg.png);background-position:top left;background-size:120px 83px;">
            </div> -->
          </div>

          <div class="row flex-center h-100">
            <div class="col-xl-12">
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                    <div class="text-center text-md-start card-hover">
                      <img class="ps-3 icons" src="<?= base_url('assets/v2')?>/assets/img/icons/farmer.svg" height="60" alt="" />
                      <div class="card-body">
                        <h6 class="fw-bold fs-1 heading-color"><?= $solusi->judul; ?></h6>
                        <p class="mt-3 mb-md-0 mb-lg-2 text-justify " ><?php echo html_entity_decode( $solusi->deskripsi); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                    <div class="text-center text-md-start card-hover">
                      <img class="ps-3 icons" src="<?= base_url('assets/v2')?>/assets/img/icons/growth.svg" height="60" alt="" />
                      <div class="card-body">
                        <h6 class="fw-bold fs-1 heading-color"><?= $pembentukan->judul; ?></h6>
                        <p class="mt-3 mb-md-0 mb-lg-2  text-justify " ><?php echo html_entity_decode( $pembentukan->deskripsi); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
 
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                    <div class="text-center text-md-start card-hover">
                      <img class="ps-3 icons" src="<?= base_url('assets/v2')?>/assets/img/icons/planting.svg" height="60" alt="" />
                      <div class="card-body">
                        <h6 class="fw-bold fs-1 heading-color"><?= $inspirasi->judul; ?></h6>
                        <p class="mt-3 mb-md-0 mb-lg-2  text-justify " ><?php echo html_entity_decode( $inspirasi->deskripsi); ?></p>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>


        </div>
      </div>
    </section>

    
    <?php $this->load->view('layouts/footer'); ?>
