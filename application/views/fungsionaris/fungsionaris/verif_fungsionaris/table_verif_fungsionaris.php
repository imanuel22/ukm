<link rel="stylesheet" href="<?=base_url();?>assets/DataTables/datatables.css">
<h3 class="mb-4">Table Verifikasi Fungsionaris</h3>
<div class="card bg-primary mt-3 text-light">
	<div class="card-body">
		<div style="overflow-x:scroll;">
			<table id="myTable" class="table table-bordered display table-striped ">
				<thead class="table-light">
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">IMG</th>
						<th class="text-center">Nama Mahasiswa</th>
						<th class="text-center">NIM</th>
						<th class="text-center">Jurusan</th>
						<th class="text-center">Prodi</th>
						<th class="text-center">Jabatan</th>
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
						<td>
							<img src="<?=base_url('assets/uploads/img_mahasiswa/')?><?=$row->img_mahasiswa?>"
								alt="<?=$row->img_mahasiswa?>" width="75" height="100">
						</td>						<td><?=$row->nama_mahasiswa?></td>
						<td><?=$row->nim?></td>
						<td><?=$row->nama_jurusan?></td>
						<td><?=$row->nama_prodi?></td>
						<td><?=$row->nama_jabatan?></td>
						<td class="text-center">
							<button type="button" class="btn btn-info"
								onclick="verifdata(<?=$row->id_daftar_fungsionaris?>)"><i
									class="ti ti-eye"></i></button>
							<button type="button" class="btn btn-danger"
								onclick="hapus(<?=$row->id_daftar_fungsionaris?>,<?=$id_ukm?>)"><i class="ti ti-trash"></i></button>
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

});
var div = document.getElementById('form');
var btn = document.getElementById('btn-tampil');
var display = 1;

	function verifdata(id_dfungsionaris) {
			div.style.display = 'block';
			display = 0;
			load("cfungsionaris/verifdatafungsionaris/" + id_dfungsionaris, "#script");
		}


		function hapus(id_dfungsionaris,id_ukm) {
			if (confirm('apakah ingin menghapus data id ' + id_dfungsionaris + ' ini?')) {
				window.open("<?=base_url('cfungsionaris/proses_hapus_fungsionaris/')?>" + id_dfungsionaris+'/'+id_ukm, '_self');
			}
		}

	</script>
