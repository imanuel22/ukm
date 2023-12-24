<div id="form" style="display: none;">
<h3 class="mb-4">Form Prodi</h3>
<div class="card bg-primary ">
	<div class="card-body">
<form action="<?= base_url('csuperadmin/proses_prodi')?>" method="post">
<input type="hidden" name="id_prodi" id="id_prodi">
		<div class="mb-3">
			<label for="nama_prodi" class="form-label text-light">Nama Prodi</label>
			<input type="text" name="nama_prodi" class="form-control bg-light" id="nama_prodi">
		</div>
		<div class="mb-3">
			<label for="id_jurusan"  class="form-label text-light">Nama Jurusan</label>
			<select name="id_jurusan" id="id_jurusan" class="form-control bg-light">
				<option value="" hidden>Pilih</option>
				<?php foreach($data_jurusan as $row): ?>
					<option value="<?=$row->id_jurusan?>"><?=$row->nama_jurusan?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="mb-3">
			<label for="jenjang"  class="form-label text-light">Jenjang</label>
			<select name="jenjang" id="jenjang" class="form-control bg-light">
				<option value="" hidden>pilih</option>
				<option value="D1">D1</option>
				<option value="D2">D2</option>
				<option value="D3">D3</option>
				<option value="D4">D4</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="NoSKProdi" class="form-label text-light">NoSK. Prodi</label>
			<input type="text" name="NoSKProdi" class="form-control bg-light" id="NoSKProdi">
		</div>
		<div class="mb-3">
			<label for="Kaprodi" class="form-label text-light">Kepala Prodi</label>
			<input type="text" name="Kaprodi" class="form-control bg-light" id="Kaprodi">
		</div>
		<div class="mb-3">
			<label for="Keterangan" class="form-label text-light">Keterangan</label>
			<input type="text" name="Keterangan" class="form-control bg-light" id="Keterangan">
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
</div>