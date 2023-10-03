
<?php $this->load->view('layouts/header'); ?>

<section class="py-8" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>

      <div class="container">
        <div class="row">
          <h3 class="lh-sm fs-4 fs-lg-5 fs-xl-6">Blog</h3>
          <div class="col-md-8">

            <div class="row">


            <?php foreach ($data->result() as $row):?>

              <div class="col-md-6 mb-4">
                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-3">
                  <div class="text-center text-md-start card-hover">
                    <a href="<?php echo site_url('blog/'.$row->post_slug)?>">
                      <img class="icons"
                        src="<?php echo base_url().'assets/images/'.$row->post_image;?>"
                        height="" class=" img-thumbnail " style="border-radius: 10px; width:100%" alt="" />
                    </a>
                    <div class="card-body"> 
                      <h6 class="fs-1"><?php echo $row->post_title;?></h6>
                      <p class="mt-3 mb-md-0 mb-lg-2"><?php echo substr($row->post_description,0,120);?></p>
                      <a href="<?php echo site_url('blog/'.$row->post_slug);?>" class="read-more">Read more <i class="fa fa-angle-right"></i></a>
                      <!-- <ul>
                          <li><a href="#"><i class="fa fa-heart"></i><?php echo $row->post_views;?></a></li>
                          <li><a href="#"><i class="fa fa-comment"></i><?php echo $row->post_views;?></a></li>
                          <li><a href="#"><i class="fa fa-share-alt"></i><?php echo $row->post_views;?></a></li>
                      </ul> -->
                    </div>

                  </div>
                </div>
              </div>

              
							<?php endforeach;?>

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
