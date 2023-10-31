<div class="container">
	<h1>Form INPUT</h1>
	<form action="<?= base_url('cbem/prosesupdateukm')?>" method="post">
		<input type="text" name="id_ukm" hidden value="<?= $data_ukm1->id_ukm?>">

		<div class="mb-3">
			<label for="nama_ukm" class="form-label">Nama UKM</label>
			<input type="text" name="nama_ukm" class="form-control" id="nama_ukm" value="<?= $data_ukm1->nama_ukm?>">
		</div>
		<div class="mb-3">
			<label for="nku" class="form-label">Nama Ketua UKM</label>
			<input type="text" name="nku" class="form-control" id="nku">
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
</div>
