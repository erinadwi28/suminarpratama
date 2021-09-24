<div class="container-fluid col-md-12">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/caro/carosel1.jpg')  ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
<br><br><br><br>


<div class="row ml-3 text-center " >

    <?php foreach ($berita as $brt) : ?>

  <div class="card mr-4 " style="width: 16rem;">
  <img src="<?php echo base_url().'/uploads/berita/'.$brt->gambar_berita ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <a style="text-decoration: none; " href="<?php echo $brt->link ?>">
    <p class="card-text"><?php echo $brt->keterangan ?></p>
  </div>
  </a>
</div>

  <?php endforeach; ?>

</div>
</div>
<footer class="text-light mt-3" style="background-color: #2F56C8">
  <div class="row">
    <div class="col-md-12">
      <h5>CV Suminar Pratama</h5>
      <ul>
        <p>Jl. Kenanga 1298 Sambilegi Kidul, Maguwoharjo, Depok, Sleman, Yogyakarta</p>
        <p>suminar.pratama05@gmail.com</p>
      </ul>
    </div>
  </div>
</footer>