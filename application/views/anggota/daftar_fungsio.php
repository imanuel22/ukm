<div class="rounded-4 p-4 bg-info mt-3">
<h1>Daftar Fungsionaris</h1>
<form action="<?= base_url('cmahasiswa/insert_data_mhs')?>" method="post">
	<input type="hidden" name="level" value="user">
		<div class="mb-3">
			<label for="nim" class="form-label">nim</label>
			<input type="text" name="nim" class="form-control" id="nim">
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label">nama_mahasiswa</label>
			<input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa">
		</div>
		<div class="mb-3">
			<label for="id_jurusan">jurusan</label>
			<select name="id_jurusan" id="id_jurusan" class="form-control">
				<option value="" hidden>pilih</option>
				<?php foreach($data_jurusan as $row):?>
				<option value="<?=$row->id_jurusan?>"><?=$row->nama_jurusan?></option>
				<?php endforeach;?>
			</select>
		</div>		
		<div class="mb-3">
			<label for="id_prodi">prodi</label>
			<select name="id_prodi" id="id_prodi" class="form-control">
				<option value="" hidden>pilih</option>
				<?php foreach($data_prodi as $row):?>
				<option value="<?=$row->id_prodi?>"><?=$row->nama_prodi?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="mb-3">
			<label for="angkatan" class="form-label">angkatan</label>
			<input type="text" name="angkatan" class="form-control" id="angkatan">
		</div>
		<div class="mb-3">
			<label for="divisi" class="form-label">divisi</label>
			<input type="text" name="divisi" class="form-control" id="divisi">
		</div>
        <div class="mb-3">
			<label for="jabatan" class="form-label">jabatan</label>
			<input type="text" name="jabatan" class="form-control" id="jabatan">
		</div>
        <div class="mb-3">
			<label for="alasan" class="form-label">alasan</label>
			<input type="text" name="alasan" class="form-control" id="alasan">
		
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
</div>