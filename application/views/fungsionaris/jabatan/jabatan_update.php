<div class="bg-info rounded-3 text-light p-3">
    <h1>tambah fugnsionaris</h1><hr>
    <form action="<?=base_url('cfungsionaris/update_jabatan')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
    <input type="hidden" name="id_jabatan" value="<?=$data_jabatan_id->id_jabatan?>">
    <div class="mb-3">
			<label for="nama_jabatan" class="form-label">nama_jabatan</label>
			<input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control" value="<?=$data_jabatan_id->nama_jabatan?>">
	</div>	
	<div class="mb-3">
			<label for="deskripsi_jabatan" class="form-label">deskripsi_jabatan</label>
			<input type="text" name="deskripsi_jabatan" id="deskripsi_jabatan" class="form-control"  value="<?=$data_jabatan_id->deskripsi_jabatan?>">
	</div>	
	<div class="mb-3">
			<label for="peraturan" class="form-label">peraturan</label>
			<input type="text" name="peraturan" id="peraturan" class="form-control"  value="<?=$data_jabatan_id->peraturan?>">
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