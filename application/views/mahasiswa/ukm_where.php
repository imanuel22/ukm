<style>
    .imgs{
        width: 150px;
        height: 150px;
    }
</style>

<div class="bg-info rounded-4 p-3 mb-3">
    <div class="row">
        <img src="<?=base_url('assets/img/').$data_ukm->img_ukm?>"class="imgs col-md-4" alt="" srcset="">
        <h1 class="col-md-8 mt-5"><?=$data_ukm->nama_ukm?></h1>
    </div>
    <div class="deskripsi">
        <h1>Deskripsi</h1>
        <?=$data_ukm->deskripsi?>
    </div>
</div>
<div class="bg-info rounded-4 p-3 mb-3">
    <div class="peraturan">
        <h1>peraturan</h1>
        <?=$data_ukm->peraturan?>
    </div>
</div>
<div class="bg-info rounded-4 p-3 mb-3">
<h1>proker</h1>

</div>
<div class="bg-info rounded-4 p-3 mb-3">
<h1>Fungsionaris</h1>

</div>

<div class="rounded-4 p-4 bg-info mt-3">
<h1>Daftar UKM</h1>
<form action="<?= base_url('cmahasiswa/insert_data_mhs')?>" method="post">
	<input type="hidden" name="level" value="user">
		<div class="mb-3">
			<label for="nim" class="form-label">nim</label>
			<input type="text" name="nim" class="form-control" id="nim">
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label">nama_mahasiswa</label>
			<input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa">
		</div>
		<div class="mb-3">
			<label for="angkatan" class="form-label">angkatan</label>
			<input type="text" name="angkatan" class="form-control" id="angkatan">
		</div>
		<div class="mb-3">
			<label for="divisi" class="form-label">divisi</label>
			<input type="text" name="divisi" class="form-control" id="divisi">
		</div>
		<div class="mb-3">
			<label for="id_jurusan">prodi</label>
			<select name="id_jurusan" id="id_jurusan" class="form-control">
				<option value="" hidden>pilih</option>
				<?php foreach($data_jurusan as $row):?>
				<option value="<?=$row->id_jurusan?>"><?=$row->nama_jurusan?></option>
				<?php endforeach;?>
			</select>
		</div>		
		<div class="mb-3">
			<label for="id_prodi">prodi</label>
			<select name="id_prodi" id="id_prodi" class="form-control">
				<option value="" hidden>pilih</option>
				<?php foreach($data_prodi as $row):?>
				<option value="<?=$row->id_prodi?>"><?=$row->nama_prodi?></option>
				<?php endforeach;?>
			</select>
		</div>
        <div class="mb-3">
			<label for="alasan" class="form-label">alasan</label>
			<input type="text" name="alasan" class="form-control" id="alasan">
        </div>
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
</div>