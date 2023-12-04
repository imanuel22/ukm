<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<div class="rounded-4 p-4 bg-info mt-3">
	<div class="row mb-2">
		<div class="col-10">
			<h1 class="fw-bold ">Table jabatan</h1>
		</div>
		<div class="col-2">
			<button type="button" onclick="tambah(<?=$id_ukm?>)" class="btn btn-primary p-1 col-12">+Data</button>
		</div>
	</div>
	<div  style="overflow-x:auto;">

<table id="myTable" class="table display table-warning table-hover table-responsive">
    <thead>
        <tr>
            <th>no</th>
            <th>nama_jabatan</th>
            <th>deskripsi_jabatan</th>
            <th>Aktion</th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$no=1;
		foreach($data_jabatan as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->nama_jabatan?></td>
				<td><?=$row->deskripsi_jabatan?></td>
				<td>
					<button type="button" class="btn btn-warning" onclick="edit(<?=$id_ukm?>,<?=$row->id_jabatan?>)"><i class="bi bi-pencil"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$id_ukm?>,<?=$row->id_jabatan?>)"><i class="bi bi-trash3"></i></button>
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

    function tambah(id_ukm){
		window.open("<?=base_url('cfungsionaris/jabatan_tambah/')?>"+id_ukm,'_self');
	};
	function edit(id_ukm,id_jabatan){
		window.open("<?=base_url('cfungsionaris/jabatan_edit/')?>"+id_ukm+'/'+id_jabatan,'_self');
	};
	function hapus(id_ukm,id_jabatan){
		if (confirm('apakah ingin menghapus data id '+id_jabatan+' ini?')) {
			window.open("<?=base_url('cfungsionaris/delete_jabatan/')?>"+id_ukm+'/'+id_jabatan,'_self');
		}
	};
</script>
