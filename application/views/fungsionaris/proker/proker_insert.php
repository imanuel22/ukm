<div class="bg-info rounded-3 text-light p-3">
    <h1>tambah fugnsionaris</h1><hr>
    <form action="<?=base_url('cfungsionaris/insert_proker')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
    <div class="mb-3">
			<label for="nama_proker" class="form-label">nama_proker</label>
			<input type="text" name="nama_proker" id="nama_proker" class="form-control">
	</div>	
	<div class="mb-3">
			<label for="deskripsi" class="form-label">deskripsi</label>
			<input type="text" name="deskripsi" id="deskripsi" class="form-control">
	</div>	
	<div class="mb-3">
			<label for="peraturan" class="form-label">peraturan</label>
			<input type="text" name="peraturan" id="peraturan" class="form-control">
	</div>	
    <div class="mb-3 row">
        <div class="col-6">
            <button class="btn btn-primary col-12" type="submit">SUBMIT</button>
        </div>
        <div class="col-6">
            <button class="btn btn-danger col-12" type="reset">reset</button>
        </div>
    </div>
    </form>
</div>