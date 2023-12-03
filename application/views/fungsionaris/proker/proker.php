<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<div class="rounded-4 p-4 bg-info mt-3">
	<div class="row mb-2">
		<div class="col-10">
			<h1 class="fw-bold ">Table proker</h1>
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
            <th>nama_proker</th>
            <th>deskripsi</th>
            <th>peraturan</th>
            <th>Aktion</th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$no=1;
		foreach($data_proker as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->nama_proker?></td>
				<td><?=$row->deskripsi?></td>
				<td><?=$row->peraturan?></td>
				<td>
					<button type="button" class="btn btn-warning" onclick="edit(<?=$id_ukm?>,<?=$row->id_proker?>)"><i class="bi bi-pencil"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$id_ukm?>,<?=$row->id_proker?>)"><i class="bi bi-trash3"></i></button>
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
		window.open("<?=base_url('cfungsionaris/proker_tambah/')?>"+id_ukm,'_self');
	};
	function edit(id_ukm,id_proker){
		window.open("<?=base_url('cfungsionaris/proker_edit/')?>"+id_ukm+'/'+id_proker,'_self');
	};
	function hapus(id_ukm,id_proker){
		if (confirm('apakah ingin menghapus data id '+id_proker+' ini?')) {
			window.open("<?=base_url('cfungsionaris/delete_proker/')?>"+id_ukm+'/'+id_proker,'_self');
		}
	};
</script>
