<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<div class="rounded-4 p-4 bg-info mt-3">
	<div class="row mb-2">
		<div class="col-10">
			<h1 class="fw-bold ">Table ukm</h1>
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
            <th>nama_ukm</th>
            <th>nama_mahasiswa</th>
            <th>Aktion</th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$no=1;
		foreach($data_ukm as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->nama_ukm?></td>
				<td><?=$row->nama_mahasiswa?></td>
				<td>
					<button type="button" class="btn btn-warning" onclick="edit(<?=$row->id_ukm?>)"><i class="bi bi-pencil"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_ukm?>)"><i class="bi bi-trash3"></i></button>
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
		window.open("<?=base_url('cbem/ukm_tambah/')?>",'_self');
	}
	function edit(id_ukm){
		window.open("<?=base_url('cbem/ukm_edit/')?>"+id_ukm,'_self');
	}
	function hapus(id_ukm){
		if (confirm('apakah ingin menghapus data id '+id_ukm+' ini?')) {
			window.open("<?=base_url('cbem/delete_data_mhs/')?>"+id_ukm,'_self');
		}
	}
</script>
