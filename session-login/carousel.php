<?php
require_once('header.php');
require_once('koneksi.php');
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="./carousel/1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Slide pertama</h5>
            <p>Isi slide pertama</p>
        </div>
    </div>
 
    <div class="carousel-item">
      <img class="d-block w-100" src="./carousel/3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Slide ketiga</h5>
            <p>Isi slide ketiga</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>