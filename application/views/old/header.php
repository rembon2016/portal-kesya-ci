<!-- header area start -->
<style>
    .btt-btn {
  display: inline-block;
  background-color: #FF9800;
  width: 50px;
  height: 50px;
  text-align: center;
  border-radius: 4px;
  position: fixed;
  bottom: 30px;
  right: 30px;
  transition: background-color .3s, 
    opacity .5s, visibility .5s;
  opacity: 0;
  visibility: hidden;
  z-index: 1000;
}
.btt-btn::after {
  content: "\f077";
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  font-size: 2em;
  line-height: 50px;
  color: #fff;
}
.btt-btn:hover {
  cursor: pointer;
  background-color: #333;
}
.btt-btn:active {
  background-color: #555;
}
.btt-btn.show {
  opacity: 1;
  visibility: visible;
}

.menubar.hide {
    
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #fff;
    z-index: 99;
    transition: all ease-in-out 0.5s;
}
</style>

<script src="<?php echo base_url()?>theme/vendor/js/jquery.min.js"></script>


<a class="btt-btn"></a>

<header class="header-area ptb-15">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
					    <div class="header-left-content">
					        <ul>
					            <li><a href="#"><i class="fa fa-phone"></i>0812 0000 0000</a></li>
					            <li><a href="#"><i class="fa fa-envelope"></i>info@kktpti.org</a></li>
					        </ul>
					    </div>
					</div>
					<div class="col-md-5">
					    <div class="header-right-content">
					        <ul>
					            <!-- <li>
                                    <select>
                                        <option value="En">En</option>
                                        <option value="Bd">Bd</option>
                                    </select>
                                </li> -->
								<!-- <li><a href="#" class="krishok-cart"><i class="fa fa-shopping-cart"></i> <span>3</span></a></li> -->

                                <?php
                                    $user_id = $this->session->userdata('user_id');
                                    if($user_id != ""){ ?>
                                    <!-- <a href="#"  class="popup-show" ></a>    -->

                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= $this->session->userdata('username'); ?>
                                        </button> 
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <a href="<?= site_url('member/profil'); ?>" class="dropdown-item text-dark" type="button">Profil</a>
                                            <a href="<?= site_url('login/logout'); ?>" class="dropdown-item text-dark" type="button">Logout</a> 
                                        </div>
                                        </div>
                                 <?php  }else{ ?> 
					            <li><a href="http://dashboard.kktpti.org/" class="popup-show">Membership</a>
					                <div class="login-popup login-form contact-form">
                                        <h4>Login</h4>
                                        <form action="<?= site_url('login/signin');?>" method="POST"> 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="contact-container">
                                                        <input type="email" name="email" placeholder="Email Address">
											            <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-15"> 
                                                    <div class="contact-container">
                                                        <input type="password" name="password" placeholder="Password">
											            <i class="fa fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-left mb-15">
                                                    <input type="checkbox"> 
                                                    <p>Remember me</p>
                                                </div>
                                                <div class="col-sm-6 text-right mb-15">
                                                    <div class="popup-light">
                                                        <p>Forget Password ?</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-30">
                                                    <button  type="submit" class="krishok-btn">LOGIN</button>
                                                </div> 
                                                <div class="col-sm-12 mb-30">
                                                    <a href="<?= site_url('register') ?>" class="krishok-btn" style="width:100%">REGISTER</a>
                                                </div>  
                                                <!-- <div class="col-sm-12 mb-15">
                                                    <div class="sign-with">
                                                        <p>Or Sign In With</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <a href="#" class="login-with"><i class="fa fa-facebook"></i></a>
                                                    <a href="#" class="login-with"><i class="fa fa-twitter"></i></a>
                                                </div> -->
                                                <!-- <div class="col-sm-12 mt-30"> 
                                                    <p>Don’t Have an Account ? <a href="<?= site_url('register') ?>" class="registration-form-show">Create Now</a></p>
                                                </div> -->
                                            </div>
                                        </form>
					                    <div class="popup-close"><i class="fa fa-close"></i></div>
					                </div>

                                    <?php } ?>

					                <div class="login-popup registration-form contact-form">
                                        <h4>Create Account</h4>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="contact-container">
                                                        <input type="text" placeholder="Username">
											            <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="contact-container">
                                                        <input type="email" placeholder="Email Address">
											            <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="contact-container">
                                                        <input type="password" placeholder="Password">
											            <i class="fa fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-15">
                                                    <input type="password" placeholder="Retype Password">
                                                </div>
                                                <div class="col-sm-12 text-left mb-15">
                                                    <input type="checkbox">
                                                    <p>Agree with <span>terms and condition</span></p>
                                                </div>
                                                <div class="col-sm-12 mb-20">
                                                    <button class="krishok-btn">Create Account</button>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>Already Have an Account ?  <a href="#" class="login-form-show">Login Now</a></p>
                                                </div>
                                            </div>
                                        </form>
					                    <div class="popup-close"><i class="fa fa-close"></i></div>
					                </div>
					            </li>
					        </ul>
					    </div>
					</div>
				</div>
			</div>
</header><!-- header area end -->


<!-- menu area start -->
<div class="menubar">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6">
						<div class="logo">
							<a href="<?php echo base_url();?>"><img width="200" height="120" src="<?php echo base_url();?>theme/img/logo.png" alt="logo-kkt-pti"></a>
						</div>
					</div>
					<div class="col-md-10 col-sm-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li class="active"><a href="<?php echo base_url();?>">Beranda</a></li>
                                <li><a href="#">Tentang Kami <i class="fa fa-angle-down"></i></a>
                                     <ul>
										<li><a href="<?php echo base_url();?>sejarah">Sejarah</a></li>
										<li><a href="<?php echo base_url();?>visi">Visi & Misi</a></li>
										<li><a href="<?php echo base_url();?>organisasi">Struktur Organisasi</a></li>
										<li><a href="<?php echo base_url();?>sekretariat">Sekretariat</a></li>
                                        <li><a href="<?php echo base_url();?>pengurus">Profil Pengurus</a></li>
									</ul>

                                </li>
                                <li><a href="#">Gallery <i class="fa fa-angle-down"></i></a>
                            
                                    <ul>
										<li><a href="<?php echo base_url();?>photo">Photo</a></li>
										<li><a href="<?php echo base_url();?>video">Video</a></li>
										
									</ul>
                                </li>
                                <li><a href="<?php echo base_url();?>blog">Blog</a></li>
                                <!-- <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
									<ul>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
									</ul>
								</li> -->
                           
                                <li><a href="<?php echo base_url();?>Contact">Hubungi Kami</a></li>
                                <li>
                                    <button type="submit" class="toggle-pade">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <form class="navbar-form form-box" role="search">
                                        <input type="text" placeholder="Search">
                                    </form>
                                </li>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
</div><!-- menu area end -->