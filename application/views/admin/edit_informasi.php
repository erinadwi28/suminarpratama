<div class="container-fluid">
	<h3>EDIT DATA INFORMASI</h3>

	<?php foreach($informasi as $detail) : ?>

	<form action="<?php echo base_url(). 'admin/data_informasi/update/' ?><?= $detail->id_informasi; ?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nama Dokumen</label>
			<input type="text" name="nama_dokumen" class="form-control" value="<?= $detail->nama_dokumen; ?>">
		</div>
		<div class="form-group">
			<label>Deskripsi</label>
			<textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"><?= $detail->deskripsi; ?></textarea>
		</div>
		<div class="form-group">
			<label>Persyaratan</label>
			<textarea name="persyaratan" id="persyaratan" cols="30" rows="10" class="form-control"><?= $detail->persyaratan; ?></textarea>
		</div>
		<div class="form-group">
			<label>Prosedur</label>
			<textarea name="prosedur" id="prosedur" cols="30" rows="10" class="form-control"><?= $detail->prosedur; ?></textarea>
		</div>
		<div class="form-group">
			<img class="d-block mb-2" src="<?= base_url('uploads/informasi/') . $detail->gambar; ?>"
			alt="Card image cap" width="190">
			<label>Gambar Dokumen</label><br>
			<input type="file" name="gambar" class="form-control">
		</div>

		<button type="submit" class="btn btn-primary mt-3 mb-4"> Simpan</button>
	</form>

	<?php endforeach;  ?>
</div>
