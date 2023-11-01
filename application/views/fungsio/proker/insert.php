<div class="container">
	<h1>Form INPUT</h1>
	<form action="<?= base_url('cfungsio/prosesinsertproker')?>" method="post">
		<div class="mb-3">
			<label for="nama_proker" class="form-label">Nama proker</label>
			<input type="text" name="nama_proker" class="form-control" id="nama_proker">
		</div>
		<div class="mb-3">
			<label for="deskripsi" class="form-label">Deskripsi</label>
			<input type="text" name="deskripsi" class="form-control" id="deskripsi">
		</div>
		<div class="mb-3">
			<label for="peraturan" class="form-label">Peraturan</label>
			<input type="text" name="peraturan" class="form-control" id="peraturan">
		</div>
		<div class="mb-3">
			<label for="img" class="form-label">img</label>
			<input type="file" name="img" class="form-control" id="img">
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
</div>
