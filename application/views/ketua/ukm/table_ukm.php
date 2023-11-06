<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<div class=" rounded-5 p-4">
<h1>table UKM</h1>
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>no</th>
            <th>deskripsi</th>
            <th>peraturan</th>
            <th>img_ukm</th>
            <th>tgl_buat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
		$no=1;
		foreach($data_ukm as $row):
		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$row->deskripsi?></td>
				<td><?=$row->peraturan?></td>
				<td><img src="" alt="<?=$row->img_ukm?>" width="100" height="150" class="rounded"></td>
				<td><?=$row->tgl_buat?></td>
				<style>
				</style>
				<td>
					<button type="button" class="btn btn-warning" onclick="edit(<?=$row->id_ukm?>)"><i class="bi bi-pencil"></i></button>
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

	function edit(id_ukm){
		window.open("<?=base_url('cketua/ukm_edit/')?>"+id_ukm,'_self');
	}

</script>
