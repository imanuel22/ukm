<div class="bg-info rounded-3 text-light p-3">
    <h1>EDIT UKM</h1><hr>
    <form action="<?=base_url('cfungsionaris/update_devisi')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
    <input type="hidden" name="id_devisi" value="<?=$data_devisi_id->id_devisi?>">
    <div class="mb-3">
        <label for="nama_devisi" class="form-label">nama_devisi</label>
        <input type="text" class=" form-control" name="nama_devisi" id="nama_devisi" value="<?=$data_devisi_id->nama_devisi?>">
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