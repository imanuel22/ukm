
<div  class=" bg-primary text-light rounded-4 p-3 mb-3">
<h1 class=" text-light text-center mb-4">Daftar Anggota UKM</h1>
<form action="<?= base_url('cmahasiswa/daftar_anggota')?>" method="post" >
		<div class="mb-3">
			<label for="nim" class="form-label text-light">NIM</label>
			<p class="form-control bg-light"><?= $this->session->userdata('nim')?></p>
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label text-light">Nama Mahasiswa</label>
			<p class="form-control bg-light"><?= $this->session->userdata('nama_mahasiswa')?></p>
		</div>	
		<input type="hidden" name="id_mahasiswa" value="<?= $this->session->userdata('id_mahasiswa')?>">
		<div class="mb-3">
			<label for="id_devisi"><b>Divisi</b></label>
			<select name="id_devisi" id="id_devisi" class="form-control bg-light">
				<option value="" hidden>Pilih</option>
				<?php foreach($data_devisi as $row):?>	
				<option value="<?=$row->id_devisi?>"><?=$row->nama_devisi?></option>
				<?php endforeach;?>
			</select>
		</div>
        <div class="mb-3">
			<label for="alasan" class="form-label text-light">Alasan</label>
			<input type="text" name="alasan" class="form-control bg-light" id="alasan">
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
<script>
	function data_mahasiswa(id) {
		load('cmahasiswa/data_mahasiswa/'+id)
	}
</script>