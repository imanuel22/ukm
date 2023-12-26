<div id="form" style="display: none;">
	<h3 class="mb-4">Form Anggota UKM</h3>
	<div class="card bg-primary ">
		<div class="card-body">
			<form action="<?=base_url('cfungsionaris/proses_anggotaUKM')?>" method="post">
				<input type="hidden" name="id_ukm" value="<?=$id_ukm?>">
				<input type="hidden" name="id_anggota_ukm" id="id_anggota_ukm">
				<div class="mb-3">
					<label for="id_mahasiswa" class="form-label text-light">nim</label>
					<select name="id_mahasiswa" id="id_mahasiswa" class="form-control bg-light">
						<option value="" hidden>pilih</option>
						<?php foreach($data_mahasiswa as $row):?>
						<option value="<?=$row->id_mahasiswa?>"><?=$row->nim?></option>
						<?php endforeach;?>
					</select>
				</div>
				<div class="mb-3">
					<label for="id_devisi" class="form-label text-light">devisi</label>
					<select name="id_devisi" id="id_devisi" class="form-control bg-light">
						<option value="" hidden>pilih</option>
						<?php foreach($data_devisi as $row):?>
						<option value="<?=$row->id_devisi?>"><?=$row->nama_devisi?></option>
						<?php endforeach;?>
					</select>
				</div>
				<div class="mb-3">
					<label for="status" class="form-label text-light">status</label>
					<select name="status" id="status" class="form-control bg-light">
						<option value="" hidden>pilih</option>
						<option value="aktif">aktif</option>
						<option value="tidakaktif">tidak aktif</option>

					</select>
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
	</div>
	<hr class="border border-primary border-2 opacity-50">
</div>
