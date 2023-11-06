<h1>data verif</h1>
<form action="" method="post">
	<table class="table table-warning">
			<tr>
				<th>Nama mahasiswa</th>
				<td><?=$datamhs->nama_mhs?></td>			
			</tr>
			<tr>
				<th>Nim</th>
				<td><?=$datamhs->nim_mhs?></td>
			</tr>
			<tr>
				<th>jurusan</th>
				<td><?=$datamhs->id_prodi?></td>
			</tr>
			<tr>
				<th>prodi</th>
				<td><?=$datamhs->id_prodi?></td>
			</tr>
			<tr>
				<th>no telp</th>
				<td><?=$datamhs->no_telp?></td>
			</tr>
			<tr>
				<th>KTM</th>
				<td><img src="" alt="<?=$datamhs->img_ktm?>" width="300" height="150"></td>
			</tr>
			<tr>
				<th>Foto</th>
				<td><img src="" alt="<?=$datamhs->img_mahasiswa?>" width="100" height="150"></td>
			</tr>
	</table>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Terima</button>
		<button type="submit" class="btn btn-danger">tolak</button>
	</div>
</form>
