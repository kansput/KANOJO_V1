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
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="<?php echo base_url(); ?>assets/images/assets_anna/1.jpeg" alt=""
                      style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <span>Offline</span>
                      <h4>Anna Baby</h4>
                      <p> streamer | cosplayer | creator</p>
                      <div class="main-border-button">
                        <a href="#">Asking For Rent</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <ul>
                      <li>Nick<span>Anna Baby</span></li>
                      <li>Born<span> xx xxxx 2002</span></li>
                      <li>Hobby <span>Streaming | Cosplay | Gamers |</span></li>
                      <li>Rating <span>5</span></li>
                      <li>Price Rent <span>Rp.600.000/Hour </span></li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clips">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="heading-section">
                            <h4><em>Collection</em> Photos</h4>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div>
                              <img src="<?php echo base_url(); ?>assets/images/assets_anna/2.jpeg" alt=""
                                style="border-radius: 23px;">
                              <a href="<?php echo base_url(); ?>assets/images/assets_anna/2.jpeg"
                                target="_blank"><i>See Photo</i></a>
                            </div>
                            <div class="down-content">

                              <span><i class="fa fa-eye "></i> 250</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div>
                              <img src="<?php echo base_url(); ?>assets/images/assets_anna/3.jpeg" alt=""
                                style="border-radius: 23px;">
                              <a href="<?php echo base_url(); ?>assets/images/assets_anna/3.jpeg" target="_blank"><i>See Photo</i></a>
                            </div>
                            <div class="down-content">

                              <span><i class="fa fa-eye"></i> 183</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div>
                              <img src="<?php echo base_url(); ?>assets/images/assets_anna/4.jpeg" alt=""
                                style="border-radius: 23px;">
                              <a href="<?php echo base_url(); ?>assets/images/assets_anna/4.jpeg" target="_blank"><i>See Photo</i></a>
                            </div>
                            <div class="down-content">
                             
                              <span><i class="fa fa-eye"></i> 141</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div>
                              <img src="<?php echo base_url(); ?>assets/images/assets_anna/5.jpeg" alt=""
                                style="border-radius: 23px;">
                              <a href="<?php echo base_url(); ?>assets/images/assets_anna/5.jpeg" target="_blank"><i>See Photo</i></a>
                            </div>
                            <div class="down-content">

                              <span><i class="fa fa-eye"></i> 91</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div>
                              <img src="<?php echo base_url(); ?>assets/images/assets_anna/6.jpeg" alt=""
                                style="border-radius: 23px;">
                              <a href="<?php echo base_url(); ?>assets/images/assets_anna/6.jpeg" target="_blank"><i>See Photo</i></a>
                            </div>
                            <div class="down-content">

                              <span><i class="fa fa-eye"></i> 91</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div>
                              <img src="<?php echo base_url(); ?>assets/images/assets_anna/7.jpeg" alt=""
                                style="border-radius: 23px;">
                              <a href="<?php echo base_url(); ?>assets/images/assets_anna/7.jpeg" target="_blank"><i>See Photo</i></a>
                            </div>
                            <div class="down-content">

                              <span><i class="fa fa-eye"></i> 91</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div>
                              <img src="<?php echo base_url(); ?>assets/images/assets_anna/8.jpeg" alt=""
                                style="border-radius: 23px;">
                              <a href="<?php echo base_url(); ?>assets/images/assets_anna/8.jpeg" target="_blank"><i>See Photo</i></a>
                            </div>
                            <div class="down-content">

                              <span><i class="fa fa-eye"></i> 91</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div>
                              <img src="<?php echo base_url(); ?>assets/images/assets_anna/9.jpeg" alt=""
                                style="border-radius: 23px;">
                              <a href="<?php echo base_url(); ?>assets/images/assets_anna/9.jpeg" target="_blank"><i>See Photo</i></a>
                            </div>
                            <div class="down-content">

                              <span><i class="fa fa-eye"></i> 91</span>
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

          <?php $this->load->view('_partials/script.php'); ?>

          <?php $this->load->view('_partials/footer.php'); ?>





</body>