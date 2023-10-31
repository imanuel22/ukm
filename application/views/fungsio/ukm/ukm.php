<div class="container">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<h2 class="col-10">Table UKM</h2>
				<a href="<?= base_url('cfungsio/forminsertukm') ?>" class="btn btn-primary col-2">Tambah Data</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama UKM</th>
						<th>Deskripsi</th>
						<th>Peraturan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1;foreach($data_ukm as $row): ?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$row->nama_ukm?></td>
						<td><?=$row->deskripsi?></td>
						<td><?=$row->peraturan?></td>
						<td>
							<a href="<?= base_url('cfungsio/formupdateukm/').$row->id_ukm ?>" class="btn btn-warning">
								<i class="bi bi-pencil-fill"></i>
							</a> 
							<a href="<?= base_url('cfungsio/prosesdeleteukm/').$row->id_ukm ?>"class="btn btn-danger">
								<i class="bi bi-trash-fill"></i>
							</a>
						</td>
					</tr>
					<?php endforeach; ?>

				</tbody>
			</table>
		</div>
	</div>
</div>
