<div id="form" style="display: none;">
<div class="rounded-4 p-4 bg-primary mt-3">
<h1>Data Verif</h1>
<form action="<?=base_url('cbem/proses_verif')?>" method="post">
	<table class="table table-warning">
		<tr>
			<th>Nama mahasiswa</th>
			<td><input type="text" id="nama_mahasiswa" class="form-control-plaintext" readonly name="nama_mahasiswa"></td>
		</tr>
		<tr>
			<th>Nim</th>
			<td><input type="text" id="nim" class="form-control-plaintext"  readonly name="nim"></td>
		</tr>
		<tr>
			<th>angkatan</th>
			<td><input type="text" id="angkatan" class="form-control-plaintext"  readonly name="angkatan"></td>
		</tr>
		<tr>
			<th>Jurusan</th>
			<td><input type="text" id="nama_jurusan" class="form-control-plaintext" readonly></td>
		</tr>
		<tr>
			<th>prodi</th>
			<td><input type="text" id="nama_prodi" class="form-control-plaintext" readonly></td>
		</tr>
		<tr>
			<th>no telp</th>
			<td><input type="text" id="no_telp" class="form-control-plaintext" readonly name="no_telp"></td>
		</tr>
		<tr>
			<th>KTM</th>
			<td>
				<img src="" id="img_ktms" alt="" width="300" height="150">
			</td>
		</tr>
		<tr>
			<th>Foto</th>
			<td>
				<img src="" alt="" id="img_mahasiswas" width="100" height="150">
			</td>
		</tr>
	</table>
	<div>
		<input type="hidden" id="img_mahasiswa" name="img_mahasiswa" readonly>
		<input type="hidden" id="id_prodi" name="id_prodi" readonly>
		<input type="hidden" id="id_daftar_mahasiswa" name="id_daftar_mahasiswa" readonly>
		<input type="hidden" id="password" name="password" readonly>

	</div>
	<div class="mb-3 row">
				<div class="col-6 mb-3">
					<button type="submit" name="btn" value="terima" class="btn btn-success col-12">Terima</button>
				</div>
				<div class="col-6 mb-3">
					<button type="submit" name="btn" value="tolak" class="btn btn-danger col-12">Tolak</button>
				</div>
				<div class="col-12 mb-3">
					<button type="reset" onclick="reset_img()" class="btn btn-light col-12">Cancel</button>
				</div>
			</div>
		</form>
	</div>
	<hr class="border border-primary border-2 opacity-50">
</div>
</div>
<script>
function reset_img() {
	div.style.display = 'none';
	display = 1;
	$('#img_mahasiswas').attr('src','')
	$('#img_ktms').attr('src','')
}
</script>
