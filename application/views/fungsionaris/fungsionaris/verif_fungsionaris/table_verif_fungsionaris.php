<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table Fungsionaris</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-body">
		<div style="overflow-x:scroll;">
			<table id="myTable" class="table table-bordered display table-striped ">
				<thead class="table-light">
					<tr>
						<th class="text-center">No</th>
            <th class="text-center">id_mahasiswa</th>
			<th class="text-center">id_jabatan</th>
			<th class="text-center">alasan</th>
			<th class="text-center">Action</th>
        </tr>
    </thead>
	
	<tbody class=" table-light">
        <?php 
		$no=1;
		foreach($data_verif_fungsionaris as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->id_mahasiswa?></td>
				<td><?=$row->id_jabatan?></td>
				<td><?=$row->alasan?></td>
				<td class="text-center">
					<button type="button" class="btn btn-warning" onclick="verif(<?=$row->id_daftar_fungsionaris?>,<?=$id_ukm?>)"><i class="ti ti-eye"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_daftar_fungsionaris?>,<?=$id_ukm?>)"><i class="ti ti-trash"></i></button>
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
	function verif(id_daftar_anggota,id_ukm){
		window.open("<?=base_url('cfungsionaris/verif_fungsionaris_form/')?>"+id_daftar_anggota+'/'+id_ukm,'_self');
	}
	function hapus(id_daftar_anggota,id_ukm){
		if (confirm('apakah ingin menghapus data id '+id_daftar_anggota+' ini?')) {
			window.open("<?=base_url('cfungsionaris/proseshapus/')?>"+id_daftar_anggota+'/'+id_ukm,'_self');
		}
	}
</script>
