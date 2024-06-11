<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>

  <?php $this->load->view('_partials/preloader.php'); ?>

  <?php $this->load->view('_partials/header.php'); ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To Kanojo</h6>
                  <h4><em>Find</em> Your Dream Partner </h4>
                  <div class="main-button">
                    <a href="browse.html">Find Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Company</em> Talents</h4>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="<?php echo base_url(); ?>assets/images/assets_spicy/1.jpeg" alt="">
                      <h4><a href="<?= site_url("pageuser/spicy") ?>">Spicyuu</a> <br><span>Singapore</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.1.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="<?php echo base_url(); ?>assets/images/assets_anna/1.jpeg" alt="">
                      <h4><a href="<?= site_url("pageuser/anna") ?>">Anna Baby</a> <br><span>Indonesia</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.600.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="<?php echo base_url(); ?>assets/images/assets_catheez/catheez1.jpg" alt="">
                      <h4><a href="<?= site_url("pageuser/catheez") ?>">Catherine </a> <br><span>Indonesia</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.500.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/assets_hannah/1.jpeg" alt="">
                      <h4><a href="<?= site_url("pageuser/hannah") ?>">Hannah K.</a> <br><span>Los Angeles</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.2.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div> 



                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/assets_azizi/5.jpg" alt="">
                      <h4><a href="<?= site_url("pageuser/azizi") ?>">Azizi Asadel</a> <br><span>Indonesia</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.500.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/assets_freya/5.jpeg" alt="">
                      <h4><a href="<?= site_url("pageuser/freya") ?>">Freya</a> <br><span>Indonesia</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.500.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/assets_hanni/hanni1.jpg" alt="">
                      <h4><a href="<?= site_url("pageuser/hanni") ?>">hanni Pam</a> <br><span>Korean</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.6.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="<?php echo base_url(); ?>assets/images/assets_hannahs/3.jpg" alt="">
                      <h4><a href="<?= site_url("pageuser/hannahs") ?>">Hannah S.</a> <br><span>American</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.1.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="<?= site_url("pageuser/usertalent") ?>">Discover More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="start-stream">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>How To Start Your</em> DATE</h4>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon">
                      <img src="assets/images/login.png" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>Register and Login </h4>
                    <p> Registrasi dan Login Akun Anda </p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon">
                      <img src="assets/images/partner.png" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>Find Your Patner </h4>
                    <p>Cari dan Temukan pasangan Idealmu</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon">
                      <img src="assets/images/rent.png" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4>Asking For Rent </h4>
                    <p>Ajukan Untuk Melakukan Penyewaan</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="profile.html">Find Your Partner</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    <!-- ***** Details Start ***** -->
                    <div class="game-details">
            <div class="row">
              <div id="about" class="col-lg-12">
                <h2>Kanojo Details</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                   
                    <div class="col-lg-4">
                      <img src="assets/images/girl1.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="assets/images/girl2.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="assets/images/girl3.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-12">
                      <p>Selamat datang di Kanojo - tempat di mana cerita cinta Anda dimulai! Kami tidak hanya menawarkan sebuah pengalaman, tapi juga kesempatan untuk menjelajahi kencan yang penuh dengan kejutan dan momen tak terlupakan.<a href="https://saweria.co/demonx" target="_blank">Dukung Kami Lewat Saweria!</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->
          <!-- ***** Gaming Library Start ***** -->
            
          <!-- ***** Gaming Library End ***** -->
            
 
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view('_partials/footer.php'); ?>

  <?php $this->load->view('_partials/script.php'); ?>



</body>

</html>