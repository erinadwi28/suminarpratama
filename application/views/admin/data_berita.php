<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_berita"><i class="fas fa-plus fa-sm"></i> Tambah Berita</button>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>KETERANGAN</th>
			<th>LINK</th>
			<th colspan="2">AKSI</th>
		</tr>

		<?php
		$no=1;
		foreach($berita as $brt) : 	?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $brt->keterangan ?></td>
			<td><?php echo $brt->link ?></td>
			<td><?php echo anchor('admin/data_berita/edit/' .$brt->id_berita, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?> </td>
			<td><?php echo anchor('admin/data_berita/hapus/' .$brt->id_berita, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>

	<?php endforeach;  ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_berita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Berita</h5>
        <button type="button" class="btn-close" data dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url(). 'admin/data_berita/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
      		

      		<div class="form-group">
      			<label>Keterangan</label>
      			<input type="text" name="keterangan" class="form-control">
      		</div>

          <div class="form-group">
            <label>Gambar Berita</label><br>
            <input type="file" name="gambar_berita" class="form-control">
          </div>

      		<div class="form-group">
      			<label>Link Berita</label>
      			<input type="text" name="link" class="form-control">
      		</div>

      	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>