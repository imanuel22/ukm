<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table jabatan</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-header d-flex justify-content-end">
	<button id="btn-tampil" type="button" onclick="hideShow()" class="btn btn-light px-5">Form Show</button>
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
					<button type="button" class="btn btn-warning" onclick="editdata(<?=$row->id_jabatan?>)"><i class="ti ti-pencil"></i></button>
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

	});
	var div = document.getElementById('form');
	var btn = document.getElementById('btn-tampil');
	var display = 1;

	function hideShow() {
		if (display == 1) {
			btn.textContent = 'Form Hide'
			div.style.display = 'block';
			display = 0;
		} else {
			btn.textContent = 'Form Show'
			div.style.display = 'none';
			display = 1;
		}
	}

	function editdata(id_jabatan) {
		btn.textContent = 'Form Hide'
		div.style.display = 'block';
		display = 0;
		load("cfungsionaris/edit_jabatan/" + id_jabatan, "#script");
	}

	function hapus(id_ukm,id_jabatan){
		if (confirm('apakah ingin menghapus data id '+id_jabatan+' ini?')) {
			window.open("<?=base_url('cfungsionaris/delete_jabatan/')?>"+id_ukm+'/'+id_jabatan,'_self');
		}
	};
</script>
