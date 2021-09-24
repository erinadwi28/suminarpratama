<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_layanan"><i class="fas fa-plus fa-sm"></i> Tambah Layanan</button>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>Judul Layanan</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach($layanan as $lyn) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $lyn->judul_layanan ?></td>
			<td><?php echo anchor('admin/data_layanan/edit/' .$lyn->id_layanan,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_layanan/hapus/' .$lyn->id_layanan,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>

	<?php endforeach;  ?>

	</table>

</div>


<!-- Modal -->
<div class="modal fade" id="tambah_layanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form input layanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'admin/data_layanan/tambah_aksi2' ?>" method="post" enctype="multipart/form-data" >

      		<div class="form-group">
      			<label>Judul Layanan</label>
      			<input type="text" name="judul_layanan" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Gambar Layanan</label><br>
      			<input type="file" name="gambar_layanan" class="form-control">
      		</div>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      		
      	</form>
      </div>
      
    </div>
  </div>
</div>