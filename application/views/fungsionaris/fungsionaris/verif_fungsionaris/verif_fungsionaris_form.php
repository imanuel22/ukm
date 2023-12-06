<div class="rounded-4 p-4 bg-info mt-3">
<h1>Data Verif</h1>
<form action="<?=base_url('cfungsionaris/proses_verif_fungsionaris')?>" method="post">
<input type="hidden" name="id_daftar_fungsionaris" value="<?=$data_verif_fungsionaris_id->id_daftar_fungsionaris?>">
	<table class="table table-warning">
		<tr>
			<th>id mahasiswa</th>
			<td><input type="text" class="form-control-plaintext" value="<?=$data_verif_fungsionaris_id->id_mahasiswa?>" readonly name="id_mahasiswa"></td>
		</tr>

		<tr>
			<th>id_jabatan</th>
			<td><input type="text" class="form-control-plaintext" value="<?=$data_verif_fungsionaris_id->id_jabatan?>" readonly name="id_jabatan"></td>
		</tr>
		<tr>
			<th>alasan</th>
			<td class="form-control-plaintext"><?=$data_verif_fungsionaris_id->alasan?></td>
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
