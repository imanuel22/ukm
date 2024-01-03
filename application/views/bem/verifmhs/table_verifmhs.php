<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Tabel Verifikasi Mahasiswa</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-body">
		<div style="overflow-x:scroll;">
			<table id="myTable" class="table table-bordered display table-striped ">
				<thead class="table-light">
					<tr>
						<th class="text-center">No</th>
						<th>nama_mahasiswa</th>
						<th>nim_mhs</th>
						<th>Jurusan</th>
						<th>Prodi</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class=" table-light">
					<?php 
					$no=1;
					foreach($data_verifmhs as $row):
					?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$row->nama_mahasiswa?></td>
						<td><?=$row->nim?></td>
						<td><?=$row->nama_jurusan?></td>
						<td><?=$row->nama_prodi?></td>
						<td>
							<button type="button" class="btn btn-info"
								onclick="verifdata(<?=$row->id_daftar_mahasiswa?>)"><i class="ti ti-eye"></i></button>
							<button type="button" class="btn btn-danger"
								onclick="hapus(<?=$row->id_daftar_mahasiswa?>)"><i class="ti ti-trash"></i></button>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="<?=base_url();?>assets/DataTables/datatables.js"></script>

<script>
	let table = new DataTable('#myTable', {

	});
	var div = document.getElementById('form');
	var btn = document.getElementById('btn-tampil');
	var display = 1;

	function verifdata(id_daftar_mahasiswa) {
		div.style.display = 'block';
		display = 0;
		load("cbem/verifdatamahasiswa/" + id_daftar_mahasiswa, "#script");
	}


	function hapus(id_dmahasiswa) {
		if (confirm('Apakah ingin menghapus data ini?')) {
			window.open("<?=base_url('cbem/proseshapus/')?>" + id_dmahasiswa,
				'_self');
		}
	}

</script>
