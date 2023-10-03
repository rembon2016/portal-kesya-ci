
<?php $this->load->view('layouts/header'); ?>

<section class="py-5" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>
 
      <div class="container ">
        <div class="row align-items-center mt-5">
          <div class="col-md-12 col-lg-12 col-xxl-12 py-3  text-sm-start">

            <h3 class="mt-6 lh-sm fs-4 fs-lg-5 fs-xl-6"> Teknologi di dalam cluster KKT-PTI</h3>

            <ol>

              <?php 
                foreach($teknologi as $tek){
              ?>
                <li><?= $tek->judul ?></li>
                    <div class="row p-4">
                        <div class="col-md-5"> <img src="<?= base_url('assets/teknologi/'.$tek->foto);?>" class="img img-thumbnail" width="400" alt=""></div>
                        <div class="col-md-7"> 
                          <p class="  text-justify">
                          <?= $tek->deskripsi ?>
                        </p>
                      </div>
                    </div>
               <?php } ?>
            </ol>
           
          </div>
        </div>
       
      </div>
      

    </section>

    

    
    
    
    <?php $this->load->view('layouts/footer'); ?>
