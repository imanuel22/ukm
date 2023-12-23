<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table Jurusan</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-header d-flex justify-content-end">
			<button type="button" onclick="hideShow()" class="btn btn-light px-5">+Data</button>
		</div>
	<div class="card-body">
	<div style="overflow-x:scroll;">
		<table id="myTable" class="table table-bordered display table-striped ">
			<thead class="table-light">
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Nama Jurusan</th>
					<th class="text-center">NoSK.Jurusan</th>
					<th class="text-center">Kepala Jurusan</th>
					<th class="text-center">Keterangan</th>
					<th class="text-center">Action</th>
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
						<button type="button" class="btn btn-warning" onclick="editdata(<?=$row->id_jurusan?>)"><i
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
	var div = document.getElementById('form-jurusan');
	var display = 1;
	function hideShow() {
		if(display == 1)
		{
			div.style.display = 'block';
			display = 0;
		}
		else{
			div.style.display = 'none';
			display = 1;
		}
	}

	function edit(id_jurusan) {
		window.open("<?=base_url('csuperadmin/edit_jurusan/')?>" + id_jurusan, '_self');
	}

	function hapus(id_jurusan) {
		if (confirm("Apakah yakin menghapus data ini?")) {
			window.open("<?=base_url('csuperadmin/delete_jurusan/')?>" + id_jurusan, '_self');
		}
	}

	function editdata(id_jurusan)
	{	
		div.style.display = 'block';
		display = 0;
		load("csuperadmin/edit_jurusan/"+id_jurusan,"#script");	
	}

</script>
