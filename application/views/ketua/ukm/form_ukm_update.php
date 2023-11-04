<h1>form tambah prodi</h1>
<form action="<?= base_url('cketua/update_data_ukm')?>" method="post">
		<div class="mb-3">
			<label for="deskripsi" class="form-label">deskripsi</label>
			<input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?=$data_ukm_where->deskripsi?>">
		</div>
		<div class="mb-3">
			<label for="peraturan" class="form-label">peraturan</label>
			<input type="text" name="peraturan" class="form-control" id="peraturan" value="<?=$data_ukm_where->peraturan?>">
		</div>
		<div class="mb-3">
			<label for="img_ukm" class="form-label">img_ukm</label>
			<input type="file" name="img_ukm" class="form-control" id="img_ukm" value="<?=$data_ukm_where->img_ukm?>">
		</div>
		<div class="mb-3">
			<label for="tgl_buat" class="form-label">tgl_buat</label>
			<input type="date" name="tgl_buat" class="form-control" id="tgl_buat" value="<?=$data_ukm_where->tgl_buat?>">
		</div>	
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>

