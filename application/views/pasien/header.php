<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/carousel.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
	  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/mdb.min.css">
    
    <style>
      .modal-backdrop {
        z-index: 1;
      }
      
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
        <img src="<?=base_url()?>assets/img/logofixfix-removebg-preview-removebg-preview.png" width='50' height='50'alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <?php if ($aktif=='main'){ ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('Pasien'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Pasien'); ?>">Home <span class="sr-only">(current)</span></a>
            </li> 
            <?php };?>

            <?php if ($aktif=='jadwal'){ ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('Pasien/Jadwal'); ?>">Jadwal</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Pasien/Jadwal'); ?>">Jadwal</a>
            </li>
            <?php };?>

            <?php if ($aktif=='booking'){ ?>
            <li class="nav-item active">
              <a class="nav-link" href="">Antrian Saya</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="">Antrian Saya</a>
            </li>
            <?php };?>

            <?php if ($aktif=='account'){ ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('Pasien/Account'); ?>">My Account</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Pasien/Account'); ?>">My Account</a>
            </li>
            <?php };?>

        </ul>
        <ul>
          <div class="logout">
            <button style="margin-top: 8px;"type="button" class="btn btn-primary">Logout</button>
            <a class="nav-link" href="<?php echo base_url('auth/Logout'); ?>"></a>
  
        </ul>
    </nav>
    </header>
