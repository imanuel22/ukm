<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table jabatan</h3>
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
            <th class="text-center">nama_jabatan</th>
            <th class="text-center">deskripsi_jabatan</th>
            <th class="text-center">Aktion</th>
        </tr>
    </thead>
    <tbody class="bg-light">
        <?php 
		$no=1;
		foreach($data_jabatan as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->nama_jabatan?></td>
				<td><?=$row->deskripsi_jabatan?></td>
				<td class="text-center">
					<button type="button" class="btn btn-warning" onclick="edit(<?=$id_ukm?>,<?=$row->id_jabatan?>)"><i class="ti ti-pencil"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$id_ukm?>,<?=$row->id_jabatan?>)"><i class="ti ti-trash"></i></button>
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
