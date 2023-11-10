<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.min.css">

<div class=" rounded-5 p-4 bg-2">
<h1>table jurusan</h1>
<table id="myTable" class="table display">
    <thead>
        <tr>
            <th>no</th>
            <th>nama_jurusan</th>
            <th>NoSKJurusan</th>
            <th>Kajur</th>
            <th>keterangan</th>

            <th>Aktion</th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$no=1;
		foreach($data_jurusan as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->nama_jurusan?></td>
				<td><?=$row->NoSKJurusan?></td>
				<td><?=$row->Kajur?></td>
				<td><?=$row->keterangan?></td>
				<td>
					<button type="button" class="btn btn-warning" onclick="edit(<?=$row->id_jurusan?>)"><i class="bi bi-pencil"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_jurusan?>)"><i class="bi bi-trash3"></i></button>
				</td>
			</tr>
		<?php endforeach;?>
    </tbody>
</table>
</div>

<script src="<?=base_url();?>assets/DataTables/datatables.min.js"></script>
<script>
	
	// new DataTable('#myTable');
	let table = new DataTable('#myTable', {
    // options
	responsive: true
	});

	function edit(id_jurusan){
		window.open("<?=base_url('cbem/jurusan_edit/')?>"+id_jurusan,'_self');
	}
	function hapus(id_jurusan){
		if (confirm('apakah ingin menghapus data id '+id_jurusan+' ini?')) {
			window.open("<?=base_url('cbem/delete_data_jurusan/')?>"+id_jurusan,'_self');
		}
	}
</script>
