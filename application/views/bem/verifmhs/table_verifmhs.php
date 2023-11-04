<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<div class=" rounded-5 p-4">
<h1>table prodi</h1>
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>no</th>
            <th>nama_mhs</th>
			<th>nim_mhs</th>
			<th>tb_daftar_mhscol</th>
			<th>img_ktm</th>
			<th>img_mahasiswa</th>
			<th>password</th>
			<th>no_telp</th>
			<th>id_prodi </th>
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
				<td><?=$row->tb_daftar_mhscol?></td>
				<td><?=$row->img_ktm?></td>
				<td><?=$row->img_mahasiswa?></td>
				<td><?=$row->password?></td>
				<td><?=$row->no_telp?></td>
				<td><?=$row->id_prodi ?></td>
				<td>
					<button type="button" class="btn btn-warning" onclick="verif(<?=$row->id_daftar_mhs?>)"><i class="bi bi-check2-circle"></i></button>
					<button type="button" class="btn btn-danger" onclick="hapus(<?=$row->id_daftar_mhs?>)"><i class="bi bi-trash3"></i></button>
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

	function verif(id_daftar_mhs){
		window.open("<?=base_url('cbem/verif_form/')?>"+id_daftar_mhs,'_self');
	}
	function hapus(id_daftar_mhs){
		if (confirm('apakah ingin menghapus data id '+id_daftar_mhs+' ini?')) {
			window.open("<?=base_url('cbem/delete_data_prodi/')?>"+id_prodi,'_self');
		}
	}
</script>
