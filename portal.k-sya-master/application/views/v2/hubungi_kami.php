
<?php $this->load->view('v2/layouts/header'); ?>
<section class="py-8" id="Opportuanities">
      <div class="bg-holder d-none d-sm-block"
        style="background-image:url(../assets/v2/assets/img/illustrations/bg.png);background-position:left;background-size:225px 505px;margin-top:-5.5rem;">
      </div>

      <div class="container">
        <div class="row">
          <h3 class="lh-sm fs-4 fs-lg-5 fs-xl-6">Hubungi Kami</h3>
          <div class="col-md-6">

            <div class="card shadow mt-3">
              <div class="card-body">
                <h3 class="lh-sm f">Kirim Pesan</h3>
                <form action="" method="post">
                  <div class="form-group mt-2">
                    <div class="label">Nama Lengkap</div>
                    <input type="text" placeholder="Masukan nama anda" class="form-control">
                  </div>
                  <div class="form-group mt-2">
                    <div class="label">Email</div>
                    <input type="text" placeholder="Masukan email anda" class="form-control">
                  </div>
                  <div class="form-group mt-2">
                    <div class="label">Judul</div>
                    <input type="text" placeholder="Judul" class="form-control">
                  </div>
                  <div class="form-group mt-2">
                    <div class="label">Message</div>
                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success">Kirim</button>
                  </div>
                </form>
              </div>
            </div>



          </div>
          <div class="col-md-6">
            <div class="card shadow">
              <div class="card-body">
                <h3 class="lh-sm f">Alamat</h3>
                <p>Jl. Terusan Bandengan No.1,<br> RT.6/RW.16, Pejagalan, Kec. Penjaringan, Kota Jkt Utara, <br> Daerah Khusus Ibukota Jakarta 14450 (Belakang Hotel Hariston)</p>


                </p>
              </div>
            </div>

            <div class="card shadow mt-2">
              <div class="card-body">
                <!-- <h3 class="lh-sm f">Maps</h3> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9628050540387!2d106.78645431476866!3d-6.135699995557462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zNsKwMDgnMDguNSJTIDEwNsKwNDcnMTkuMSJF!5e0!3m2!1sid!2sid!4v1630226790465!5m2!1sid!2sid" style="border:0; width:100%; height:280px" allowfullscreen="" loading="lazy"></iframe>

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
<?php $this->load->view('v2/layouts/footer'); ?>
