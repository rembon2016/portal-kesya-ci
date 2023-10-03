
<?php $this->load->view('layouts/header'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<section class="py-9" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>

      <div class="container">
        <div class="row">
          <h3 class="lh-sm fs-4 fs-lg-5 fs-xl-6">Kartu Anggota Pemuda Tani</h3>
         
        
          <div class="col-md-12">
            <div class="card shadow mt-3">
              <div class="card-body">
                <h3 class="lh-sm f"></h3>
                <form id="form_sertifikat" action="javascript:void(0)" method="POST">
                  <div class="form-group mt-2">
                    <div class="label">Nomor NIK </div>
                    <input type="number" name="nik" id="nik" placeholder="Masukan nomor NIK anda.." class="form-control mt-2" required>
                  </div> 
                  
                  <div class="form-group mt-2">
                    <p id="loading"></p>
                    <button type="submit" class="btn btn-success button_serti">Lihat Kartu Anggota</button>
                  </div>
                </form>
              </div>
            </div>
          
                    <div id="sertifikat"></div>
                 
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


    <script>


$('#form_sertifikat').submit(function(){
  $.ajax({  
    url:"<?= site_url('sertifikasi/getSertifikat') ?>",
    type:"POST", 
    data:$(this).serialize(),
    success:function(data){ 
      if(data == ""){
        alert('Data tidak ditemukan!');
      }else{
        
        $("#sertifikat").html(data);
        var element = document.querySelector("#member_cards");
        html2canvas(element, {
          allowTaint : true,
          scale: 3
        }).then(function(canvas) {
          // var a = document.createElement('a');
          var image = new Image();


        // a.href = canvas.toDataURL("image/png");
        var url = canvas.toDataURL("image/png");
        image.src = url;
        $('.printkali').append(image);
        // a.download = 'myfile.png';
        // a.click();
        });
      }
    }, 
  });


});



    
    </script>

<?php $this->load->view('layouts/footer'); ?>
