<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table Jurusan</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-header d-flex justify-content-end">
			<button type="button" onclick="tambah()" class="btn btn-light px-5">+Data</button>
		</div>
	<div class="card-body">
	<div style="overflow-x:scroll;">
		<table id="myTable" class="table table-bordered display table-striped ">
			<thead class="table-light ">
				<tr>
					<th>no</th>
					<th>nama_jurusan</th>
					<th>NoSKJurusan</th>
					<th>Kajur</th>
					<th>keterangan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="table-light">
				<?php 
				$no=1;
				foreach($data_jurusan as $row):
				?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$row->nama_jurusan?></td>
					<td><?=$row->NoSKJurusan?></td>
					<td><?=$row->Kajur?></td>
					<td><?=$row->keterangan?></td>
					<td class="text-center">
						<button type="button" class="btn btn-warning" onclick="edit(<?=$row->id_jurusan?>)"><i
								class="ti ti-pencil"></i></button>
						<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_jurusan?>)"><i
								class="ti ti-trash"></i></button>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<script src="<?=base_url();?>assets/DataTables/datatables.js"></script>
<script>
	//var DataTable = require( 'datatables.net' );

	let table = new DataTable('#myTable', {
		// config options...

	});

</script>
<script>
	function tambah() {
		window.open("<?=base_url('csuperadmin/tambah_jurusan/')?>", '_self');

	}

	function edit(id_jurusan) {
		window.open("<?=base_url('csuperadmin/edit_jurusan/')?>" + id_jurusan, '_self');
	}

	function hapus(id_jurusan) {
		if (confirm('apakah ingin menghapus data id ' + id_jurusan + ' ini?')) {
			window.open("<?=base_url('csuperadmin/delete_jurusan/')?>" + id_jurusan, '_self');
		}
	}

</script>
