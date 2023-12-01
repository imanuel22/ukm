<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<div class="rounded-4 p-4 bg-info mt-3">
	<div class="row mb-2">
		<div class="col-10">
			<h1 class="fw-bold ">Table prodi</h1>
		</div>
		<div class="col-2">
			<button type="button" onclick="tambah()" class="btn btn-primary col-12">+Data</button>
		</div>
	</div>
	
<table id="myTable" class="table display table-warning">
    <thead>
        <tr>
            <th>no</th>
            <th>nama prodi</th>
            <th>nama jurusan</th>
            <th>jenjang</th>
            <th>NoSKprodi</th>
            <th>Kajur</th>
            <th>keterangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
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
					<button type="button" class="btn btn-warning" onclick="edit(<?=$row->id_prodi?>)"><i class="bi bi-pencil"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_prodi?>)"><i class="bi bi-trash3"></i></button>
				</td>
			</tr>
		<?php endforeach;?>
    </tbody>
</table>
</div>
<script src="<?=base_url();?>assets/DataTables/datatables.js"></script>
<script>
	//var DataTable = require( 'datatables.net' );
 
	let table = new DataTable('#myTable', {
		// config options...
	});
</script>
<script>

	function tambah(){
		window.open("<?=base_url('csuperadmin/tambah_prodi/')?>",'_self');

	}
	function edit(id_prodi){
		window.open("<?=base_url('csuperadmin/edit_prodi/')?>"+id_prodi,'_self');
	}
	function hapus(id_prodi){
		if (confirm('apakah ingin menghapus data id '+id_prodi+' ini?')) {
			window.open("<?=base_url('csuperadmin/delete_prodi/')?>"+id_prodi,'_self');
		}
	}
</script>
