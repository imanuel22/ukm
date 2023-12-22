<h3 class="mb-4">Form Tambah Fungsionaris</h3>
<div class="card bg-primary ">
	<div class="card-body">
    <form action="<?=base_url('cfungsionaris/insert_fungsionaris')?>" method="post">
    <div class="mb-3">
			<label for="id_mahasiswa" class="form-label text-light">nama mahasiswa</label>
			<select name="id_mahasiswa" id="id_mahasiswa" class="form-control bg-light">
				<option value="" hidden>pilih</option>
				<?php foreach($data_mahasiswa as $row):?>
				<option value="<?=$row->id_mahasiswa?>"><?=$row->nama_mahasiswa?></option>
				<?php endforeach;?>
			</select>
	</div>	
    <div class="mb-3">
			<label for="jabatan" class="form-label text-light">jabatan</label>
			<select name="id_jabatan" id="id_jabatan" class="form-control bg-light">
				<option value="" hidden>pilih</option>
				<?php foreach($data_jabatan as $row):?>
				<option value="<?=$row->id_jabatan?>"><?=$row->nama_jabatan?></option>
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