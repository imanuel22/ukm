<h1>form tambah mahasiswa</h1>
<form action="<?= base_url('cbem/insert_data_mhs')?>" method="post">
		<div class="mb-3">
			<label for="nim" class="form-label">nim</label>
			<input type="text" name="nim" class="form-control" id="nim">
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label">nama_mahasiswa</label>
			<input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa">
		</div>
		<div class="mb-3">
			<label for="angkatan" class="form-label">angkatan</label>
			<input type="text" name="angkatan" class="form-control" id="angkatan">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">password</label>
			<input type="text" name="password" class="form-control" id="password">
		</div>
		<div class="mb-3">
			<label for="no_telp" class="form-label">no_telp</label>
			<input type="text" name="no_telp" class="form-control" id="no_telp">
		</div>
		<div class="mb-3">
			<label for="img_mahasiswa" class="form-label">img_mahasiswa</label>
			<input type="file" name="img_mahasiswa" class="form-control" id="img_mahasiswa">
		</div>
		<div class="mb-3">
			<label for="status" class="form-label">status</label>
			<select name="status" id="" class="form-control">
				<option value="" hidden>pilih</option>
				<option value="aktif">aktif</option>
				<option value="tidakaktif">tidakaktif</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="id_prodi" class="form-label">id_prodi</label>
			<select name="id_prodi" id="" class="form-control">
				<option value="" hidden>pilih</option>
				<?php foreach($data_prodi as $row):?>
				<option value="<?=$row->id_prodi?>"><?=$row->nama_prodi?></option>
				<?php endforeach;?>
			</select>
		</div>		
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
