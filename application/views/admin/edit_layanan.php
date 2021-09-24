<div class="container-fluid">
	<h3>Edit Data Layanan</h3>

	<?php foreach ($layanan as $lyn) :  ?>

		<form method="post" action="<?php echo base_url(). 'admin/data_layanan/update' ?>">
			
			<div class="for-group">
				<label>Judul Layanan</label>
				<input type="hidden" name="id_layanan" class="form-control" value="<?php echo $lyn->id_layanan ?>">
				<input type="text" name="judul_layanan" class="form-control" value="<?php echo $lyn->judul_layanan ?>">
			</div>

			<div class="for-group mt-1">
				<label>Gambar Layanan</label>
				<input type="file" name="gambar_layanan" class="form-control" value="<?php echo $lyn->gambar_layanan ?>">
			</div>

			<button type="submit" class="btn btn-primary mt-3"> Simpan</button>

		</form>

	<?php endforeach;  ?>
</div>