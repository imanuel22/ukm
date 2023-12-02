<div class="bg-info rounded-3 text-light p-3">
    <h1>EDIT UKM</h1><hr>
    <form action="<?=base_url('cfungsionaris/proses_ukm')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$data_ukm->id_ukm?>">
    <div class="mb-3">
        <label for="nama_ukm" class="form-label">nama_ukm</label>
        <input type="text" class=" form-control" name="nama_ukm" id="nama_ukm" value="<?=$data_ukm->nama_ukm?>">
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">deskripsi</label>
        <input type="text" class=" form-control" name="deskripsi" id="deskripsi" value="<?=$data_ukm->deskripsi?>">
    </div>
    <div class="mb-3">
        <label for="peraturan" class="form-label">peraturan</label>
        <input type="text" class=" form-control" name="peraturan" id="peraturan" value="<?=$data_ukm->peraturan?>">
    </div>
    <div class="mb-3">
        <label for="img_ukm" class="form-label">img_ukm</label>
        <input type="file" class=" form-control" name="img_ukm" id="img_ukm">
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