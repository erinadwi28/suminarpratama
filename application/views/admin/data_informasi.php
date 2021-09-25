<div class="container-fluid mb-4">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_informasi"><i
			class="fas fa-plus fa-sm"></i> Tambah Informasi</button>

	<table class="table table-bordered mb-4">
		<tr>
			<th>NO</th>
			<th>NAMA DOKUMEN</th>
			<th>DESKRIPSI</th>
			<th>AKSI</th>
		</tr>

		<?php
		$no=1;
		foreach($informasi as $detail) : 	?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $detail->nama_dokumen ?></td>
			<td><?php echo $detail->deskripsi ?></td>
			<td><?php echo anchor('admin/data_informasi/edit/' .$detail->id_informasi, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
			</td>
		</tr>

		<?php endforeach;  ?>

	</table>
</div>

<!-- Modal Tambah-->
<div class="modal fade" id="tambah_informasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Informasi</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url(). 'admin/data_informasi/tambah_aksi' ?>" method="post"
					enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Dokumen</label>
						<input type="text" name="nama_dokumen" class="form-control">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<input type="text" name="deskripsi" class="form-control">
					</div>
					<div class="form-group">
						<label>Persyaratan</label>
                        <textarea name="persyaratan" id="persyaratan" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Prosedur</label>
                        <textarea name="prosedur" id="prosedur" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Gambar Dokumen</label><br>
						<input type="file" name="gambar" class="form-control">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save Changes</button>
			</div>
			</form>
		</div>
	</div>
</div>
