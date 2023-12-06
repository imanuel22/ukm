<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<div class="rounded-4 p-4 bg-info mt-3">
	<div class="row mb-2">
		<div class="col-10">
			<h1 class="fw-bold ">Table Verif anggota	</h1>
		</div>
	</div>
	<div  style="overflow-x:auto;">

<table id="myTable" class="table display table-warning table-hover table-responsive">
    <thead>
        <tr>
            <th>no</th>
            <th>id_mahasiswa</th>
			<th>id_jabatan</th>
			<th>alasan</th>
			<th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$no=1;
		foreach($data_verif_fungsionaris as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->id_mahasiswa?></td>
				<td><?=$row->id_jabatan?></td>
				<td><?=$row->alasan?></td>
				<td>
					<button type="button" class="btn btn-warning" onclick="verif(<?=$row->id_daftar_fungsionaris?>)"><i class="bi bi-check2-circle"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_daftar_fungsionaris?>)"><i class="bi bi-trash3"></i></button>
				</td>
			</tr>
		<?php endforeach;?>
    </tbody>
	</table>

</div>
</div>
<script src="<?=base_url();?>assets/DataTables/datatables.js"></script>
<script>
	let table = new DataTable('#myTable', {
    // options
	responsive: true
	});
	function verif(id_daftar_anggota){
		window.open("<?=base_url('cfungsionaris/verif_fungsionaris_form/')?>"+id_daftar_anggota,'_self');
	}
	function hapus(id_daftar_anggota){
		if (confirm('apakah ingin menghapus data id '+id_daftar_anggota+' ini?')) {
			window.open("<?=base_url('cfungsionaris/proseshapus/')?>"+id_daftar_anggota,'_self');
		}
	}
</script>
