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
<form action="<?= base_url('cmahasiswa/daftaranggota')?>" method="post">
		<div class="mb-3">
			<label for="nim" class="form-label">nim</label>
			<p class="form-control"><?= $this->session->userdata('nim')?></p>
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label">nama_mahasiswa</label>
			<p class="form-control"><?= $this->session->userdata('nama_mahasiswa')?></p>
		</div>
		<div class="mb-3">
			<label for="angkatan" class="form-label">angkatan</label>
			<p class="form-control"><?= $this->session->userdata('angkatan')?></p>
		</div>
		<div class="mb-3">
			<label for="id_prodi">prodi</label>
			<p class="form-control"><?= $this->session->userdata('id_prodi')?></p>
		</div>		
		<input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
		<input type="hidden" name="id_mahasiswa" value="<?= $this->session->userdata('nim')?>">
		<div class="mb-3">
			<label for="devisi" class="form-label">devisi</label>
			<input type="text" name="devisi" class="form-control" id="devisi">
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