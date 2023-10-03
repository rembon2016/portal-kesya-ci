
<?php $this->load->view('layouts/header'); ?>

<section class="py-8" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>

      <div class="container">
        <div class="row">
          <h2 class="lh-sm ">Blog</h2>
          <div class="col-md-8">

            <div class="row">

              <div class="col-md-12 mb-4">
                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 pt-3">
                  <div class=" text-md-start card-hover">
                    <img class="icons"
                      src="<?php echo base_url().'assets/images/'.$image;?>"
                      height="" class=" img-thumbnail " style="border-radius: 5px; width:100%" alt="" />
                    <div class="card-body">
                      <h6 class="fw-bold fs-1 heading-color"><?php echo $title;?></h6>
                      <p class="mt-3 mb-md-0 mb-lg-2" style="font-style:justify;"><?php echo $content;?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <div class="col-md-4">
            <div class="card shadow">
              <div class="card-body">
                <h3 class="lh-sm f">Baru</h3>
                <ul class="list-group list-group-flush">
                <?php foreach($new as $n ){ ?> 
                  <li class="list-group-item"> <a href="<?php echo site_url('blog/'.$n->post_slug)?>"><?php echo $n->post_title;?></a> </li>
                  <?php } ?>
                </ul>
              </div>
            </div>

            <div class="card shadow mt-3">
              <div class="card-body">
                <h3 class="lh-sm f">Banyak Dilihat</h3>
                <ul class="list-group list-group-flush">
                <?php foreach($most as $m ){ ?> 
                  <li class="list-group-item"> <a href="<?php echo site_url('blog/'.$m->post_slug)?>"><?php echo $m->post_title;?></a> </li>
                  <?php } ?>
                </ul>
              </div>
            </div>

          </div>

        </div>
      </div>




    </section>


<?php $this->load->view('layouts/footer'); ?>
