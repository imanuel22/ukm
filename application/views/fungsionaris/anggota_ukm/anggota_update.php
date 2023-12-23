<h3 class="mb-4">Form Edit Anggota UKM</h3>
<div class="card bg-primary ">
	<div class="card-body">
<form action="<?= base_url('cfungsionaris/update_anggota')?>" method="post">
		<div class="mb-3">
			<label for="id_mahasiswa" class=" form-label text-light">mahasiswa</label>
			<select name="id_mahasiswa" id="id_mahasiswa" class="form-control bg-light">
				<option value="" hidden>pilih</option>
				<?php foreach($data_mahasiswa as $row):?>	
				<option value="<?=$row->id_mahasiswa?>"><?=$row->nama_mahasiswa?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="mb-3">
			<label for="id_devisi" class=" form-label text-light">devisi</label>
			<select name="id_devisi" id="id_devisi" class="form-control bg-light">
				<option value="" hidden>pilih</option>
				<?php foreach($data_devisi as $row):?>	
				<option value="<?=$row->id_devisi?>"><?=$row->nama_devisi?></option>
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