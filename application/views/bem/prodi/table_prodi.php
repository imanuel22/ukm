<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<div class=" rounded-5 p-4">
<h1>table prodi</h1>
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>no</th>
            <th>nama_prodi</th>
			<th>id_jurusan</th>
			<th>jenjang</th>
            <th>NoSKPProdi</th>
            <th>Kaprodi</th>
            <th>Keterangan</th>
            <th>Aktion</th>
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
				<td><?=$row->id_jurusan?></td>
				<td><?=$row->jenjang?></td>
				<td><?=$row->NoSKPProdi?></td>
				<td><?=$row->Kaprodi?></td>
				<td><?=$row->Keterangan?></td>
				<td>
					<button type="button" class="btn btn-warning" onclick="edit(<?=$row->id_prodi?>)"><i class="bi bi-pencil"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_prodi?>)"><i class="bi bi-trash3"></i></button>
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

	function edit(id_prodi){
		window.open("<?=base_url('cbem/prodi_edit/')?>"+id_prodi,'_self');
	}
	function hapus(id_prodi){
		if (confirm('apakah ingin menghapus data id '+id_prodi+' ini?')) {
			window.open("<?=base_url('cbem/delete_data_prodi/')?>"+id_prodi,'_self');
		}
	}
</script>
