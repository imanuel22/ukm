
<div class="rounded-4 p-4 bg-info mt-3">
<h1 class="fw-bold ">Edit prodi</h1>
<form action="<?= base_url('csuperadmin/update_data_prodi')?>" method="post">
<input type="hidden" name="id_prodi" value="<?=$data_prodi_id->id_prodi?>">
		<div class="mb-3">
			<label for="nama_prodi" class="form-label">nama prodi</label>
			<input type="text" name="nama_prodi" class="form-control" id="nama_prodi" value="<?=$data_prodi_id->nama_prodi?>">
		</div>
		<div class="mb-3">
			<label for="id_jurusan"  class="form-label">nama jurusan</label>
			<select name="id_jurusan" id="id_jurusan" class="form-control">
				<option value="<?=$data_prodi_id->id_jurusan?>" selected hidden><?=$data_prodi_id->id_jurusan?></option>
				<?php foreach($data_jurusan as $row): ?>
					<option value="<?=$row->id_jurusan?>"><?=$row->nama_jurusan?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="mb-3">
			<label for="jenjang"  class="form-label">jenjang</label>
			<select name="jenjang" id="jenjang" class="form-control">
				<option value="<?=$data_prodi_id->jenjang?>" selected hidden><?=$data_prodi_id->jenjang?></option>
				<option value="D2">D2</option>
				<option value="D3">D3</option>
				<option value="D4">D4</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="NoSKProdi" class="form-label">NoSKProdi</label>
			<input type="text" name="NoSKProdi" class="form-control" id="NoSKProdi" value="<?=$data_prodi_id->NoSKProdi?>">
		</div>
		<div class="mb-3">
			<label for="Kaprodi" class="form-label">Kaprodi</label>
			<input type="text" name="Kaprodi" class="form-control" id="Kaprodi" value="<?=$data_prodi_id->Kaprodi?>">
		</div>
		<div class="mb-3">
			<label for="Keterangan" class="form-label">Keterangan</label>
			<input type="text" name="Keterangan" class="form-control" id="Keterangan" value="<?=$data_prodi_id->Keterangan?>">
		</div>	
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
</div>
