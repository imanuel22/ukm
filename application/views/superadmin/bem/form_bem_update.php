
<div class="rounded-4 p-4 bg-info mt-3">
<h1 class="fw-bold ">Edit bem</h1>
<form action="<?= base_url('csuperadmin/update_data_bem')?>" method="post">
<input type="hidden" name="id_mahasiswa" class="form-control"value="<?=$data_bem_id->id_mahasiswa?>">
		<div class="mb-3">
			<label for="nim" class="form-label">nim</label>
			<input type="text" name="nim" class="form-control" id="nim" value="<?=$data_bem_id->nim?>">
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label">nama_mahasiswa</label>
			<input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa" value="<?=$data_bem_id->nama_mahasiswa?>">
		</div>
		<div class="mb-3">
			<label for="angkatan" class="form-label">angkatan</label>
			<input type="text" name="angkatan" class="form-control" id="angkatan" value="<?=$data_bem_id->angkatan?>">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">password</label>
			<input type="text" name="password" class="form-control" id="password" value="<?=$data_bem_id->password?>">
		</div>
		<div class="mb-3">
			<label for="no_telp" class="form-label">no_telp</label>
			<input type="text" name="no_telp" class="form-control" id="no_telp" value="<?=$data_bem_id->no_telp?>">
		</div>
		<div class="mb-3">
			<label for="img_mahasiswa" class="form-label">img_mahasiswa</label>
			<input type="file" name="img_mahasiswa" class="form-control" id="img_mahasiswa" value="<?=$data_bem_id->img_mahasiswa?>">
		</div>
		<div class="mb-3">
			<label for="status"  class="form-label">status</label>
			<select name="status" id="status" class="form-control">
				<option value="<?=$data_bem_id->status?>" selected hidden><?=$data_bem_id->status?></option>
				<option value="aktif">aktif</option>
				<option value="tidakaktif">tidakaktif</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="id_prodi"  class="form-label">nama prodi</label>
			<select name="id_prodi" id="id_prodi" class="form-control">
				<option value="<?=$data_bem_id->id_prodi?>" selected hidden><?=$data_bem_id->id_prodi?></option>
				<?php foreach($data_prodi as $row): ?>
					<option value="<?=$row->id_prodi?>"><?=$row->nama_prodi?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
</div>
