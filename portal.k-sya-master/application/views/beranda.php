<?php $this->load->view('layouts/header'); ?>

<section class="py-0" id="header">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 90px;">
        <div class="carousel-inner">

            <?php 
          $no = 0;
          foreach($slider as $slide){
            $no++;
            if($no == "1"){  
              $act = "active";
            }else{
              $act = "";
            }
        ?>

            <div class="carousel-item <?= $act; ?>">
                <img src="<?= base_url('assets/slider/'.$slide->foto)?>" class="d-block w-100" alt="..." width="20"
                    style="">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-white"><?= $slide->judul; ?></h5>
                    <p><?= $slide->deskripsi; ?> </p>
                </div>
            </div>
            <?php } ?>

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
</section>
<!-- <section>
      <div class="row flex-center ">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bgright.png);background-position:top right;background-size:325px 505px;">
      </div>
      <div class="container">
        <div class="row">  
          <div class="col-lg-12 mx-auto text-center "> 
            <h6 class="fw-bold fs-3 fs-lg-5 lh-sm "><?= $panduan->judul?> </h6>
      
            <div class="embed-responsive embed-responsive-16by9"> 
              <iframe class="embed-responsive-item" src="<?= $panduan->video; ?>" allowfullscreen style="width:70%; height:450px"></iframe>
            </div>
       
          </div>
        </div>
        </div>

      </div>
    </section> -->

<!-- <section class="py-5" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-25.5rem;">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-9 mx-auto text-center mb-3">
            <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Menuju 4 Tahun <br> Bersama 1 Juta Pemuda Tani </h6>
            <p class="mb-5"></p>
          </div>
        </div>
        <div class="row flex-center h-100"> 
          <div class="col-xl-9">
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                  <div class="text-center text-md-start card-hover">
                    <img class="ps-3 icons" src="<?= base_url('assets/v2') ?>/assets/img/icons/farmer.svg" height="60" alt="" />
                    <div class="card-body">
                      <h6 class="fw-bold fs-1 heading-color"><?= $tanimodern->judul; ?></h6>
                      <p class="mt-3  text-justify" ><?= $tanimodern->deskripsi; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                  <div class="text-center text-md-start card-hover">
                    <img class="ps-3 icons" src="<?= base_url('assets/v2') ?>/assets/img/icons/growth.svg" height="60" alt="" />
                    <div class="card-body">
                      <h6 class="fw-bold fs-1 heading-color"><?= $tanimilenial->judul; ?></h6>
                      <p class="mt-3  text-justify"  ><?= $tanimilenial->deskripsi; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                  <div class="text-center text-md-start card-hover">
                    <img class="ps-3 icons" src="<?= base_url('assets/v2') ?>/assets/img/icons/planting.svg" height="60" alt="" />
                    <div class="card-body">
                      <h6 class="fw-bold fs-1 heading-color"><?= $mediakomando->judul; ?></h6>
                      <p class="mt-3  text-justify"  ><?= $mediakomando->deskripsi; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<section class="py-0">
    <div class="bg-holder"
        style="background-image:url(../assets/v2/assets/img/illustrations/how-it-works.png);background-position:center bottom;background-size:cover;">
    </div>
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="row p-5">
                <div class="col-md-5  mb-3">
                    <img src="<?= base_url('assets/beranda_page/'.$jokowi->foto) ?>" class="img"
                        style="border-radius: 6%; box-shadow: 2px 4px 4px 2px #468949; width:100%;" alt="">
                </div>
                <div class="col-md-7 ">
                    <h4 class="text-white"> <?= $jokowi->judul; ?></h4>
                    <p class="text-white text-justify"><?= $jokowi->deskripsi; ?></p>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-md-7 float-right">
                    <h4 class="text-white "><?= $limpo->judul; ?></h4>
                    <p class="text-white text-justify"><?= $limpo->deskripsi; ?></p><br>
                </div>
                <div class="col-md-5 text-right  mb-3">
                    <img src="<?= base_url('assets/beranda_page/'.$limpo->foto) ?>" width="400" class="img"
                        style="border-radius: 6%; box-shadow: 2px 4px 4px 2px #468949; width:100%" alt="">
                </div>

            </div>

        </div>
    </div>
</section>



