<div id="form" style="display: none;">
<h3 class="mb-4">Form Mahasiswa</h3>
<div class="card bg-primary ">
	<div class="card-body">
<form action="<?= base_url('cbem/proses_mahasiswa')?>" method="post" enctype="multipart/form-data"> 
	<input type="hidden" name="id_mahasiswa" id="id_mahasiswa">
	<input type="hidden" name="img_mahasiswa_old" id="img_mahasiswa_old">
		<div class="mb-3">
			<label for="nim" class="form-label text-light">NIM</label>
			<input type="text" name="nim" class="form-control bg-light" id="nim">
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label text-light">Nama Mahasiswa</label>
			<input type="text" name="nama_mahasiswa" class="form-control bg-light" id="nama_mahasiswa">
		</div>
		<div class="mb-3">
			<label for="angkatan" class="form-label text-light">Angkatan</label>
			<input type="text" name="angkatan" class="form-control bg-light" id="angkatan">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label text-light">Password</label>
			<input type="password" name="password" class="form-control bg-light" id="password">
		</div>
		<div class="mb-3">
			<label for="no_telp" class="form-label text-light">Nomor Telepon</label>
			<input type="text" name="no_telp" class="form-control bg-light" id="no_telp">
		</div>
		<div class="mb-3 row">
			<div class="col-2">
				<img src="" alt="" id="img_mahasiswas" width="150" height="225">
			</div>
			<div class="col-10 mt-5">
				<label for="img_mahasiswa" class="form-label text-light">IMG</label>
				<input type="file" name="img_mahasiswa" class="form-control bg-light" >
			</div>
		</div>
		<div class="mb-3">
			<label for="status" class="form-label text-light">Status</label>
			<select name="status" id="status" class="form-control bg-light">
				<option value="" hidden>Pilih</option>
				<option value="aktif">Aktif</option>
				<option value="tidakaktif">Tidak Aktif</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="id_prodi" class="form-label text-light">Prodi</label>
			<select name="id_prodi" id="id_prodi" class="form-control bg-light">
				<option value="" hidden>pilih</option>
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
</div>