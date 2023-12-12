<div class="rounded-4 p-4 bg-info mt-3">

<h1>form tambah ukm</h1>
<form action="<?= base_url('cbem/update_data_ukm')?>" method="post">
		<div class="mb-3">
			<label for="nama_ukm" class="form-label">nama_ukm</label>
			<input type="text" name="nama_ukm" class="form-control" id="nama_ukm">
		</div>
		<div class="mb-3">
			<label for="id_mahasiswa" class="form-label">nama mahasiswa</label>
			<select name="id_mahasiswa" id="id_mahasiswa" class="form-control">
				<option value="" hidden>pilih</option>
				<?php foreach($data_mhs_level as $row):?>
				<option value="<?=$row->id_mahasiswa?>"><?=$row->nama_mahasiswa?></option>
				<?php endforeach;?>
			</select>
		</div>		
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
</div>
