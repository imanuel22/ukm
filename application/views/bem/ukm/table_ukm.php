<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table Master UKM</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-header d-flex justify-content-end">
	<button id="btn-tampil" type="button" onclick="hideShow()" class="btn btn-light px-5">Form Show</button>
	</div>
	<div class="card-body">
		<div style="overflow-x:scroll;">
			<table id="myTable" class="table table-bordered display table-striped ">
				<thead class="table-light">
					<tr>
            <th class="text-center">no</th>
            <th class="text-center">IMG</th>
            <th class="text-center">Nama UKM</th>
            <th class="text-center">Nama Mahasiswa</th>
            <th class="text-center">Jabatan</th>
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
				<td class="text-center">
					<img src="<?=base_url('assets/uploads/ukm/').$row->img_ukm?>" alt="" width="150" height="150"> 
				</td>
				<td><?=$row->nama_ukm?></td>
				<td><?=$row->nama_mahasiswa?></td>
				<td><?=$row->nama_jabatan?></td>
				<td class="text-center">
				<button type="button" class="btn btn-warning" onclick="editdata(<?=$row->id_ukm?>)"><i class="ti ti-pencil"></i></button>
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

	function editdata(id_ukm) {
		btn.textContent = 'Form Hide';
		div.style.display = 'block';
		display = 0;
		load("cbem/edit_ukm/" + id_ukm, "#script");
	}
	function hapus(id_ukm){
		if (confirm('apakah ingin menghapus data id ini?')) {
			if (confirm('data ini terhubung dengan data lain apakah tetap ingin menghapus?')){
				if (confirm('anda sudah yakin ingin menghapusnya data ini tidak dapat dikembalikan?')){
					window.open("<?=base_url('cbem/delete_ukm/')?>"+id_ukm,'_self')
				}
			}
		}
	}
</script>
