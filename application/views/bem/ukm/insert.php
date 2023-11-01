<div class="container">
	<h1>Form INPUT</h1>
	<form action="<?= base_url('cbem/prosesinsertukm')?>" method="post">
		<div class="mb-3">
			<label for="nama_ukm" class="form-label">Nama UKM</label>
			<input type="text" name="nama_ukm" class="form-control" id="nama_ukm">
		</div>
		<div class="mb-3">
			<label for="nku" class="form-label">Nama Ketua UKM</label>
			<select class="form-select" aria-label="Default select example">
				<option hidden>Open this select menu</option>
				<?php foreach($datamhs as $row):?>
					<option value="<?=$row->$id_mahasiswa?>"><?=$row->$nama?></option>
				<?php endforeach?>
			</select>
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-primary col-12">Submit</button>
		</div>
	</form>
</div>
