<h3 class="mb-4">Form Edit Jabatan</h3>
<div class="card bg-primary ">
	<div class="card-body">
    <form action="<?=base_url('cfungsionaris/update_jabatan')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
    <input type="hidden" name="id_jabatan" value="<?=$data_jabatan_id->id_jabatan?>">
    <div class="mb-3">
			<label for="nama_jabatan" class="form-label text-light">nama_jabatan</label>
			<input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control bg-light" value="<?=$data_jabatan_id->nama_jabatan?>">
	</div>	
	<div class="mb-3">
			<label for="deskripsi_jabatan" class="form-label text-light">deskripsi_jabatan</label>
			<input type="text" name="deskripsi_jabatan" id="deskripsi_jabatan" class="form-control bg-light"  value="<?=$data_jabatan_id->deskripsi_jabatan?>">
	</div>	
    <div class="mb-3 row">
			<div class="col-6">
				<button type="submit" class="btn btn-success col-12">Submit</button>
			</div>
			<div class="col-6">
				<button type="reset" class="btn btn-danger col-12">Reset</button>
			</div>
		</div>
	</form>
	</div>
</div>	
<hr class="border border-primary border-2 opacity-50">