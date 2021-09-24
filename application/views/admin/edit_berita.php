<div class="container-fluid">
	<h3>EDIT DATA BERITA</h3>

	<?php foreach($berita as $brt) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_berita/update' ?>">

			<div class="for-group">
				<label>Keterangan</label>
				<input type="hidden" name="id_berita" class="form-control" value="<?php echo $brt->id_berita ?>">
				<input type="text" name="keterangan" class="form-control" value="<?php echo $brt->keterangan ?>">
			</div>

			<div class="for-group">
				<label>Link berita</label>
				<input type="text" name="link" class="form-control" value="<?php echo $brt->link ?>">
			</div>

			<div class="for-group">
				<label>Gambar Berita</label>
				<input type="file" name="gambar_berita" class="form-control" value="<?php echo $brt->gambar_berita ?>">
			</div>

			<button type="submit" class="btn btn-primary mt-3"> Simpan</button>
			
			
		</form>

	<?php endforeach;  ?>	
</div>	