<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assetsuser/img/atmlogo.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assetsuser/img/atmlogo.png">
  <title>
    <?php echo $title; ?>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url();?>assetsuser/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assetsuser/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url();?>assetsuser/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assetsuser/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>assetsuser/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
</head>

<body class="landing-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-primary shadow headroom">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="../index.html">
        <img src="<?php echo base_url();?>assetsuser/img/atmlogo.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="#">
                <img src="<?php echo base_url();?>assetsuser/img/atmlogo.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text"><i class="fas fa-bookmark"></i> Kategori</span>
            </a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">Umum</a>
              <a href="#" class="dropdown-item">Pemasaran</a>
              <a href="#" class="dropdown-item">Pariwisata</a>
              <a href="#" class="dropdown-item">Peternakan</a>
              <a href="#" class="dropdown-item">Vokasi</a>
              <a href="#" class="dropdown-item">Inspirasi</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Visit WEB Official">
              <i class="fa fa-firefox"></i>
              <span class="nav-link-inner--text d-lg-none">Web Official</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Subscribe us on Youtube">
              <i class="fa fa-youtube"></i>
              <span class="nav-link-inner--text d-lg-none">Youtube</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>user" class="btn btn-sm btn-success ml-4">Kembali</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
<div class="wrapper">
    <div class="container">
        <span class="badge badge-light mt-4"><?php echo $baca->kategori?></span>
        <h3 class="mt-2"><strong><?php echo $baca->judul?></strong></h3>
        <small class="">Penulis : <?php echo $baca->penulis?></small><hr>
        <div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive" src="<?php echo base_url().'uploads/pdf/'.$baca->ebook?>"></iframe>
        </div>
    </div>
</div>