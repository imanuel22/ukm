<h3 class="mb-4">Form Edit Prodi</h3>
<div class="card bg-primary ">
	<div class="card-body">
<form action="<?= base_url('csuperadmin/update_prodi')?>" method="post">
<input type="hidden" name="id_prodi" value="<?=$data_prodi_id->id_prodi?>">
		<div class="mb-3">
		<label for="nama_prodi" class="form-label text-light">Nama Prodi</label>
			<input type="text" name="nama_prodi" class="form-control bg-light" id="nama_prodi" value="<?=$data_prodi_id->nama_prodi?>">
		</div>
		<div class="mb-3">
		<label for="id_jurusan"  class="form-label text-light">Nama Jurusan</label>
			<select name="id_jurusan" id="id_jurusan" class="form-control bg-light">
				<option value="<?=$data_prodi_id->id_jurusan?>" selected hidden><?=$data_prodi_id->id_jurusan?></option>
				<?php foreach($data_jurusan as $row): ?>
					<option value="<?=$row->id_jurusan?>"><?=$row->nama_jurusan?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="mb-3">
		<label for="jenjang"  class="form-label text-light">Jenjang</label>
			<select name="jenjang" id="jenjang" class="form-control bg-light">
				<option value="<?=$data_prodi_id->jenjang?>" selected hidden><?=$data_prodi_id->jenjang?></option>
				<option value="D2">D2</option>
				<option value="D3">D3</option>
				<option value="D4">D4</option>
			</select>
		</div>
		<div class="mb-3">
		<label for="NoSKProdi" class="form-label text-light">NoSK. Prodi</label>
			<input type="text" name="NoSKProdi" class="form-control bg-light" id="NoSKProdi" value="<?=$data_prodi_id->NoSKProdi?>">
		</div>
		<div class="mb-3">
		<label for="Kaprodi" class="form-label text-light">Kepala Prodi</label>
			<input type="text" name="Kaprodi" class="form-control bg-light" id="Kaprodi" value="<?=$data_prodi_id->Kaprodi?>">
		</div>
		<div class="mb-3">
		<label for="Keterangan" class="form-label text-light">Keterangan</label>
			<input type="text" name="Keterangan" class="form-control bg-light" id="Keterangan" value="<?=$data_prodi_id->Keterangan?>">
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