<section class="py-5" id="testimonial">
    <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
    </div>
    <div class="container-lg">

        <div class="row">
            <div class="col-lg-9 mx-auto text-center mb-3">
                <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3"><?= $works->judul; ?></h6>
                <p class="mb-5"></p>
            </div>
        </div>
        <div class="row d-flex ">
            <div class="col-12 col-lg-12 col-xl-12 mb-5">
                <center>
                    <img class="img img-thumbnail" src="<?= base_url('assets/beranda_page/'.$works->foto) ?>"
                        width="700" style="border-radius: 5%; box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 30%) !important;"
                        alt="" />
                </center>
            </div>


        </div>


    </div>
</section>



<section class="py-5" id="testimonial">
    <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
    </div>
    <div class="container-lg">

        <div class="row">
            <div class="col-lg-9 mx-auto text-center mb-3">
                <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3"><?= $milenial->judul; ?> </h6>
                <p class="mb-5"></p>
            </div>
        </div>
        <div class="row d-flex ">
            <div class="col-12 col-lg-12 col-xl-12 mb-5">
                <center>
                    <img class="img img-thumbnail" src="<?= base_url('assets/beranda_page/'.$milenial->foto) ?>"
                        width="700" style="border-radius: 5%; box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 30%) !important;"
                        alt="" />
                </center>
            </div>

            <div class=" row flex-center h-100 g-0 p-0">
                <div class="col-xl-12">
                    <div class="row d-flex justify-content-center m-2">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                <div class="text-center text-md-start card-hover">
                                    <img class="ps-3 icons"
                                        src="<?= base_url('assets/v2') ?>/assets/img/icons/farmer.svg" height="60"
                                        alt="" />
                                    <div class="card-body">
                                        <p class="mt-3 mb-md-0 mb-lg-2 text-justify"><?= $milen1->deskripsi; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                <div class="text-center text-md-start card-hover">
                                    <img class="ps-3 icons"
                                        src="<?= base_url('assets/v2') ?>/assets/img/icons/growth.svg" height="60"
                                        alt="" />
                                    <div class="card-body">
                                        <p class="mt-3 mb-md-0 mb-lg-2 text-justify"><?= $milen2->deskripsi; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                <div class="text-center text-md-start card-hover">
                                    <img class="ps-3 icons"
                                        src="<?= base_url('assets/v2') ?>/assets/img/icons/planting.svg" height="60"
                                        alt="" />
                                    <div class="card-body">
                                        <p class="mt-3 mb-md-0 mb-lg-2 text-justify"><?= $milen3->deskripsi; ?></p>
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

