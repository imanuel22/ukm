
<div id="form" style="display: none;">
<h3 class="mb-4">Form Program Kerja</h3>
<div class="card bg-primary ">
	<div class="card-body">
    <form action="<?=base_url('cfungsionaris/proses_proker')?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
    <input type="hidden" name="id_proker" id="id_proker">
    <input type="hidden" name="img_proker_old" id="img_proker_old">
    <div class="mb-3">
			<label for="nama_proker" class="form-label text-light">Nama Program Kerjar</label>
			<input type="text" name="nama_proker" id="nama_proker" class="form-control bg-light">
	</div>	
	<div class="mb-3">
			<label for="deskripsi" class="form-label text-light">Deskripsi</label>
			<input type="text" name="deskripsi" id="deskripsi" class="form-control bg-light">
	</div>	
	<div class="mb-3">
			<label for="peraturan" class="form-label text-light">Peraturan</label>
			<input type="text" name="peraturan" id="peraturan" class="form-control bg-light">
	</div>	
	<div class="mb-3 row">
			<div class="col-2">
				<img src="" alt="" id="img_prokers" width="150" height="225">
			</div>
			<div class="col-10 mt-5">
				<label for="img_proker" class="form-label text-light">IMG</label>
				<input type="file" name="img_proker" class="form-control bg-light" >
			</div>
		</div>
    <div class="mb-3 row">
			<div class="col-6">
				<button type="submit" class="btn btn-success col-12">Submit</button>
			</div>
			<div class="col-6">
			<button type="reset" onclick="reset_img()" class="btn btn-danger col-12">Reset</button>
			</div>
		</div>
	</form>
	</div>
</div>	
<hr class="border border-primary border-2 opacity-50">
</div>
<script>
	function reset_img() {
	$('#img_prokers').attr('		]
	]	queueMicrotaskQ]						111111111111a','')
	// formpass.style.display = 'block';
}
</script>