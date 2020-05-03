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
            <li class="nav-item"style="padding:5px;">
              <a class="nav-link" style="border-radius: 10px" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"style="padding:5px;">
              <a onclick="scrollWin()" style="border-radius: 10px" class="nav-link">About <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item "style="padding:5px;">
              <button type="button" style="border-radius: 10px"class="nav-link active btn btn-primary" data-toggle="modal" data-target="#login">Login</button>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="modal fade" id="status" class="status" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <div class="form-group">
              <?= $this->session->flashdata('flash'); ?>
            </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form method="post" action="<?php echo base_url('main/register'); ?>">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputUsername1">NIK</label>
                <input type="username" class="form-control" id="exampleInputUsername1" placeholder="Masukkan NIK" name="nik">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Nama</label>
                  <input type="username" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Umur</label>
                <input type="username" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Umur" name="umur">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Alamat</label>
                <input type="username" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Alamat" name="alamat">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="username" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Username" name="username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
            </div>
            <div class="modal-footer">
            <a type="button" class="btn btn-secondary" onclick="$('#register').one('hidden.bs.modal', function() { $('#login').modal('show'); }).modal('hide');">Sudah ada akun?</a>
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="login" class="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form method="post" action="<?php echo base_url('main/actionLogin'); ?>">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="username" class="form-control" id="exampleInputUsername1" placeholder="Enter username" name="username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
            </div>
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#register">Belum ada akun?</button>-->
              <a type="button" class="btn btn-secondary" onclick="$('#login').one('hidden.bs.modal', function() { $('#register').modal('show'); }).modal('hide');">Belum ada akun?</a>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>