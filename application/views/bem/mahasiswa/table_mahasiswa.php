<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<h1>table mahasiswa</h1>
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>no</th>
            <th>nim</th>
            <th>Nama Mahasiswa</th>
            <th>Angkatan</th>
            <th>Password</th>
            <th>No Telp</th>
            <th>Img</th>
            <th>Status</th>
            <th>Prodi</th>
            <th>Aktion</th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$no=1;
		foreach($data_mhs as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->nim?></td>
				<td><?=$row->nama_mahasiswa?></td>
				<td><?=$row->angkatan?></td>
				<td><?=$row->password?></td>
				<td><?=$row->no_telp?></td>
				<td><?=$row->img_mahasiswa?></td>
				<td><?=$row->status?></td>
				<td><?=$row->id_prodi?></td>
				<td>
					<button type="button" class="btn btn-warning"><i class="bi bi-pencil"></i></button>
					<button type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
				</td>
			</tr>
		<?php endforeach;?>
    </tbody>
</table>
  
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
	let table = new DataTable('#myTable', {
    // options
	responsive: true
	});
</script>
