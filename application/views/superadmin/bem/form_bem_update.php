<h3 class="mb-4">Form Edit Prodi</h3>
<div class="card bg-primary ">
	<div class="card-body">
<form action="<?= base_url('csuperadmin/update_bem')?>" method="post">
<input type="hidden" name="id_mahasiswa" class="form-control bg-light"value="<?=$data_bem_id->id_mahasiswa?>">
		<div class="mb-3">
			<label for="nim" class="form-label text-light">NIM</label>
			<input type="text" name="nim" class="form-control bg-light" id="nim" value="<?=$data_bem_id->nim?>">
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label text-light">Nama Mahasiswa</label>
			<input type="text" name="nama_mahasiswa" class="form-control bg-light" id="nama_mahasiswa" value="<?=$data_bem_id->nama_mahasiswa?>">
		</div>
		<div class="mb-3">
			<label for="angkatan" class="form-label text-light">Angkatan</label>
			<input type="text" name="angkatan" class="form-control bg-light" id="angkatan" value="<?=$data_bem_id->angkatan?>">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label text-light">Password</label>
			<input type="text" name="password" class="form-control bg-light" id="password" value="<?=$data_bem_id->password?>">
		</div>
		<div class="mb-3">
			<label for="no_telp" class="form-label text-light">Nomor Telphone</label>
			<input type="text" name="no_telp" class="form-control bg-light" id="no_telp" value="<?=$data_bem_id->no_telp?>">
		</div>
		<div class="mb-3 row">
			<div class="col-2">
				<img src="<?=base_url('assets/uploads/img_mahasiswa/').$data_bem_id->img_mahasiswa?>" alt="<?=$data_bem_id->img_mahasiswa?>" width="150" height="200">
			</div>
			<div class="col-10 mt-5">
				<label for="img_mahasiswa" class="form-label text-light">IMG</label>	
				<input type="file" name="img_mahasiswa" class="form-control bg-light" id="img_mahasiswa">
			</div>
		</div>
		<div class="mb-3">
			<label for="status"  class="form-label text-light">Status</label>
			<select name="status" id="status" class="form-control bg-light">
				<option value="<?=$data_bem_id->status?>" selected hidden><?=$data_bem_id->status?></option>
				<option value="aktif">aktif</option>
				<option value="tidakaktif">tidakaktif</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="id_prodi"  class="form-label text-light">Nama Prodi</label>
			<select name="id_prodi" id="id_prodi" class="form-control bg-light">
				<option value="<?=$data_bem_id->id_prodi?>" selected hidden><?=$data_bem_id->id_prodi?></option>
				<?php foreach($data_prodi as $row): ?>
					<option value="<?=$row->id_prodi?>"><?=$row->nama_prodi?></option>
				<?php endforeach;?>
			</select>
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
