<div class="container-fluid text-center">
    <h3>Potofolio</h3>
        <p>Ini adalah beberapa layanan yang kami kerjakan</p>
    <div class="row mr-4">
    
    <?php foreach ($layanan as $lyn) : ?>

        <div class="card mr-3 mt-2" style="width: 18rem;">
          <img src="<?php echo base_url(). '/uploads/berita/'.$lyn->gambar_layanan ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $lyn->judul_layanan ?> </h5>
        </div>
    </div>

    <?php endforeach; ?>

    </div>

</div>