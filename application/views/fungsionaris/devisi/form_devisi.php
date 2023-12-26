<div id="form" style="display: none;">
<h3 class="mb-4">Form Devisi</h3>
<div class="card bg-primary ">
	<div class="card-body">
    <form action="<?=base_url('cfungsionaris/proses_devisi	')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
    <input type="hidden" name="id_devisi" id="id_devisi">
    <div class="mb-3">
        <label for="nama_devisi" class="form-label text-light">nama_devisi</label>
        <input type="text" class=" form-control bg-light" name="nama_devisi" id="nama_devisi">
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
<hr class="border border-primary border-2 opacity-50"></div>