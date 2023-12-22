<h3 class="mb-4">Form Edit Fungsionaris</h3>
<div class="card bg-primary ">
	<div class="card-body">
    <form action="<?=base_url('cfungsionaris/update_fungsionaris')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
    <input type="hidden" name="id_fungsionaris" value="<?=$data_fungsionaris_id->id_fungsionaris?>">
    <div class="mb-3">
			<label for="id_mahasiswa" class="form-label text-light">nama mahasiswa</label>
			<select name="id_mahasiswa" id="id_mahasiswa" class="form-control bg-light">
				<option value="<?=$data_fungsionaris_id->id_mahasiswa?>" hidden><?=$data_fungsionaris_id->id_mahasiswa?></option>
				<?php foreach($data_mahasiswa as $row):?>
				<option value="<?=$row->id_mahasiswa?>"><?=$row->nama_mahasiswa?></option>
				<?php endforeach;?>
			</select>
	</div>	
    <div class="mb-3">
			<label for="jabatan" class="form-label text-light">jabatan</label>
			<select name="jabatan" id="jabatan" class="form-control bg-light">
				<option value="<?=$data_fungsionaris_id->id_jabatan?>" hidden><?=$data_fungsionaris_id->id_jabatan?></option>
				<option value="ketua">ketua</option>
				<option value="wakilketua">wakilketua</option>
				<option value="seketaris">seketaris</option>
				<option value="bendahara">bendahara</option>
				<option value="anggota">anggota</option>

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