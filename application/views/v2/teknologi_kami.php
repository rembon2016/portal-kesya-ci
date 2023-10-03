
<?php $this->load->view('v2/layouts/header'); ?>

<section class="py-5" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>
 
      <div class="container ">
        <div class="row align-items-center mt-5">
          <div class="col-md-12 col-lg-12 col-xxl-12 py-3  text-sm-start">

            <h3 class="mt-6 lh-sm fs-4 fs-lg-5 fs-xl-6"> Teknologi di dalam cluster KKT-PTI</h3>

            <ol>
                <li> Solar panel system sebagai pemasok ketersediaan listrik</li>
                    <div class="row p-4">
                        <div class="col-md-5"> <img src="<?= base_url('assets/img/solar_panel.jpg');?>" class="img img-thumbnail" width="400" alt=""></div>
                        <div class="col-md-7"> <p class="  text-justify">Semua kebutuhan listrik didalam cluster seluas 2 Ha di pasok oleh solar panel yang disediakan, dimana listrik ini untuk keperluan menghidupi lampu, pompa air, dan board-board IOT / microcontroller yang berfungsi sebagai alat untuk menjalankan automatisasi dalam cluster
                    </p></div>
                     </div>
               
               
                <li>Plant monitoring system</li>
                        <div class="row p-4">
                        <div class="col-md-5"> <img src="<?= base_url('assets/img/pms.jpg');?>" class="img img-thumbnail" width="400" alt=""></div>
                        <div class="col-md-7"> 
                        <p class="  text-justify">Board microcontroller yang berfungsi untuk menjalankan sensor yang dapat mendeteksi kadar air dalam tanah/ kelembaban tanah/ ph tanah, air dan suhu disekitar tanaman.</p>
                        </div>
                     </div>
                
                <li>Irigtion smart control system by mobile device</li>
                <div class="row p-4">
                        <div class="col-md-5"> <img src="<?= base_url('assets/img/irigasi.jpg');?>" class="img img-thumbnail" width="400" alt=""></div>
                        <div class="col-md-7"> 
                        <p class="  text-justify">Board atau system microcontroller yang berfungsi untuk mengotrol irigasi / pengairan tanaman yang dapat di control atau dikelola secara otomatis maupun manual dengtan menggunakan mobile device/ android.</p>
                        </div>
                     </div>
                     
                <li>Wheater monitoring system  kelembaban udara</li>
                <div class="row p-4">
                        <div class="col-md-5"> <img src="<?= base_url('assets/img/whether.jpg');?>" class="img img-thumbnail" width="400" alt=""></div>
                        <div class="col-md-7"> 
                        <p class="  text-justify">Board yang berfungsi untuk memonitoring cuaca termasuk kelembaban udara dengan menggunakan sensor dan hasil nya akan di tampilkan di android monitoring.</p>
                        </div>
                     </div>
            </ol>
           
          </div>
        </div>
       
      </div>
      

    </section>

    

    
    
    
    <?php $this->load->view('v2/layouts/footer'); ?>
