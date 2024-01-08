<div id="form" style="display: none;">
<h3 class="mb-4">Form Tambah Fungsionaris</h3>
<div class="card bg-primary ">
	<div class="card-body">
    <form action="<?=base_url('cfungsionaris/proses_fungsionaris')?>" method="post">
	<input type="hidden" name="id_fungsionaris" id="id_fungsionaris">
	<input type="hidden" name="id_ukm" id="id_ukm" value="<?=$id_ukm?>">
    <div class="mb-3">
			<label for="id_mahasiswa" class="form-label text-light">NIM</label>
			<select name="id_mahasiswa" id="id_mahasiswa" class="form-control bg-light">
				<option value="" hidden>Pilih</option>
				<?php foreach($data_mahasiswa as $row):?>
				<option value="<?=$row->id_mahasiswa?>"><?=$row->nim?></option>
				<?php endforeach;?>
			</select>
	</div>	
    <div class="mb-3">
			<label for="jabatan" class="form-label text-light">Jabatan</label>
			<select name="id_jabatan" id="id_jabatan" class="form-control bg-light">
				<option value="" hidden>Pilih</option>
				<?php foreach($data_jabatan as $row):?>
				<option value="<?=$row->id_jabatan?>"><?=$row->nama_jabatan?></option>
				<?php endforeach;?>
			</select>
	</div>	
	<div class="mb-3">
			<label for="status" class="form-label text-light">Status</label>
			<select name="status" id="status" class="form-control bg-light">
				<option value="" hidden>Pilih</option>
				<option value="aktif">Aktif</option>
				<option value="tidakaktif">Tidak Aktif</option>
	
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