<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table BEM</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-header d-flex justify-content-end">
		<button type="button" onclick="tambah()" class="btn btn-light px-5">+Data</button>
	</div>
	<div class="card-body">
		<div style="overflow-x:scroll;">
			<table id="myTable" class="table table-bordered display table-striped ">
				<thead class="table-light">
					<tr>
            <th class=" text-center">No</th>
            <th class=" text-center">NIM</th>
            <th class=" text-center">Nama Mahasiswa</th>
            <th class=" text-center">Angkatan</th>
            <th class=" text-center">Nomer Telphone</th>
            <th class=" text-center">Img</th>
            <th class=" text-center">Status</th>
            <th class=" text-center">Prodi</th>
            <th class=" text-center">Action</th>
        </tr>
    </thead>
	<tbody class="table-light">
        <?php 
		$no=1;
		foreach($data_bem as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->nim?></td>
				<td><?=$row->nama_mahasiswa?></td>
				<td><?=$row->angkatan?></td>
				<td><?=$row->no_telp?></td>
				<td>
					<img src="<?=base_url('assets/uploads/img_mahasiswa/')?><?=$row->img_mahasiswa?>" alt="<?=$row->img_mahasiswa?>" width="75" height="100">
				</td>
				<td class="text-center">
					<?php if ($row->status == 'aktif'):?>
                        <span class="badge bg-primary rounded-3 fw-semibold">Aktif</span>
					<?php else:?>
                        <span class="badge bg-danger rounded-3 fw-semibold">Tidak Aktif</span>
					<?php endif ?>
					
				</td>
				<td><?=$row->nama_prodi?></td>
				<td class="text-center">
					<button type="button" class="btn btn-warning" onclick="edit(<?=$row->id_mahasiswa?>)"><i class="ti ti-pencil"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_mahasiswa?>)"><i class="ti ti-trash"></i></button>
				</td>
			</tr>
		<?php endforeach;?>
    </tbody>
</table>

</div>
</div>
<script src="<?=base_url();?>assets/DataTables/datatables.min.js"></script>
<script>
	let table = new DataTable('#myTable', {
    // options
	responsive: true
	});
	function tambah(){
		window.open("<?=base_url('csuperadmin/tambah_bem/')?>",'_self');

	}
	function edit(id_mahasiswa){
		window.open("<?=base_url('csuperadmin/edit_bem/')?>"+id_mahasiswa,'_self');
	}
	function hapus(id_mahasiswa){
		if (confirm('apakah ingin menghapus data id '+id_mahasiswa+' ini?')) {
			window.open("<?=base_url('csuperadmin/delete_bem/')?>"+id_mahasiswa,'_self');
		}
	}
</script>
