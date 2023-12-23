<h3 class="mb-4">Form Tambah Proker</h3>
<div class="card bg-primary ">
	<div class="card-body">
    <form action="<?=base_url('cfungsionaris/insert_proker')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
    <div class="mb-3">
			<label for="nama_proker" class="form-label text-light">nama_proker</label>
			<input type="text" name="nama_proker" id="nama_proker" class="form-control bg-light">
	</div>	
	<div class="mb-3">
			<label for="deskripsi" class="form-label text-light">deskripsi</label>
			<input type="text" name="deskripsi" id="deskripsi" class="form-control bg-light">
	</div>	
	<div class="mb-3">
			<label for="peraturan" class="form-label text-light">peraturan</label>
			<input type="text" name="peraturan" id="peraturan" class="form-control bg-light">
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