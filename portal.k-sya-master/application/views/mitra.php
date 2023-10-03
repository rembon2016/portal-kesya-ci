
<?php $this->load->view('layouts/header'); ?>

<section class="py-5" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>
      <div class="container ">

      <?php 
        foreach($mitra as $mit){
      ?>
        <div class="row align-items-center mt-5 kk1">
          <div class="col-md-12 col-lg-12 col-xxl-12 py-3  text-sm-start text-center">
            <h3 class="mt-6 lh-sm fs-3 fs-lg-3 fs-xl-3" style="font-weight:700;"><?= $mit->judul ?></h3>
                  <div class="row p-4 custom-firman">
                        <div class="col-md-4"> 
                          <img src="<?= base_url('assets/mitra/'.$mit->foto) ?>" class="img img-thumbnail" width="200" alt="">
                        </div>
                        <div class="col-md-8"> 
                          <p class="text-justify fs-2  mt-3" ><?= html_entity_decode($mit->deskripsi) ?></p></div>
                     </div>

           </div>
        </div> 
        <?php } ?>
       
       


      </div>
      

  </section>

    

    

    
    
    <?php $this->load->view('layouts/footer'); ?>
