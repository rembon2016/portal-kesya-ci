<style>
    #member_cards {
        position: relative;
    }
    
    .ser-valid-begin {
        position: absolute;
        font-size: 34px;
        font-weight: 600;
        color: #fff;
        top: 107px;
        right: 29px;
    }

    .ser-valid-end {
        position: relative;
        position: absolute;
        right: 32px;
        color: #fff;
        top: 184px;
        font-size: 34px;
        font-weight: 600;
    }

    .ser-nama {
        position: absolute;
        right: 27px;
        bottom: 30px;
        color: #fff;
        font-weight: 700;
    }

    #member_cards.hide {
        display: none;
    }

    .printkali img {
        width: 100% !important;
    }
</style>

<div class="card shadow mt-3">
              <div class="card-body">
              <div class="container p-5">
              <span>
                  
                    <a href="javascript:void(0)" id="btnDownload" class="btn btn-success mb-2"><i class="fa fa-print"></i> <span>Download</span> </a>

              </span>
              <div class="wrapper-mem" style="width:100%;height:100%">
              <div style="width:857px;height:457px;"  id="member_cards">
                  <div class="ser-valid-begin"><?php 
                  
                    $s = $sertifikat->tgl_registrasi;
                    $date = strtotime($s);
                    echo date('d/m/Y', $date);
                    ?> </div>
                  <div class="ser-valid-end">10/2022</div>

                  <h1 class="ser-nama"><?= $sertifikat->nama_lengkap; ?></h1>

                  <img src="<?= base_url('assets/img/membercard.png') ?>" alt=""  style="width:100%; height:100%"> 
              </div>
            </div>
             
              <div class="printkali" style="width:100%;height"></div>


              </div>

            </div>


            <script>

                $(document).ready(function(){
                    
                    $("#member_cards").addClass("hide"); 
                })

              

                      $('#btnDownload').click(function(){



                              $('#btnDownload span').text("Mohon Tunggu...")

                                var element2 = document.querySelector(".printkali");
                                console.log(element2)
                                html2canvas(element2, {
                                    scale: 3
                                }).then(function(canvas) {
                                    var url = canvas.toDataURL("image/png");
                                    const a = document.createElement('a') 
                                    a.setAttribute('download', 'kartu_anggota_kktpti_<?= $sertifikat->nama_lengkap; ?>.png')
                                    a.setAttribute('href', url)
                                    a.click()

                               
                                });
                                
                                $('#btnDownload span').text("Download");

                                


                })

              
            </script>
