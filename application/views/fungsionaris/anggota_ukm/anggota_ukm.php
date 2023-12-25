<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table Anggota UKM</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-header d-flex justify-content-end">
		<button type="button" onclick="tambah(<?=$id_ukm?>)" class="btn btn-light px-5">+Data</button>
	</div>
	<div class="card-body">
		<div style="overflow-x:scroll;">
			<table id="myTable" class="table table-bordered display table-striped ">
				<thead class="table-light">
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">IMG</th>
						<th class="text-center">Nama Mahasiswa</th>
						<th class="text-center">NIM</th>
						<th class="text-center">Jurusan</th>
						<th class="text-center">Prodi</th>
						<th class="text-center">Devisi</th>
						<th class="text-center">status</th>
						<th class="text-center">Aktion</th>
					</tr>
				</thead>
				<tbody class="bg-light">
					<?php 
					$no=1;
					foreach($data_anggota_ukm as $row):
					?>
					<tr>
						<td><?=$no++?></td>
						<td>
							<img src="<?=base_url('assets/uploads/img_mahasiswa/')?><?=$row->img_mahasiswa?>"
								alt="<?=$row->img_mahasiswa?>" width="75" height="100">
						</td>
						<td><?=$row->nama_mahasiswa?></td>
						<td><?=$row->nim?></td>
						<td><?=$row->nama_jurusan?></td>
						<td><?=$row->nama_prodi?></td>
						<td><?=$row->nama_devisi?></td>
						<td class="text-center">
							<?php if ($row->status == 'aktif'):?>
							<span class="badge bg-primary rounded-3 fw-semibold">Aktif</span>
							<?php else:?>
							<span class="badge bg-danger rounded-3 fw-semibold">Tidak Aktif</span>
							<?php endif ?>
						</td>
						<td class="text-center">
							<button type="button" class="btn btn-warning"
								onclick="edit(<?=$id_ukm?>,<?=$row->id_anggota_ukm?>)"><i
									class="ti ti-pencil"></i></button>
							<button type="button" class="btn btn-danger"
								onclick="hapus(<?=$id_ukm?>,<?=$row->id_anggota_ukm?>)"><i
									class="ti ti-trash"></i></button>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="<?=base_url();?>assets/DataTables/datatables.js"></script>
<script>
	let table = new DataTable('#myTable', {
		// options
		responsive: true
	});

	function tambah(id_ukm) {
		window.open("<?=base_url('cfungsionaris/anggota_tambah/')?>" + id_ukm, '_self');
	};

	function edit(id_ukm, id_anggota_ukm) {
		window.open("<?=base_url('cfungsionaris/anggota_edit/')?>" + id_ukm + '/' + id_anggota_ukm, '_self');
	};

	function hapus(id_ukm, id_anggota_ukm) {
		if (confirm('apakah ingin menghapus data id ' + id_anggota_ukm + ' ini?')) {
			window.open("<?=base_url('cfungsionaris/delete_anggota/')?>" + id_ukm + '/' + id_anggota_ukm, '_self');
		}
	};

</script>
