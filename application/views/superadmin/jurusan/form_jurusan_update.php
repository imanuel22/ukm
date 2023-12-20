<h3 class="mb-4">Form Edit Jurusan</h3>
<div class="card bg-primary">
	<div class="card-body">
<form action="<?= base_url('csuperadmin/update_jurusan')?>" method="post">
<input type="hidden" name="id_jurusan" value="<?=$data_jurusan_id->id_jurusan?>">
		<div class="mb-3">
		<label for="nama_jurusan" class="form-label text-light">Nama Jurusan</label>
			<input type="text" name="nama_jurusan" class="form-control bg-light" id="nama_jurusan" value="<?=$data_jurusan_id->nama_jurusan?>">
		</div>
		<div class="mb-3">
		<label for="NoSKJurusan" class="form-label text-light">NoSk. Jurusan</label>
			<input type="text" name="NoSKJurusan" class="form-control bg-light" id="NoSKJurusan" value="<?=$data_jurusan_id->NoSKJurusan?>">
		</div>
		<div class="mb-3">
		<label for="Kajur" class="form-label text-light">Kepala Jurusan</label>
			<input type="text" name="Kajur" class="form-control bg-light" id="Kajur" value="<?=$data_jurusan_id->Kajur?>">
		</div>
		<div class="mb-3">
		<label for="keterangan" class="form-label text-light">Keterangan</label>
			<input type="text" name="keterangan" class="form-control bg-light" id="keterangan" value="<?=$data_jurusan_id->keterangan?>">
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
