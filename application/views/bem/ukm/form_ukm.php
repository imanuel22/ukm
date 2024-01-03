<div id="form" style="display: none;">

<h3 class="mb-4">Form Tambah Master UKM</h3>
<div class="card bg-primary ">
	<div class="card-body">
<form action="<?= base_url('cbem/proses_ukm')?>" method="post"  enctype="multipart/form-data">
<input type="hidden" name="id_ukm" id="id_ukm">
<input type="hidden" name="img_ukm_old" id="img_ukm_old">
		<div class="mb-3">
			<label for="nama_ukm" class="form-label text-light">Nama UKM</label>
			<input type="text" name="nama_ukm" class="form-control bg-light" id="nama_ukm">
		</div>
		<div class="mb-3">
			<label for="id_mahasiswa" class="form-label text-light">Nama Mahasiswa</label>
			<select name="id_mahasiswa" id="id_mahasiswa" class="form-control bg-light">
				<option value="" hidden>Pilih</option>
				<?php foreach($data_mahasiswa as $row):?>
				<option value="<?=$row->id_mahasiswa?>"><?=$row->nama_mahasiswa?></option>
				<?php endforeach;?>
			</select>
		</div>		
		<div class="mb-3 row">
			<div class="col-md-2">
				<img src="" alt="" id="img_ukms" width="150" height="150">
			</div>
			<div class="col-md-10 mt-4">
				<label for="img_mahasiswa" class="form-label text-light">IMG</label>
				<input type="file" name="img_mahasiswa" class="form-control bg-light" >
			</div>
		</div>
		<div class="mb-3 row">
			<div class="col-6">
				<button type="submit" class="btn btn-success col-12">Submit</button>
			</div>
			<div class="col-6">
				<button type="reset"  onclick="reset_img()"  class="btn btn-danger col-12">Reset</button>
			</div>
		</div>
	</form>
	</div>
</div>	
<hr class="border border-primary border-2 opacity-50">

</div>
<script>
function reset_img() {
	$('#img_ukms').attr('src','')
}
</script>
