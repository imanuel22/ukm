<h1>form tambah prodi</h1>
<form action="<?= base_url('cbem/insert_data_prodi')?>" method="post">
		<div class="mb-3">
			<label for="nama_prodi" class="form-label">nama_prodi</label>
			<input type="text" name="nama_prodi" class="form-control" id="nama_prodi">
		</div>
		<div class="mb-3">
			<label for="id_jurusan" class="form-label">id_jurusan</label>
			<select name="id_jurusan" id="" class="form-control">
				<option value="" hidden>pilih</option>
				<?php foreach($data_jurusan as $row):?>
				<option value="<?=$row->id_jurusan?>"><?=$row->nama_jurusan?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="mb-3">
			<label for="jenjang" class="form-label">jenjang</label>
			<input type="text" name="jenjang" class="form-control" id="jenjang">
		</div>
		<div class="mb-3">
			<label for="NoSKPProdi" class="form-label">NoSKPProdi</label>
			<input type="text" name="NoSKPProdi" class="form-control" id="NoSKPProdi">
		</div>
		<div class="mb-3">
			<label for="Kaprodi" class="form-label">Kaprodi</label>
			<input type="text" name="Kaprodi" class="form-control" id="Kaprodi">
		</div>	
		<div class="mb-3">
			<label for="Keterangan" class="form-label">Keterangan</label>
			<input type="text" name="Keterangan" class="form-control" id="Keterangan">
		</div>	
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>

