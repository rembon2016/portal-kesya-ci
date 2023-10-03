
<?php $this->load->view('v2/layouts/header'); ?>

<section class="py-8" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>

      <div class="container">
        <div class="row">
          <h3 class="lh-sm fs-4 fs-lg-5 fs-xl-6">Video</h3>
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-3">
                <div class="text-center text-md-start card-hover">
                  <a href="#">
                    <img class="icons"
                      src="https://images.unsplash.com/photo-1560493676-04071c5f467b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=968&q=80"
                      height="" class=" img-thumbnail " style="border-radius: 10px; width:100%" alt="" />
                  </a>
                  <div class="card-body">
                    <h6 class="fw-bold fs-1 heading-color">Video Sirkulasi KKT PTI 2</h6>
                    <p class="mt-3 mb-md-0 mb-lg-2">Video sirkulasi KKT PTI</p> 
                    <button type="button" class="btn btn-primary video-btn" data-toggle="modal"
                      data-src="https://www.youtube.com/embed/IFnFJWZono0" data-target="#myModal">
                      Lihat Video
                    </button>

 
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-3">
                <div class="text-center text-md-start card-hover">
                  <a href="#">
                    <img class="icons"
                      src="http://development.kktpti.org/assets/v2/assets/img/gallery/DSC_1934.jpg"
                      height="" class=" img-thumbnail " style="border-radius: 10px; width:100%" alt="" />
                  </a>
                  <div class="card-body">
                    <h6 class="fw-bold fs-1 heading-color">Ngopi santai bersama Menteri Pertanian RI dan Pemuda Tani KKT-PTI.</h6>
                    <p class="mt-3 mb-md-0 mb-lg-2">Tercapainya Petani dan Pertanian Berbasis Digital on Farm, Off
                      Farm dan On Lire Berbasis Sumberdaya Lokal</p>


                    <button type="button" class="btn btn-primary video-btn" data-toggle="modal"
                      data-src="https://www.youtube.com/embed/7SxWYt0cAkE" data-target="#myModal">
                      Lihat Video
                    </button>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-3">
                <div class="text-center text-md-start card-hover">
                  <a href="#">
                    <img class="icons"
                      src="<?= base_url('assets/v2/assets/img/gallery/yt-thumb1.jpg') ?>"
                      height="" class=" img-thumbnail " style="border-radius: 10px; width:100%" alt="" />
                  </a>
                  <div class="card-body">
                    <h6 class="fw-bold fs-1 heading-color">JIKA LAHAN PENUHI SYARAT, KALTIM JADI SKALA PRIORITAS PROGRAM BANTUAN SUBSIDI KEMENTAN.</h6>
                    <p class="mt-3 mb-md-0 mb-lg-2 text-lowercase">KOMANDO KAWASAN TERPAUT PEMUDA TANI INDONESIA (KKT-PTI) </p>

                    <button type="button" class="btn btn-primary video-btn" data-toggle="modal"
                      data-src="https://www.youtube.com/embed/B47QpW2Fdro" data-target="#myModal">
                      Lihat Video
                    </button>

                  </div>
                </div>
              </div>
            </div>
           



          </div>



        </div>
      </div>

    </section>

    

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          </div>
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9 w-100">
              <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"
                style="width:100%; height:520px; padding:20px; border-radius: 10px;"></iframe>
            </div>
          </div>

        </div>
      </div>
    </div>

<?php $this->load->view('v2/layouts/footer'); ?>


<script>

$(document).ready(function () {

  var $videoSrc;
  $('.video-btn').click(function () {
    $videoSrc = $(this).data("src");
  }); 

  $('.btn-close').click(function () {
    $('#myModal').hide();

    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();

    $("#video").attr('src', $videoSrc);
  });



  // Gets the video src from the data-src on each button


  console.log($videoSrc);
  // when the modal is opened autoplay it  
  $('#myModal').on('shown.bs.modal', function (e) {

    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
  })
  // stop playing the youtube video when I close the modal
  $('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src', $videoSrc);
  })

  // document ready  
});

</script>

<style>
  .modal-dialog {
    max-width: 800px;
    margin: 30px auto;
  }



  .modal-body {
    position: relative;
    padding: 0px;
  }

  .close {
    position: absolute;
    right: -30px;
    top: 0;
    z-index: 999;
    font-size: 2rem;
    font-weight: normal;
    color: #fff;
    opacity: 1;
  }
</style>