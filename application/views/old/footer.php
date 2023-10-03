<?php $ip    = $this->input->ip_address(); // Mendapatkan IP user
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
        $month  = date("m"); // Mendapatkan tanggal sekarang
		$waktu = time(); //
		$timeinsert = date("Y-m-d H:i:s");

		// Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
		$s = $this->db->query("SELECT * FROM visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
		$ss = isset($s)?($s):0;

		// Kalau belum ada, simpan data user tersebut ke database
		if($ss == 0){
			$this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
		}
	 
	// Jika sudah ada, update
		else{
			$this->db->query("UPDATE visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
		}

		$pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='".$date."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
        $pengunjungbulanini  = $this->db->query("SELECT * FROM visitor WHERE MONTH(date)='".$month."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row(); 
		
		$totalpengunjung = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; // hitung total pengunjung
		
		$bataswaktu = time() - 300;
		
		$pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online

        
		
?>


<footer class="site-footer pt-75">
			<div class="container">
				<div class="row">
                    <div class="col-lg-5">
                        <div class="widget">
                            <h5 class="widget-title"><a href="#">Tentang Kami</a></h5>
                            <p>Komando kawasan Terpaut Pemuda Tani Indonesia</p>
                            <div class="widget-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title"><a href="#">Kontak Kami</a></h5>
                            <ul>
                                <li>Jalan Asem Baris Raya</li>
                                <li>Phone : 1234 5678 9123  </li>
                                <li>Email : Stevan@Example.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title"><a href="#">Instagram Feed</a></h5>
                            <div class="img-gallery">
                                <div class="single-img-gallery">
                                    <a href="#"><img src="<?php echo base_url()?>theme/vendor/img/widget/widget1.jpg" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="<?php echo base_url()?>theme/vendor/img/widget/widget2.jpg" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="<?php echo base_url()?>theme/vendor/img/widget/widget3.jpg" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="<?php echo base_url()?>theme/vendor/img/widget/widget4.jpg" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="<?php echo base_url()?>theme/vendor/img/widget/widget5.jpg" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="<?php echo base_url()?>theme/vendor/img/widget/widget6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="footer-bottom-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom">
                                <p>Copyright © 2021 - All Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</footer><!-- footer area end -->

        <script>
           var btn = $('.btt-btn');

            $(window).scroll(function() {
            if ($(window).scrollTop() > 54) {
                btn.addClass('show');
                $('.menubar').addClass("hide");
            } else {
                btn.removeClass('show');
                $('.menubar').removeClass("hide");
            }
            });

            btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
            });


        </script>


	
