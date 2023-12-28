<h3 class="mb-4">Form UKM</h3>
<div class="card bg-primary">
	<div class="card-body">
    <form action="<?=base_url('cfungsionaris/proses_ukm')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$data_ukm->id_ukm?>">
    <div class="mb-3">
        <label for="deskripsi" class="form-label text-light">Deskripsi</label>
        <input type="text" class=" form-control bg-light" name="deskripsi" id="deskripsi" value="<?=$data_ukm->deskripsi?>">
    </div>
    <div class="mb-3">
        <label for="peraturan" class="form-label text-light">Peraturan</label>
        <input type="text" class=" form-control bg-light" name="peraturan" id="peraturan" value="<?=$data_ukm->peraturan?>">
    </div>

    <div class="mb-3 row">
        <div class="col-6">
            <button class="btn btn-success col-12" type="submit">Submit</button>
        </div>
        <div class="col-6">
            <button class="btn btn-danger col-12" type="reset">Reset</button>
        </div>
    </div>
    </form>
	</div>
</div>
<hr class="border border-primary border-2 opacity-50">

