<style>
	main {
		display: grid;
		grid-template-columns: 1fr repeat(6, minmax(auto, 100px)) 1fr;
		grid-gap: 40px;
		padding: 60px 0;
	}

	.cards {
		grid-column: 2 / span 12;
		display: grid;
		grid-template-columns: repeat(8, minmax(auto, 100px));
		grid-gap: 40px;
	}

	.card {
		width:100%;
		height: auto;
		border: 1px solid #ccc;
		border-radius: 10px;
		overflow: hidden;
		position: relative;
		grid-column-end: span 4;
		display: flex;
		flex-direction: column;
		cursor: pointer;
		transition: all 0.3s ease 0s;
	}

	.card-header {
		background-color: #3498db;
		color: #fff;
		padding: 10px;
		text-align: center;
	}

	.card-body {
		padding: 20px;
	}

	.nama {
		font-size: 18px;
		font-weight: bold;
		margin-bottom: 10px;
		padding-left: 10px;
	}

	.nim {
		font-size: 14px;
		margin-bottom: 10px;
		padding-left: 10px;
	}

	.divataujab {
		font-size: 12px;
		padding-left: 10px;
	}

	.photo {
		width: 75px;
		border-radius: 15%;
		margin-bottom: 10px;
		margin-right: 10px;
	}

	@media only screen and (max-width: 1000px) {
		.card {
			grid-column-end: span 12;
		}
	}

	@media only screen and (max-width: 800px) {
		main {
			grid-gap: 20px;
		}
		.card {
			grid-column-end: span 12;
		}
	}

	@media only screen and (max-width: 600px) {
		main {
			grid-template-columns: 10px repeat(6, 1fr) 10px;
			grid-gap: 10px;
		}

		.cards {
			grid-column: 2 / span 6;
			grid-template-columns: repeat(12, 1fr);
			grid-gap: 20px;
		}

		.card {
			grid-column-end: span 12;
		}
	}

</style>
<main>
	<section class="cards">
		<?php 
        if(!empty($data_cardF)):
        foreach($data_cardF as $row):?>
		<div class="card">
			<div class="card-header bg-primary">
				<?=$row->nama_ukm?>
			</div>
			<div class="card-body">
				<table>
					<tr>
						<td>
							<img src="<?=base_url('assets/uploads/img_mahasiswa/').$this->session->userdata('img_mahasiswa')?>"
								class="photo" alt="Pas Foto" width="75">
						</td>

						<td>
                        <div class="nama"><?= $row->nama_mahasiswa?></div>
							<div class="nim"><?= $row->nim?></div>
                            <table>
                                <tr class="divataujab">
                                    <td class="divataujab">Role</td>
                                    <td class="divataujab"> : </td>
                                    <td class="divataujab">Fungsionaris </td>
                                </tr>
                                <tr>
                                    <td class="divataujab">Jabatan</td>
                                    <td class="divataujab"> : </td>
                                    <td class="divataujab"><?= $row->nama_jabatan?></td>
                                </tr>
                            </table>
							<!-- <div class="divataujab">Role : Fungsionaris</div>
							<div class="divataujab">Jabatan : <?= $row->nama_jabatan?></div> -->
						</td>
					</tr>
				</table>
				<div class="d-flex mt-3 justify-content-end">
					<a href="<?=base_url().'kartu/printcardf/'.$row->id_mahasiswa.'/'.$row->id_ukm?>" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
		<?php endforeach;endif;?>

        <?php
        if(!empty($data_cardA)):
        
        foreach($data_cardA as $row):?>
		<div class="card">
			<div class="card-header bg-secondary">
				<?=$row->nama_ukm?>
			</div>
			<div class="card-body">
				<table>
					<tr>
						<td>
							<img src="<?=base_url('assets/uploads/img_mahasiswa/').$this->session->userdata('img_mahasiswa')?>"
								class="photo" alt="Pas Foto" width="75">
						</td>
						<td>
							<div class="nama"><?= $row->nama_mahasiswa?></div>
							<div class="nim"><?= $row->nim?></div>
							<table>
                                <tr class="divataujab">
                                    <td class="divataujab">Role</td>
                                    <td class="divataujab"> : </td>
                                    <td class="divataujab">Anggota UKM </td>
                                </tr>
                                <tr>
                                    <td class="divataujab">Devisi</td>
                                    <td class="divataujab"> : </td>
                                    <td class="divataujab"><?= $row->nama_devisi?></td>
                                </tr>
                            </table>
						</td>
					</tr>
				</table>
				<div class="d-flex justify-content-end mt-3">
					<a href="<?=base_url('Pdfview')?>" class="btn btn-secondary">Print</a>
				</div>
			</div>

		</div>
		<?php endforeach;endif;?>
	</section>
</main>
