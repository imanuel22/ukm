<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<div class="rounded-4 p-4 bg-info mt-3">
	<div class="row mb-2">
		<div class="col-10">
			<h1 class="fw-bold ">Table Mahasiswa</h1>
		</div>
		<div class="col-2">
			<button type="button" onclick="tambah()" class="btn btn-primary p-1 col-12">+Data</button>
		</div>
	</div>
	<div  style="overflow-x:auto;">

<table id="myTable" class="table display table-warning table-hover table-responsive">
    <thead>
        <tr>
            <th>no</th>
            <th>nim</th>
            <th>Nama Mahasiswa</th>
            <th>Angkatan</th>
            <th>Password</th>
            <th>No Telp</th>
            <th>Img</th>
            <th>Status</th>
            <th>Prodi</th>
            <th>Aktion</th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$no=1;
		foreach($data_mhs as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->nim?></td>
				<td><?=$row->nama_mahasiswa?></td>
				<td><?=$row->angkatan?></td>
				<td><?=$row->password?></td>
				<td><?=$row->no_telp?></td>
				<td><img src="" alt="<?=$row->img_mahasiswa?>" width="100" height="150" class="rounded"></td>
				<style>
				</style>
				<td><?=$row->status?></td>
				<td><?=$row->id_prodi?></td>
				<td>
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
	let table = new DataTable('#myTable', {
    // options
	responsive: true
	});
	function tambah(){
		window.open("<?=base_url('cbem/mahasiswa_tambah/')?>",'_self');
	}
	function edit(id_mahasiswa){
		window.open("<?=base_url('cbem/mahasiswa_edit/')?>"+id_mahasiswa,'_self');
	}
	function hapus(id_mahasiswa){
		if (confirm('apakah ingin menghapus data id '+id_mahasiswa+' ini?')) {
			window.open("<?=base_url('cbem/delete_data_mhs/')?>"+id_mahasiswa,'_self');
		}
	}
</script>
