<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<div class="rounded-4 p-4 bg-info mt-3">
	<div class="row mb-2">
		<div class="col-10">
			<h1 class="fw-bold ">Table Verif Mahasiswa	</h1>
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
            <th>nama_mhs</th>
			<th>nim_mhs</th>
			<th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$no=1;
		foreach($data_verifmhs as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->nama_mhs?></td>
				<td><?=$row->nim_mhs?></td>
				<td>
					<button type="button" class="btn btn-warning" onclick="verif(<?=$row->id_daftar_mhs?>)"><i class="bi bi-check2-circle"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_daftar_mhs?>)"><i class="bi bi-trash3"></i></button>
				</td>
			</tr>
		<?php endforeach;?>
    </tbody>
	</table>

</div>
</div>
<script src="<?=base_url();?>assets/DataTables/datatables.js"></script>
<script>
	let table = new DataTable('#myTable1', {
    // options
	responsive: true
	});

	function verif(id_daftar_mhs){
		window.open("<?=base_url('cbem/verifmhs_form/')?>"+id_daftar_mhs,'_self');
	}
	function hapus(id_daftar_mhs){
		if (confirm('apakah ingin menghapus data id '+id_daftar_mhs+' ini?')) {
			window.open("<?=base_url('cbem/proseshapus/')?>"+id_daftar_mhs,'_self');
		}
	}
</script>
