<div class="rounded-4 p-4 bg-info mt-3">
<h1>Data Verif</h1>
<form action="<?=base_url('cbem/proses_verif')?>" method="post">
	<table class="table table-warning">
		<tr>
			<th>Nama mahasiswa</th>
			<td><input type="text" class="form-control-plaintext" value="<?=$datamhs->nama_mahasiswa?>" readonly name="nama_mahasiswa"></td>
		</tr>
		<tr>
			<th>Nim</th>
			<td><input type="text" class="form-control-plaintext" value="<?=$datamhs->nim_mahasiswa?>" readonly name="nim"></td>
		</tr>
		<tr>
			<th>angkatan</th>
			<td><input type="text" class="form-control-plaintext" value="<?=$datamhs->angkatan?>" readonly name="angkatan"></td>
		</tr>
		<tr>
			<th>prodi</th>
			<td><input type="text" class="form-control-plaintext" value="<?=$datamhs->id_prodi?>" readonly name="id_prodi"></td>
		</tr>
		<tr>
			<th>no telp</th>
			<td><input type="text" class="form-control-plaintext" value="<?=$datamhs->no_telp?>" readonly name="no_telp"></td>
		</tr>
		<tr>
			<th>KTM</th>
			<td>
				<img src="" alt="<?=$datamhs->img_ktm?>" width="300" height="150">
			</td>
		</tr>
		<tr>
			<th>Foto</th>
			<td>
				<img src="" alt="<?=$datamhs->img_mahasiswa?>" width="100" height="150">
				<input type="hidden" name="img_mahasiswa" value="<?=$datamhs->img_mahasiswa?>" readonly>
			</td>
		</tr>
	</table>
	<div class="mb-3 row">
		<div class="col-6">
			<button type="submit" name="status" value="terima" class="btn btn-success col-12">Terima</button>
		</div>
		<div class="col-6">
			<button type="submit" name="status" value="tolak" class="btn btn-danger col-12">tolak</button>
		</div>
	</div>
</form>
</div>
