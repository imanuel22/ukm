<div class="bg-info rounded-3 text-light p-3">
    <h1>tambah anggota</h1><hr>
    <form action="<?=base_url('cfungsionaris/insert_anggota')?>" method="post">
    <input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
    <div class="mb-3">
			<label for="id_mahasiswa" class="form-label">nama mahasiswa</label>
			<select name="id_mahasiswa" id="id_mahasiswa" class="form-control">
				<option value="" hidden>pilih</option>
				<?php foreach($data_mahasiswa as $row):?>
				<option value="<?=$row->id_mahasiswa?>"><?=$row->nama_mahasiswa?></option>
				<?php endforeach;?>
			</select>
	</div>	
    <div class="mb-3">
			<label for="id_devisi" class="form-label">devisi</label>
			<select name="id_devisi" id="id_devisi" class="form-control">
				<option value="" hidden>pilih</option>
				<?php foreach($data_devisi as $row):?>
				<option value="<?=$row->id_devisi?>"><?=$row->nama_devisi?></option>
				<?php endforeach;?>
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