
<?php $this->load->view('v2/layouts/header'); ?>

<section class="py-9" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>

      <div class="container">
        <div class="row">
          <h3 class="lh-sm fs-4 fs-lg-5 fs-xl-6">Foto</h3>
          <div class="row">

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="<?= base_url('assets/v2/assets/img/gallery/DSC_1934.jpg') ?>"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                  src="<?= base_url('assets/v2/assets/img/gallery/DSC_1934.jpg') ?>"
                  alt="Another alt text" style="width:800px; height:180px;">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="<?= base_url('assets/v2/assets/img/gallery/DSC_2035.jpg') ?>"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                  src="<?= base_url('assets/v2/assets/img/gallery/DSC_2035.jpg') ?>"
                  alt="Another alt text" style="width:800px; height:180px;">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="<?= base_url('assets/v2/assets/img/gallery/DSC_2120.jpg') ?>"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                  src="<?= base_url('assets/v2/assets/img/gallery/DSC_2120.jpg') ?>"
                  alt="Another alt text" style="width:800px; height:180px;">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="<?= base_url('assets/v2/assets/img/gallery/DSC_2189.jpg') ?>"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                  src="<?= base_url('assets/v2/assets/img/gallery/DSC_2189.jpg') ?>"
                  alt="Another alt text" style="width:800px; height:180px;">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="<?= base_url('assets/v2/assets/img/gallery/DSC_2205.jpg') ?>"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                  src="<?= base_url('assets/v2/assets/img/gallery/DSC_2205.jpg') ?>"
                  alt="Another alt text" style="width:800px; height:180px;">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="<?= base_url('assets/v2/assets/img/gallery/DSC_2216.jpg') ?>"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                  src="<?= base_url('assets/v2/assets/img/gallery/DSC_2216.jpg') ?>"
                  alt="Another alt text" style="width:800px; height:180px;">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="<?= base_url('assets/v2/assets/img/gallery/DSCF3502.jpg') ?>"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                  src="<?= base_url('assets/v2/assets/img/gallery/DSCF3502.jpg') ?>"
                  alt="Another alt text" style="width:800px; height:180px;">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="<?= base_url('assets/v2/assets/img/gallery/DSCF3452-DSCF3409.jpg') ?>"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                  src="<?= base_url('assets/v2/assets/img/gallery/DSCF3452-DSCF3409.jpg') ?>"
                  alt="Another alt text" style="width:800px; height:180px;">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="<?= base_url('assets/v2/assets/img/gallery/DSCF3458.jpg') ?>"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                  src="<?= base_url('assets/v2/assets/img/gallery/DSCF3458.jpg') ?>"
                  alt="Another alt text" style="width:800px; height:180px;">
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                data-image="<?= base_url('assets/v2/assets/img/gallery/DSCF3467.jpg') ?>"
                data-target="#image-gallery">
                <img class="img-thumbnail"
                  src="<?= base_url('assets/v2/assets/img/gallery/DSCF3467.jpg') ?>"
                  alt="Another alt text" style="width:800px; height:180px;">
              </a>
            </div>
           
           


          </div>


          <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="image-gallery-title"></h4>
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                      class="sr-only">Close</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i
                      class="fa fa-arrow-left"></i>
                  </button>

                  <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                      class="fa fa-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <style>
        .btn:focus,
        .btn:active,
        button:focus,
        button:active {
          outline: none !important;
          box-shadow: none !important;
        }

        #image-gallery .modal-footer {
          display: block;
        }

        .thumb {
          margin-top: 15px;
          margin-bottom: 15px;
        }
      </style>



    </section>


<?php $this->load->view('v2/layouts/footer'); ?>



<script>
    let modalId = $('#image-gallery');

    $(document)
      .ready(function () {

        loadGallery(true, 'a.thumbnail');

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
          $('#show-previous-image, #show-next-image')
            .show();
          if (counter_max === counter_current) {
            $('#show-next-image')
              .hide();
          } else if (counter_current === 1) {
            $('#show-previous-image')
              .hide();
          }
        }

        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */

        function loadGallery(setIDs, setClickAttr) {
          let current_image,
            selector,
            counter = 0;

          $('#show-next-image, #show-previous-image')
            .click(function () {
              if ($(this)
                .attr('id') === 'show-previous-image') {
                current_image--;
              } else {
                current_image++;
              }

              selector = $('[data-image-id="' + current_image + '"]');
              updateGallery(selector);
            });

          function updateGallery(selector) {
            let $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-title')
              .text($sel.data('title'));
            $('#image-gallery-image')
              .attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
          }

          if (setIDs == true) {
            $('[data-image-id]')
              .each(function () {
                counter++;
                $(this)
                  .attr('data-image-id', counter);
              });
          }
          $(setClickAttr)
            .on('click', function () {
              updateGallery($(this));
            });
        }
      });

    // build key actions
    $(document)
      .keydown(function (e) {
        switch (e.which) {
          case 37: // left
            if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
              $('#show-previous-image')
                .click();
            }
            break;

          case 39: // right
            if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
              $('#show-next-image')
                .click();
            }
            break;

          default:
            return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
      });


  </script>