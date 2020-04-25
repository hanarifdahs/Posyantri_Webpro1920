
<main role="main">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide" src="<?=base_url()?>assets/img/posyandu1.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>Pemeriksaan Batita</h1>
          <p><a class="btn btn-lg btn-primary" href="<?php echo base_url('Pasien/Jadwal'); ?>" role="button">Mulai Booking</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide" src="<?=base_url()?>assets/img/posyandu2.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Vaksin</h1>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="<?=base_url()?>assets/img/posyandu3.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1>Senam Hamil</h1>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="<?=base_url()?>assets/img/posyandu6.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1>Pembinaan Kader Posyandu</h1>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider" >

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Pemeriksaan bayi usia tiga tahun</h2>
      <p class="lead">Pemeriksaan bayi usia tiga tahun dibantu oleh kader posyandu dan diadakan pemberian vaksin untuk bayi</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="<?=base_url()?>assets/img/posyandu4.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Sosialisasi ibu hamil</h2>
      <p class="lead">Pemeriksaan kesehatan bayi dalam kandungan pada ibu hamil serta sosialisasi mengenai kesehatan kandungan pada ibu hamil</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="<?=base_url()?>assets/img/posyandu5.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <!-- /END THE FEATURETTES -->