<section class="py-0 mb-5" id="testimonial">

    <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bgright.png);background-position: right;background-size:225px 535px;margin-top:-17.5rem;">
    </div>


    <div class="container">
        <div class="row g-0 d-flex justify-content-center  ">
            <div class="col-12 col-lg-12 col-xl-12">

                <h6 class=" fs-lg-4 fw-bold lh-sm text-center">Mitra Kami</h6>
            </div>
            <div class="row ">
                <?php foreach($mitra as $mit ){?>
                <div class="col-md-3 mb-5 mb-md-0">
                    <div class="card h-100 shadow">
                        <div class="card-body my-3"
                            style="display: flex; flex-direction: column; align-items: center; justify-content: center; ">
                            <div class="d-flex justify-content-center mt-2" style="min-height:140px">
                                <img class="img-fluid me-3 me-md-2 me-lg-3 lh-3"
                                    src="<?= base_url('assets/mitra/'.$mit->foto) ?>"
                                    style="object-fit:scale-down;width:100%;height:115px;transform: scale(0.9);"
                                    alt="" />
                            </div>
                            <p class="text-center mt-1"><?= $mit->judul; ?></p>

                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- <div class="col-md-3 mb-5 mb-md-0"> 
                    <div class="card h-100 shadow">
                      <div class="card-body my-3">
                          <div class="d-flex justify-content-center"><img
                            class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url('assets/v2') ?>/assets/img/mitra/koperasi.png" width="100" alt="" />
                          </div>
                          <p class="text-center mt-4">Koperasi KKT-PTI</p>
                      </div>
                    </div>
                  </div> 

                  <div class="col-md-3 mb-5 mb-md-0">
                    <div class="card h-100 shadow">
                      <div class="card-body my-3">
                        <div class="d-flex justify-content-center mt-5"><img
                            class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url('assets/v2') ?>/assets/img/mitra/abangijo.png" width="120" alt="" />
                        </div>
                        <p class="text-center mt-4">Pemasaran Online</p>

                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 mb-5 mb-md-0">
                    <div class="card h-100 shadow">
                      <div class="card-body my-3">
                        <div class="d-flex justify-content-center mt-5"><img
                            class="img-fluid me-3 me-md-2 me-lg-3" src="<?= base_url('assets/v2') ?>/assets/img/mitra/rembon.png" width="120" alt="" />
                        </div>
                        <p class="text-center mt-4">Rembon Karya Digital</p>

                      </div>
                    </div>
                  </div> -->


            </div>


        </div>
    </div>
    </div>
</section>

<section class="py-2 mb-5" id="Opportuanities">
    <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12">

                <h6 class=" fs-lg-4 fw-bold lh-sm text-center">Blog Baru</h6>
            </div>
            <div class="col-md-12">

                <div class="row">

                    <?php foreach($new_post as $n ){ ?>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-3">
                            <div class="text-center text-md-start card-hover">
                                <a href="<?php echo site_url('blog/'.$n->post_slug)?>">
                                    <img class="icons" src="<?php echo base_url().'assets/images/'.$n->post_image;?>"
                                        height="" class=" img-thumbnail " style="border-radius: 10px; width:100%"
                                        alt="" />
                                </a>
                                <div class="card-body">
                                    <h5 class=" heading-color"><?php echo $n->post_title;?></h5>
                                    <!-- <p class="mt-3 mb-md-0 mb-lg-2">Kegiatan rapat koordinasi Nasional KKT-PTI dihadiri 11 perwakilan KKT-PTI Provinsi</p> -->
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php } ?>



                </div>

                <div class="row px-3 px-sm-6 px-md-0 px-lg-5 px-xl-4">
                    <div class="col-12 position-relative ">
                        <a href="blog" class="btn btn-success">Lihat semua</a>
                    </div>
                </div>


            </div>


        </div>
    </div>

</section>
<!-- <audio  id="audioID" src="<?php echo base_url(); ?>assets/sound.mp3" ></audio> -->

<script>
//  var vAudio = document.getElementById("audioID");
//    function playMusic()
//    {
//       vAudio.play();
//    }
// var myAudio = document.getElementById("audioID");
// myAudio.play();
// myAudio.muted = false;
// myAudio.play();
// window.onload = function() {
//   setTimeout(function(){
//     myAudio.play();
//   }, 3000); // you can change this... whatever you want //
// }
</script>

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
    <main class="main" id="top">
        <div class="row">
            <center>
                <h3 class="lh-sm fs-4 fs-lg-4 fs-xl-5">Layanan Fitur</h3>
            </center>
            <div class="nav-item px-9">
            </div>
            <main class="main" id="top">
                <div class="container mt-4">
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <h3 class="lh-sm fs-4 fs-lg-9 fs-xl-1">Tersedianya daftar rekening (COA) sesuai jenis
                                entitas</h3>
                            <div class="nav-item px-1">
                                <a class="text-700 text-dark-px=1">pengguna
                                    dapat langsung memakai sistem sesuai jenis entitasnya sesuai transaksi Syariah

                                    <br></a><a class="text-700 text-dark-px=9">Selanjutnya merubah atau menambah
                                    rekening sesuai kebutuhan sehingga mempercepat penerapan awal <br>
                                </a>
                            </div><a class="text-700 text-dark-px=9">
                            </a>
                            <div class="row mt-1"><a class="text-700 text-dark-px=9">
                                    <h3 class="lh-sm fs-4 fs-lg-9 fs-xl-1">Kode Transaksi otomatis</h3>
                                </a>
                                <div class="nav-item px-1"><a class="text-700 text-dark-px=9">
                                    </a><a class="text-700 text-dark-px=1">pemasukan transaksi secara mudah
                                        dan cepat yang membukukan debit kredit serta distribusi ke
                                        rekening-rekening secara otomatis berdasarkan ketentuan yang diprogram

                                    </a></div><a class="text-700 text-dark-px=1">

                                </a>
                                <div class="row mt-1"><a class="text-700 text-dark-px=1">
                                    </a>
                                    <div class="col-sm-12"><a class="text-700 text-dark-px=1">
                                            <h3 class="lh-sm fs-4 fs-lg-9 fs-xl-1">Transaksi yang rutin</h3>
                                        </a>
                                        <div class="nav-item px-1"><a class="text-700 text-dark-px=1">
                                            </a><a class="text-700 text-dark-px=1">tidak perlu dimasukan
                                                berulang-ulang dan dapat diproses otomatis sehingga menghemat
                                                waktu
                                            </a></div><a class="text-700 text-dark-px=1">

                                        </a>
                                        <div class="row mt-1"><a class="text-700 text-dark-px=1">
                                            </a>
                                            <div class="col-sm-12"><a class="text-700 text-dark-px=1">
                                                    <h3 class="lh-sm fs-4 fs-lg-9 fs-xl-1">Foto dan dokumen
                                                        pendukung</h3>
                                                </a>
                                                <div class="nav-item px-1"><a class="text-700 text-dark-px=1">
                                                    </a><a class="text-700 text-dark-px=1">Setiap transaksi
                                                        dapat dilengkapi keterangan tambahan, dilekatkan foto
                                                        atau dokumen elektronik untuk memudahkan dokumentasi dan
                                                        pemeriksaan
                                                    </a></div><a class="text-700 text-dark-px=1">

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-align:center">
                            </div>
                            <div class="row mt-1">
                                <a class="navbar-brand" href="<?= base_url('beranda')?>">
                                    <img class="d-inline-block align-top img-fluid"
                                        src="<?php echo site_url();?>assets/images/Gambar1.png" alt="kesya"
                                        width="600" />
                                    <span class="text-theme font-monospace fs-4 ps-1"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <a class="text-700 text-dark-px=9">
                            </a>
                            <div class="row mt-1"><a class="text-700 text-dark-px=1">

                                </a>
                                <div class="row mt-1"><a class="text-700 text-dark-px=1">
                                    </a>
                                    <div class="col-sm-12"><a class="text-700 text-dark-px=1">

                                        </a>
                                        <div class="row mt-1"><a class="text-700 text-dark-px=1">
                                            </a>
                                            <div class="col-sm-12"><a class="text-700 text-dark-px=1">

                                                </a>
                                                <div class="row mt-1"><a class="text-700 text-dark-px=1">
                                                    </a>
                                                    <div class="col-sm-12"><a class="text-700 text-dark-px=1">
                                                            <h3 class="lh-sm fs-4 fs-lg-9 fs-xl-1">Ekspor / Download
                                                            </h3>
                                                        </a>
                                                        <div class="nav-item px-1"><a class="text-700 text-dark-px=1">
                                                            </a><a class="text-700 text-dark-px=1">Pengguna
                                                                dapat mengekspor/ download datanya setiap saat
                                                                untuk disimpan pada perangkat sendiri atau untuk
                                                                diolah lebih lanjut
                                                            </a></div><a class="text-700 text-dark-px=1">

                                                        </a>
                                                        <div class="row mt-1"><a class="text-700 text-dark-px=1">
                                                            </a>
                                                            <div class="col-sm-12"><a class="text-700 text-dark-px=1">
                                                                    <h3 class="lh-sm fs-4 fs-lg-9 fs-xl-1">Data
                                                                        budget/sasaran</h3>
                                                                </a>
                                                                <div class="nav-item px-1"><a
                                                                        class="text-700 text-dark-px=1">
                                                                    </a><a class="text-700 text-dark-px=1">untuk
                                                                        mendapatkan gambaran cepat atas kondisi
                                                                        keuangan entitas dalam bentuk grafik
                                                                        yang menunjukkan posisi kas,
                                                                        perkembangan dan perbandingan pemasukan,
                                                                        aktual terhadap budget dari
                                                                        pemasukan/pengeluaran dari waktu ke
                                                                        waktu
                                                                    </a></div><a class="text-700 text-dark-px=1">

                                                                </a>
                                                                <div class="row mt-1"><a
                                                                        class="text-700 text-dark-px=1">
                                                                    </a>
                                                                    <div class="col-sm-12"><a
                                                                            class="text-700 text-dark-px=1">
                                                                            <h3 class="lh-sm fs-4 fs-lg-9 fs-xl-1">
                                                                                Laporan</h3>
                                                                        </a>
                                                                        <div class="nav-item px-1"><a
                                                                                class="text-700 text-dark-px=1">
                                                                            </a><a
                                                                                class="text-700 text-dark-px=1">Menghasilkan
                                                                                laporan keuangan sesuai prinsip
                                                                                prinsip akuntansi
                                                                            </a></div><a
                                                                            class="text-700 text-dark-px=1">

                                                                        </a>
                                                                        <div class="row mt-1"><a
                                                                                class="text-700 text-dark-px=1">
                                                                            </a>
                                                                            <div class="col-sm-12"><a
                                                                                    class="text-700 text-dark-px=1">
                                                                                    <h3
                                                                                        class="lh-sm fs-4 fs-lg-9 fs-xl-1">
                                                                                        Keterpaduan dengan perbankan
                                                                                    </h3>
                                                                                </a>
                                                                                <div class="nav-item px-1"><a
                                                                                        class="text-700 text-dark-px=1">
                                                                                    </a><a
                                                                                        class="text-700 text-dark-px=1">Terintegrasi
                                                                                        dengan transaksi
                                                                                        perbankan pada bank yang
                                                                                        bermitra
                                                                                    </a></div><a
                                                                                    class="text-700 text-dark-px=1">

                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main><a class="text-700 text-dark-px=1">
            </a>
        </div>
    </main>
</section>

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
    <main class="main" id="top">
        <div class="row">
            <center>
                <h3 class="lh-sm fs-4 fs-lg-4 fs-xl-5">Keunggulan</h3>
            </center>
            <div class="nav-item px-9">
            </div>
            <main class="main" id="top">
                <div class="container mt-3">
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <div class="text-align:right">
                            </div>
                            <div class="row mt-1">
                                <a class="navbar-brand" href="http://localhost/PKL/portal.k-sya-master/beranda">
                                    <img class="d-inline-block align-top img-fluid" src="http://localhost/PKL/portal.k-sya-master/assets/images/Gambar1.png" alt="kesya" width="150">
                                    <span class="text-theme font-monospace fs-4 ps-1"></span>
                                </a>
                            </div>
                            <div class="nav-item px-4 text-justify">
                                <a class="text-700 text-dark-px=5">Lebih mudah digunakan karena dirancang khusus untuk fungsi aplikasi saja, sehingga lebih mudah digunakan daripada spreadsheet, yang dapat digunakan untuk berbagai tujuan.</a>
                                </div>
            </div><div class="col-md-3">
                            <div class="text-align:right">
                            </div>
                            <div class="row mt-1">
                                <a class="navbar-brand" href="http://localhost/PKL/portal.k-sya-master/beranda">
                                    <img class="d-inline-block align-top img-fluid" src="http://localhost/PKL/portal.k-sya-master/assets/images/Gambar1.png" alt="kesya" width="150">
                                    <span class="text-theme font-monospace fs-4 ps-1"></span>
                                </a>
                            </div>
                            <div class="nav-item px-4 text-justify">
                                <a class="text-700 text-dark-px=5">Lebih aman karena dirancang untuk melindungi data dari akses yang tidak sah dan mencatat semua akses secara rinci sehingga mudah diaudit.</a>
                                </div>
            </div><div class="col-md-3">
                            <div class="text-align:right">
                            </div>
                            <div class="row mt-1">
                                <a class="navbar-brand" href="http://localhost/PKL/portal.k-sya-master/beranda">
                                    <img class="d-inline-block align-top img-fluid" src="http://localhost/PKL/portal.k-sya-master/assets/images/Gambar1.png" alt="kesya" width="150">
                                    <span class="text-theme font-monospace fs-4 ps-1"></span>
                                </a>
                            </div>
                            <div class="nav-item px-4 text-justify">
                                <a class="text-700 text-dark-px=5">Lebih hemat waktu karena langsung membantu fungsi memasukkan transaksi, melacak pengeluaran, membuat laporan dan lain lain.</a>
                                </div>
            </div><div class="col-md-3">
                            <div class="text-align:right">
                            </div>
                            <div class="row mt-1">
                                <a class="navbar-brand" href="http://localhost/PKL/portal.k-sya-master/beranda">
                                    <img class="d-inline-block align-top img-fluid" src="http://localhost/PKL/portal.k-sya-master/assets/images/Gambar1.png" alt="kesya" width="150">
                                    <span class="text-theme font-monospace fs-4 ps-1"></span>
                                </a>
                            </div>
                            <div class="nav-item px-4 text-justify">
                                <a class="text-700 text-dark-px=5">Lebih akurat karena dirancang untuk mencegah terjadinya kesalahan.</a>
                                </div>
            </div></div></div></main>
            </main>
</section>

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
<style>
/* .row{
    width:100%;
  } */
</style>