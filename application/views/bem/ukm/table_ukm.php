<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table Master UKM</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-header d-flex justify-content-end">
		<button type="button" onclick="tambah()" class="btn btn-light px-5">+Data</button>
	</div>
	<div class="card-body">
		<div style="overflow-x:scroll;">
			<table id="myTable" class="table table-bordered display table-striped ">
				<thead class="table-light">
					<tr>
            <th class="text-center">no</th>
            <th class="text-center">nama_ukm</th>
            <th class="text-center">nama_mahasiswa</th>
            <th class="text-center">Aktion</th>
        </tr>
    </thead>
	<tbody class="table-light">
        <?php 
		$no=1;
		foreach($data_ukm as $row):
		?>
			<tr >
				<td><?=$no++?></td>
				<td><?=$row->nama_ukm?></td>
				<td><?=$row->nama_mahasiswa?></td>
				<td class="text-center">
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_ukm?>)"><i class="ti ti-trash"></i></button>
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
