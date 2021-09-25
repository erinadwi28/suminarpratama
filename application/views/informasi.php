<link rel="stylesheet" type="text/css" href="assets/css/sb-admin-2.min.css">


<div class="container">
	<div class="row layananitas">
		<?php foreach ($detail_informasi as $detail) { ?>
		<div class="col">
			<img class="img-fluid mb-4" src="<?= base_url('uploads/informasi/') . $detail->gambar; ?>"
				alt="informasi_image" width="400">
			<p>INFO LEBIH DETAIL UNTUK PEMBUATAN DAN PERPANJANGAN BISA MENGHUBUNGI KAMI <br>
				Call/Whatsapp : 08562866778/Galih <br>
				Email : suminar.pratama05@gmail.com</p>
		</div>
		<div class="col">
			<h3><?= $detail->nama_dokumen; ?></h3>
			<h5>Deskripsi :</h5>
			<textarea name="deskripsi" id="deskripsi" cols="25" rows="10" class="form-control mb-2"
				readonly><?= $detail->deskripsi; ?></textarea>
			<h5>Persyaratan :</h5>
			<textarea name="persyaratan" id="persyaratan" cols="25" rows="10" class="form-control mb-2"
				readonly><?= $detail->persyaratan; ?></textarea>
			<h5>Prosedur :</h5>
			<textarea name="persyaratan" id="persyaratan" cols="25" rows="10" class="form-control mb-4"
				readonly><?= $detail->prosedur; ?></textarea>
		</div>
		<?php } ?>
	</div>
</div>
</div>
<footer class="text-light" style="background-color: #2F56C8">
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
