
<?php $this->load->view('layouts/header'); ?>

<section class="py-5" id="Opportuanities">
    <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
    </div>

    <div class="container ">
        <div class="row align-items-center mt-5">
            <div class="col-md-12 col-lg-12 col-xxl-12 py-3  text-sm-start text-center ">
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <center>
                <h3 class="lh-sm fs-4 fs-lg-4 fs-xl-6">Pusat Bantuan</h3>
            </center>
            <center>
                <div class="col-sm-3">
                    <a class="text-900 text-dark-px=20" href="<?= site_url('tentang_kami') ?>">Perlu
                        bertanya kepada
                        kami bagaimana cara menggunakannya? Cukup hubungi kami</li>
            </center>
        </div>
        <main class="main" id="top">
            <div class="text-align:left">
            </div>
            <div class="row mt-1">
                <div class="col-md-5">
                    <a class="navbar-brand" href="<?= base_url('beranda')?>">
                        <img class="d-inline-block align-top img-fluid"
                            src="<?php echo site_url();?>assets/images/picture2.png" alt="kesya" width="700" />
                        <span class="text-theme font-monospace fs-4 ps-1"></span>
                    </a>
                </div>
                <div class="col-md-5">
                    <div class="container mt-9">
                        <div class="row">
                            <center>
                                <h3 class="lh-sm fs-2 fs-lg-3 fs-xl-4">Pusat Bantuan
                                    Kesya</h3>
                                <div class="col-sm-7">
                                    <a class="text-900 text-dark-px=4" href="<?= site_url('tentang_kami') ?>">Anda
                                        dapat
                                        mengetahui pembaruan rutin dan panduan pengguna
                                        </li>
                                </div>

                            </center>

                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <center>
                            <button type="submit" class="btn btn-success">Kirim via
                                whatapps</button>
                        </center>
                    </div>
                </div>
            </div>




        </main>
</section>
<?php $this->load->view('layouts/footer'); ?>
