<div class="bg-info rounded-3 text-light p-3">
    <h1>tambah fugnsionaris</h1><hr>
    <form action="<?=base_url('cfungsionaris/update_fungsionaris')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
    <input type="hidden" name="id_fungsionaris" value="<?=$data_fungsionaris_id->id_fungsionaris?>">
    <div class="mb-3">
			<label for="id_mahasiswa" class="form-label">nama mahasiswa</label>
			<select name="id_mahasiswa" id="id_mahasiswa" class="form-control">
				<option value="<?=$data_fungsionaris_id->id_mahasiswa?>" hidden><?=$data_fungsionaris_id->id_mahasiswa?></option>
				<?php foreach($data_mahasiswa as $row):?>
				<option value="<?=$row->id_mahasiswa?>"><?=$row->nama_mahasiswa?></option>
				<?php endforeach;?>
			</select>
	</div>	
    <div class="mb-3">
			<label for="jabatan" class="form-label">jabatan</label>
			<select name="jabatan" id="jabatan" class="form-control">
				<option value="<?=$data_fungsionaris_id->jabatan?>" hidden><?=$data_fungsionaris_id->jabatan?></option>
				<option value="ketua">ketua</option>
				<option value="wakilketua">wakilketua</option>
				<option value="seketaris">seketaris</option>
				<option value="bendahara">bendahara</option>
				<option value="anggota">anggota</option>

			</select>
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