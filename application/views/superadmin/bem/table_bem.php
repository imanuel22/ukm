<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<div class="rounded-4 p-4 bg-info mt-3">
	<div class="row mb-2">
		<div class="col-10">
			<h1 class="fw-bold ">Table bem</h1>
		</div>
		<div class="col-2">
			<button type="button" onclick="tambah()" class="btn btn-primary col-12">+Data</button>
		</div>
	</div>
	
<table id="myTable" class="table display table-warning">
    <thead>
        <tr>
            <th>no</th>
            <th>nim</th>
            <th>nama_mahasiswa</th>
            <th>angkatan</th>
            <th>no_telp</th>
            <th>img_mahasiswa</th>
            <th>status</th>
            <th>id_prodi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$no=1;
		foreach($data_bem as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->nim?></td>
				<td><?=$row->nama_mahasiswa?></td>
				<td><?=$row->angkatan?></td>
				<td><?=$row->no_telp?></td>
				<td><?=$row->img_mahasiswa?></td>
				<td><?=$row->status?></td>
				<td><?=$row->id_prodi ?></td>
				<td class="text-center">
					<button type="button" class="btn btn-warning" onclick="edit(<?=$row->id_mahasiswa?>)"><i class="bi bi-pencil"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_mahasiswa?>)"><i class="bi bi-trash3"></i></button>
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
		window.open("<?=base_url('csuperadmin/tambah_bem/')?>",'_self');

	}
	function edit(id_mahasiswa){
		window.open("<?=base_url('csuperadmin/edit_bem/')?>"+id_mahasiswa,'_self');
	}
	function hapus(id_mahasiswa){
		if (confirm('apakah ingin menghapus data id '+id_mahasiswa+' ini?')) {
			window.open("<?=base_url('csuperadmin/delete_data_bem/')?>"+id_mahasiswa,'_self');
		}
	}
</script>
