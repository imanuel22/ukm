<div class="rounded-4 p-4 bg-info mt-3">

<h1 class="fw-bold ">EDIT Jurusan</h1>
<form action="<?= base_url('csuperadmin/update_data_jurusan')?>" method="post">
<input type="hidden" name="id_jurusan" value="<?=$data_jurusan_id->id_jurusan?>">
		<div class="mb-3">
			<label for="nama_jurusan" class="form-label">nama_jurusan</label>
			<input type="text" name="nama_jurusan" class="form-control" id="nama_jurusan" value="<?=$data_jurusan_id->nama_jurusan?>">
		</div>
		<div class="mb-3">
			<label for="NoSKJurusan" class="form-label">NoSKJurusan</label>
			<input type="text" name="NoSKJurusan" class="form-control" id="NoSKJurusan" value="<?=$data_jurusan_id->NoSKJurusan?>">
		</div>
		<div class="mb-3">
			<label for="Kajur" class="form-label">Kajur</label>
			<input type="text" name="Kajur" class="form-control" id="Kajur" value="<?=$data_jurusan_id->Kajur?>">
		</div>
		<div class="mb-3">
			<label for="keterangan" class="form-label">keterangan</label>
			<input type="text" name="keterangan" class="form-control" id="keterangan" value="<?=$data_jurusan_id->keterangan?>">
		</div>	
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
</div>
