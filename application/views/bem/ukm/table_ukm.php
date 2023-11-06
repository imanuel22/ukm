<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<div class=" rounded-5 p-4">
<h1>table ukm</h1>
<table id="myTable" class="display">
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
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
	let table = new DataTable('#myTable', {
    // options
	responsive: true
	});

	function edit(id_ukm){
		window.open("<?=base_url('cbem/ukm_edit/')?>"+id_ukm,'_self');
	}
	function hapus(id_ukm){
		if (confirm('apakah ingin menghapus data id '+id_ukm+' ini?')) {
			window.open("<?=base_url('cbem/delete_data_mhs/')?>"+id_ukm,'_self');
		}
	}
</script>
