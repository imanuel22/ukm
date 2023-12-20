<h3 class="mb-4">Form Edit Mahasiswa</h3>
<div class="card bg-primary ">
	<div class="card-body">
<form action="<?= base_url('cbem/update_data_mhs')?>" method="post">
<input type="hidden" name="id_mahasiswa" value="<?=$data_mhs_where->id_mahasiswa?>">
		<div class="mb-3">
			<label for="nim" class="form-label text-light">nim</label>
			<input type="text" name="nim" class="form-control bg-light" id="nim" value="<?=$data_mhs_where->nim?>">
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label text-light">nama_mahasiswa</label>
			<input type="text" name="nama_mahasiswa" class="form-control bg-light" id="nama_mahasiswa" value="<?=$data_mhs_where->nama_mahasiswa?>"> 
		</div>
		<div class="mb-3">
			<label for="angkatan" class="form-label text-light">angkatan</label>
			<input type="text" name="angkatan" class="form-control bg-light" id="angkatan" value="<?=$data_mhs_where->angkatan?>">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label text-light">password</label>
			<input type="text" name="password" class="form-control bg-light" id="password" value="<?=$data_mhs_where->password?>">
		</div>
		<div class="mb-3">
			<label for="no_telp" class="form-label text-light">no_telp</label>
			<input type="text" name="no_telp" class="form-control bg-light" id="no_telp" value="<?=$data_mhs_where->no_telp?>">
		</div>
		<div class="mb-3">
			<label for="img_mahasiswa" class="form-label text-light">img_mahasiswa</label>
			<input type="file" name="img_mahasiswa" class="form-control bg-light" id="img_mahasiswa" value="<?=$data_mhs_where->img_mahasiswa?>">
		</div>
		<div class="mb-3">
			<label for="status" class="form-label text-light">status</label>
			<select name="status" id="" class="form-control bg-light">
				<option value="<?=$data_mhs_where->status?>" hidden selected><?=$data_mhs_where->status?></option>
				<option value="aktif">aktif</option>
				<option value="tidakaktif">tidakaktif</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="id_prodi" class="form-label text-light">Prodi</label>
			<select name="status" id="" class="form-control bg-light">
				<option value="<?=$data_mhs_where->id_prodi?>" hidden selected><?=$data_mhs_where->id_prodi?></option>
				<?php foreach($data_prodi as $row):?>
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

