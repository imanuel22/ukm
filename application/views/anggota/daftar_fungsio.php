<div class="rounded-4 p-4 bg-info mt-3">
<h1>Daftar Fungsionaris</h1>
<form action="<?= base_url('canggota/daftar_fungsionaris')?>" method="post">
<div class="mb-3">
			<label for="nim" class="form-label">nim</label>
			<p class="form-control"><?= $this->session->userdata('nim')?></p>
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label">nama_mahasiswa</label>
			<p class="form-control"><?= $this->session->userdata('nama_mahasiswa')?></p>
		</div>
		<div class="mb-3">
			<label for="angkatan" class="form-label">angkatan</label>
			<p class="form-control"><?= $this->session->userdata('angkatan')?></p>
		</div>
		<div class="mb-3">
			<label for="id_prodi">prodi</label>
			<p class="form-control"><?= $this->session->userdata('id_prodi')?></p>
		</div>		
		<input type="hidden" name="id_mahasiswa" value="<?= $this->session->userdata('id_mahasiswa')?>">
        <div class="mb-3">
			<label for="id_jabatan">jabatan</label>
			<select name="id_jabatan" id="di_jabatan" class="form-control">
				<option value="" hidden>pilih</option>
				<?php foreach($data_jabatan as $row):?>	
				<option value="<?=$row->id_jabatan?>"><?=$row->nama_jabatan?></option>
				<?php endforeach;?>
			</select>
		</div>
        <div class="mb-3">
			<label for="alasan" class="form-label">alasan</label>
			<input type="text" name="alasan" class="form-control" id="alasan">
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
</div>