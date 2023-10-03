    <?php
     $site = $this->db->get('tbl_site')->row();
    ?>
    <main class="main" id="low">
    <nav class="navbar navbar-expand-lg navbar-light fixed-low py-3 bg-light "
      data-navbar-on-scroll="data-navbar-on-scroll" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16);">
      <div class="container">
          <a class="nav-link fw-medium" href="<?= site_url('') ?>">Contact Us</li>
          <a class="nav-link fw-medium" href="<?= site_url('') ?>">Terms of use</li>
          <a class="nav-link fw-medium" href="<?= site_url('') ?>">Privacy Policy</li>

          <a class="navbar-brand" href="<?= base_url('beranda')?>">
          <img class="d-inline-block align-top img-fluid" src="<?php echo site_url();?>assets/images/kesya.png" alt="kesya"
            width="180" />
          <span class="text-theme font-monospace fs-4 ps-2"></span>
        </a>
           <!-- </ul>
          </div>
          <div class="col-6 col-sm-4 col-lg-auto mb-3">
            <h6 class="mb-3 text-1000 fw-semi-bold">Sosial Media </h6>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="mb-3">
                <a class="text-700 text-decoration-none" href="<?= $site->site_facebook; ?>">Facebook</a>
              </li>
              <li class="mb-3">
                <a class="text-700 text-decoration-none" href="<?= $site->site_instagram; ?>">Instagram</a>
              </li>
              <li class="mb-3">
                <a class="text-700 text-decoration-none" href="<?= $site->site_twitter; ?>">Twitter</a>
              </li>
              <li class="mb-3">
                <a class="text-700 text-decoration-none" href="#!">Youtube</a>
              </li> 
            </ul>
          </div>-->

          <!-- <div class="col-12 col-lg-auto mb-1">
            <div class="card bg-success">
              <div class="card-body p-sm-4">
                <h5 class="text-white">KKT-PTI</h5>
                <p class="mb-0 text-white">write email to us <span
                    class="text-white fs--1 fs-sm-1">info@kktpti.org</span>
                </p>
              </div>
            </div>
          </div> -->
        </div>
        <hr class="text-300 mb-0" />
        <div class="row flex-center py-1">
          <div class="col-12 col-sm-8 col-md-6 text-center text-md-start">
            <a class="text-decoration-none" href="#">
              <p class="fs--1 text-dark my-2 text-center text-md-end"></p>
          </div>
    </section>
  </main>

  <main class="main" id="low">
    <nav class="navbar navbar-expand-lg navbar-light fixed-low py-4 bg-light " data-navbar-on-scroll="data-navbar-on-scroll" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16);">
      <div class="container-left">
          <a class="text-700 text-decoration-none" href="">Copy @2010 Reallbyte Inc All right</a>
  </div>
  </nav>
  </main>

</body>

</html>