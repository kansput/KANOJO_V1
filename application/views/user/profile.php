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

          <!-- ***** Banner Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="<?= base_url("assets/images/") . $user['image'];?>" alt="..." class="card-img">
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <span>Online</span>
                      <h4><?= $user['nama'];?></h4>
                      <p>Welcome New Member</p>
                      <div class="main-border-button">
                        <a href=<?= base_url('login/logout'); ?>>logout</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <ul>
                      <li>Email<span><?= $user['email'];?></span></li>
                      <li>NIK <span><?= $user['nik'];?></span></li>
                      <li>Alamat <span><?= $user['alamat'];?></span></li>
                      <li>Jenis Kelamin <span><?= $user['jenis_kelamin'];?></span></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="<?= base_url('user/ubahprofil'); ?>">Ubah Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

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
