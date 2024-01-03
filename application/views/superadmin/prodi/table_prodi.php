<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table Prodi</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-header d-flex justify-content-end">
		<button id="btn-tampil" type="button" onclick="hideShow()" class="btn btn-light px-5">Form Show</button>
	</div>
	<div class="card-body">
		<div style="overflow-x:scroll;">
			<table id="myTable" class="table table-bordered display table-striped ">
				<thead class="table-light">
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Nama Prodi</th>
						<th class="text-center">Nama Jurusan</th>
						<th class="text-center">Jenjang</th>
						<th class="text-center">No SK. Prodi</th>
						<th class="text-center">Kepala Prodi</th>
						<th class="text-center">Keterangan</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody class="table-light">
					<?php 
						$no=1;
						foreach($data_prodi as $row):
					?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$row->nama_prodi?></td>
						<td><?=$row->nama_jurusan?></td>
						<td><?=$row->jenjang?></td>
						<td><?=$row->NoSKProdi?></td>
						<td><?=$row->Kaprodi?></td>
						<td><?=$row->Keterangan?></td>
						<td class="text-center">
							<button type="button" class="btn btn-warning" onclick="editdata(<?=$row->id_prodi?>)"><i
									class="ti ti-pencil"></i></button>
							<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_prodi?>)"><i
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
	let table = new DataTable('#myTable', {});
	var div = document.getElementById('form');
	var btn = document.getElementById('btn-tampil');
	var display = 1;

	function hideShow() {
		if (display == 1) {
			btn.textContent = 'Form Hide'
			div.style.display = 'block';
			display = 0;
		} else {
			btn.textContent = 'Form Show'
			div.style.display = 'none';
			display = 1;
		}
	}

	function editdata(id_prodi) {
		btn.textContent = 'Form Hide'
		div.style.display = 'block';
		display = 0;
		load("csuperadmin/edit_prodi/" + id_prodi, "#script");
	}

	function hapus(id_prodi) {
		if (confirm('apakah ingin menghapus data ini?')) {
			window.open("<?=base_url('csuperadmin/delete_prodi/')?>" + id_prodi, '_self');
		}
	}

</script>
