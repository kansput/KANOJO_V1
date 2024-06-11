<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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

          <!-- ***** Featured Games Start ***** -->
          <div class="row">
            <div class="col-lg-8">
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Our</em> Talents</h4>
                </div>
                <div class="owl-features owl-carousel">
                  <div class="item">
                    <div class="thumb">
                    <a href="<?= site_url("pageuser/spicy") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_spicy/1.jpeg" alt=""></a>
                      <div class="hover-effect">
                        <h6>Spicyuu</h6>
                      </div>
                    </div>
                    <h4>Spicyuu<br><span>Singapore</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 5</li>
                      <li><i class="fa-solid fa-rupiah-sign"></i></i>1M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                       <a href="<?= site_url("pageuser/freya") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_freya/5.jpeg" alt="">
                       </a>
                      <div class="hover-effect">
                        <h6>Freya</h6>
                      </div>
                    </div>
                    <h4>Freya<br><span>Indonesia</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 5</li>
                      <li><i class="fa-solid fa-rupiah-sign"></i></i> 500K</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                    <a href="<?= site_url("pageuser/bara") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_bara/1.jpg" alt="">
                    </a>
                      <div class="hover-effect">
                        <h6>Bara</h6>
                      </div>
                    </div>
                    <h4>Bara<br><span>Chinese</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 5</li>
                      <li><i class="fa-solid fa-rupiah-sign"></i></i>1M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                    <a href="<?= site_url("pageuser/catheez") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_catheez/catheez2.jpg" alt="">
                    </a>
                      <div class="hover-effect">
                        <h6>Catheez</h6>
                      </div>
                    </div>
                    <h4>Catheez<br><span>Indonesia</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 5</li>
                      <li><i class="fa-solid fa-rupiah-sign"></i></i> 600K</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                    <a href="<?= site_url("pageuser/azizi") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_azizi/2.jpg" alt="">
                    </a>
                      <div class="hover-effect">
                        <h6>Zee</h6>
                      </div>
                    </div>
                    <h4>Azizi <br><span>Indonesia</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 5</li>
                      <li><i class="fa-solid fa-rupiah-sign"></i></i> 500K</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                    <a href="<?= site_url("pageuser/hannahs") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_hannahs/2.jpg" alt="">
                    </a>
                      <div class="hover-effect">
                        <h6>Hannah</h6>
                      </div>
                    </div>
                    <h4>Hannah Stein<br><span>America</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 5</li>
                      <li><i class="fa-solid fa-rupiah-sign"></i></i>1M</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
             <!-- ***** our Queen ***** -->
            <div class="col-lg-4">
              <div class="top-downloaded">
                <div class="heading-section">
                  <h4><em>Our</em> Queen</h4>
                </div>
                <ul>
                  <li>
                  <a href="<?= site_url("pageuser/hansohee") ?>">
                    <img src="<?php echo base_url(); ?>assets/images/assets_hansohee/2.jpg" alt="" class="templatemo-item">
                  </a>
                    <h4>Han So Hee</h4>
                    <h6>Korean</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 5</span>
                    <span><i class="fa-solid fa-rupiah-sign"></i> 10M</span>
                    <div class="download">
                      <a href="#"><i class="fa-solid fa-chess-queen"></i></a>
                    </div>
                  </li>
                  <li>
                  <a href="<?= site_url("pageuser/kanna") ?>">
                    <img src="<?php echo base_url(); ?>assets/images/assets_kanna/2.jpg" alt="" class="templatemo-item">
                  </a>
                    <h4>Kanna Hashimoto</h4>
                    <h6>Japanese</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 5</span>
                    <span><i class="fa-solid fa-rupiah-sign"></i> 10M</span>
                    <div class="download">
                      <a href="#"><i class="fa-solid fa-chess-queen"></i></a>
                    </div>
                  </li>
                  <li>
                  <a href="<?= site_url("pageuser/wonyoung") ?>">
                    <img src="<?php echo base_url(); ?>assets/images/assets_wonyoung/2.jpg" alt="" class="templatemo-item">
                  </a>
                    <h4>Jan Won Young</h4>
                    <h6>Korean</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 5</span>
                    <span><i class="fa-solid fa-rupiah-sign"></i>6M</span>
                    <div class="download">
                      <a href="#"><i class="fa-solid fa-chess-queen"></i></a>
                    </div>
                  </li>
                </ul>
                <div class="text-button">
                  <a href="#talents">View All Games</a>
                </div>
              </div>
            </div>
          </div>
           <!-- *****  Batas our Queen ***** -->
          <div id="talents" class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Company</em> Talents</h4>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/spicy") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_spicy/1.jpeg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/spicy") ?>">Spicyuu</a> <br><span>Singapore</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.1.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/anna") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_anna/1.jpeg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/anna") ?>">Anna Baby</a> <br><span>Indonesia</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.600.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/catheez") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_catheez/catheez1.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/catheez") ?>">Catherine </a> <br><span>Indonesia</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.500.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/hannah") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_hannah/1.jpeg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/hannah") ?>">Hannah K.</a> <br><span>Los Angeles</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.2.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div> 

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/azizi") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_azizi/5.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/azizi") ?>">Azizi Asadel</a> <br><span>Indonesia</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.500.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/freya") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_freya/5.jpeg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/freya") ?>">Freya</a> <br><span>Indonesia</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.500.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/hanni") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_hanni/hanni1.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/hanni") ?>">hanni Pam</a> <br><span>Korean</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.6.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/hannahs") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_hannahs/3.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/hannahs") ?>">Hannah S.</a> <br><span>American</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.1.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                   <!-- ***** bariss ketigaa ***** -->
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/bara") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_bara/5.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/bara") ?>">Bara</a> <br><span>China</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp1.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/wonyoung") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_wonyoung/5.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/wonyoung") ?>"> Won Young</a> <br><span>Korean</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.6.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/elina") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_elina/1.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/elina") ?>"> Elina</a> <br><span>Uzbekistan</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.1.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/dasha") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_dasha/3.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/dasha") ?>">Dasha Taran</a> <br><span>Russia</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.1.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/kanna") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_kanna/4.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/kanna") ?>">Kanna</a> <br><span>Japanese</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.10.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/hansohee") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_hansohee/2.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/hansohee") ?>"> Han So Hee</a> <br><span>Korean</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.10.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/danielle") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_danielle/1.jpg" alt=""> </a>
                      <h4><a href="<?= site_url("pageuser/danielle") ?>"> Danielle</a> <br><span>Australia</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.6.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                    <a href="<?= site_url("pageuser/justine") ?>">
                      <img src="<?php echo base_url(); ?>assets/images/assets_justine/3.jpg" alt=""></a>
                      <h4><a href="<?= site_url("pageuser/justine") ?>">Justine Xie</a> <br><span>Chinese</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 5</li>
                        <li><i></i>Rp.1.000.000 / Hour</li>
                      </ul>
                    </div>
                  </div>

        </div>
      </div>
    </div>
  </div>
    
  <?php $this->load->view('_partials/footer.php'); ?>

  <?php $this->load->view('_partials/script.php'); ?>
    
  


  </body>

</html>
