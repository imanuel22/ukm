<div class="rounded-4 p-4 bg-info mt-3">
<h1>Data Verif</h1>
<form action="<?=base_url('cfungsionaris/proses_verif_anggota')?>" method="post">
<input type="hidden" name="id_daftar_anggota" value="<?=$data_verif_anggota_id->id_daftar_anggota?>">
	<table class="table table-warning">
		<tr>
			<th>id mahasiswa</th>
			<td><input type="text" class="form-control-plaintext" value="<?=$data_verif_anggota_id->id_mahasiswa?>" readonly name="id_mahasiswa"></td>
		</tr>
		<tr>
			<th>id_devisi</th>
			<td><input type="text" class="form-control-plaintext" value="<?=$data_verif_anggota_id->id_devisi?>" readonly name="id_devisi"></td>
		</tr>
		<tr>
			<th>alasan</th>
			<td class="form-control-plaintext"><?=$data_verif_anggota_id->alasan?></td>
		</tr>
	</table>
	<div class="mb-3 row">
		<div class="col-6">
			<button type="submit" name="btn" value="berhasil" class="btn btn-success col-12">Terima</button>
		</div>
		<div class="col-6">
			<button type="submit" name="btn" value="gagal" class="btn btn-danger col-12">tolak</button>
		</div>
	</div>
</form>
</div>
