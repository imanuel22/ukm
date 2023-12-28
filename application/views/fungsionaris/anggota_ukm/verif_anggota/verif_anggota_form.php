<div id="form" style="display: none;">
<h3 class="mb-4">Form Verifikasi Anggota</h3>
<div class="card bg-primary ">
	<div class="card-body">
		<form action="<?=base_url('cfungsionaris/proses_verif_anggota')?>" method="post">
			<table class="table table-light text-dark">
				<tr>
					<th>IMG</th>
					<td>
						<img src="<?=base_url('assets/uploads/img_mahasiswa/')?>" alt="" width="75" height="100"
							id="img_mahasiswas">
					</td>
				</tr>
				<tr>
					<th>Nama Mahasiswa</th>
					<td><input class="form-control-plaintext text-dark" id="nama_mahasiswa"></td>
				</tr>
				<tr>
					<th>NIM</th>
					<td><input class="form-control-plaintext text-dark" id="nim"></td>
				</tr>
				<tr>
					<th>Jurusan</th>
					<td><input class="form-control-plaintext text-dark" id="nama_jurusan"></td>
				</tr>
				<tr>
					<th>Prodi</th>
					<td><input class="form-control-plaintext text-dark" id="nama_prodi"></td>
				</tr>
				<tr>
					<th>Divisi</th>
					<td><input class="form-control-plaintext text-dark" id="nama_devisi"></td>
				</tr>
				<tr>
					<th>Alasan</th>
					<td><input class="form-control-plaintext text-dark" id="alasan"></td>
				</tr>
			</table>
			<input type="hidden" name="id_daftar_anggota" id="id_daftar_anggota">
			<input type="hidden" name="id_mahasiswa" id="id_mahasiswa">
			<input type="hidden" name="id_devisi" id="id_devisi">
			<input type="hidden" name="id_ukm" id="id_ukm" value="<?=$id_ukm?>">
			<div class="mb-3 row">
				<div class="col-6 mb-3">
					<button type="submit" name="btn" value="berhasil" class="btn btn-success col-12">Terima</button>
				</div>
				<div class="col-6 mb-3">
					<button type="submit" name="btn" value="gagal" class="btn btn-danger col-12">tolak</button>
				</div>
				<div class="col-12 mb-3">
					<button type="reset" onclick="reset_img()" class="btn btn-light col-12">cancel</button>
				</div>
			</div>
		</form>
	</div>
</div>
<hr class="border border-primary border-2 opacity-50">
</div><script>
function reset_img() {
	div.style.display = 'none';
	display = 1;
	$('#img_mahasiswas').attr('src','')
}
</script>
