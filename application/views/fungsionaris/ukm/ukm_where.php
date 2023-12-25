<style>
	.imgs {
		width: 150px;
		height: 150px;
	}

</style>
<style>
	main {
		display: grid;
		grid-template-columns: 1fr repeat(12, minmax(auto, 60px)) 1fr;
		grid-gap: 40px;
		padding: 60px 0;
	}

	.cards {
		grid-column: 2 / span 12;
		display: grid;
		grid-template-columns: repeat(12, minmax(auto, 60px));
		grid-gap: 40px;
	}

	.card {
		grid-column-end: span 4;
		display: flex;
		flex-direction: column;
		transition: all 0.3s ease 0s;
	}

	.card__image-container {
		width: 100%;
		padding-top: 100%;
		overflow: hidden;
		position: relative;
	}

	.card__image-container img {
		width: 100%;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.card__content {
		padding: 20px;
	}

	.card__title {
		margin-bottom: 20px;
	}

	.card__info {
		display: flex;
		align-self: end;
		align-items: center;
	}

	@media only screen and (max-width: 1000px) {
		.card {
			grid-column-end: span 6;
		}
	}

	@media only screen and (max-width: 700px) {
		main {
			grid-gap: 20px;
		}

		.card {
			grid-column-end: span 12;
		}
	}

	@media only screen and (max-width: 500px) {
		main {
			grid-template-columns: 10px repeat(6, 1fr) 10px;
			grid-gap: 10px;
		}

		.cards {
			grid-column: 2 / span 6;
			grid-template-columns: repeat(6, 1fr);
			grid-gap: 20px;
		}

		.card {
			grid-column-end: span 6;
		}
	}

</style>
<div class=" bg-primary text-light rounded-4 p-3 mb-3">
	<div class="row">
		<div class="col-11 ">
			<div class="row">
				<img src="<?=base_url('assets/uploads/ukm/').$data_ukm->img_ukm?>" class="imgs mx-3 col-4" alt="">
				<h1 class="col-9 mt-5 text-light"><?=$data_ukm->nama_ukm?></h1>
			</div>
		</div>
		<div class=" text-end col-1">
			<button type="button" class="btn btn-light" onclick="edit1(<?=$id_ukm?>)">Edit</button>
		</div>
	</div>
	<div class="deskripsi">
		<h1 class=" text-light">Deskripsi</h1>
		<p><?=$data_ukm->deskripsi?></p>
	</div>
	<div class="peraturan">
		<h1 class=" text-light">peraturan</h1>
		<p><?=$data_ukm->peraturan?></p>
	</div>
	<div class="devisi">
		<h1 class=" text-light">devisi</h1>
		<ul>
			<?php foreach($data_devisi as $row):?>
			<li><?=$row->nama_devisi?></li>
			<?php endforeach;?>
		</ul>
	</div>
</div>

<div class=" bg-primary text-light rounded-4 p-3 mb-3">
	<div>
		<h1 class=" text-light text-center">Fungsionaris</h1>
	</div>
	<div class="rounded-3">
		<main>
			<section class="cards">
				<?php foreach($data_fungsionaris as $row): ?>
				<div class="card rounded-3 bg-primary">
					<div class="card__content">
						<h3 class="card__title text-light text-center">
							<?=$row->nama_jabatan?>
						</h3>
						<div class="card__image-container bg-light rounded-5">
							<img src="<?=base_url('assets/uploads/img_mahasiswa/').$row->img_mahasiswa?>" />
						</div>
						<h3 class=" text-center text-light">
							<?=$row->nama_mahasiswa?>
						</h3>
					</div>
				</div>
				<?php endforeach; ?>
			</section>
		</main>
	</div>
</div>
<div class=" bg-primary text-light rounded-4 p-3 mb-3">
	<div>
		<h1 class=" text-light text-center">Proker</h1>
	</div>
	<div class="rounded-3">
		<main>
			<section class="cards">
				<?php foreach($data_proker as $row): ?>
				<a href="<?=base_url('cfungsionaris/prokers/').$id_ukm.'/'.$row->id_proker;?>" class="card rounded-3 bg-primary">
					<div class="card__image-container bg-light ">
						<img src="<?=base_url('assets/uploads/proker/')?>" />
					</div>
					<div class="card__content">
						<h3 class="card__title text-light text-center">
							<?=$row->nama_proker?>
						</h3>
						<h5 class=" text-center text-light">
							<?php 
							if(!empty($row->deskripsi)){
								echo substr($row->deskripsi,0,200);
							}
							?>
						</h5>
						<div class="d-flex justify-content-end">
							<button type="button" onclick="opens(<?=$row->id_ukm?>)" class="btn btn-light">View</button>
						</div>
					</div>
				</a>
				<?php endforeach; ?>
			</section>
		</main>
	</div>
</div>

<script>
	function edit1(id_ukm) {
		window.open('<?=base_url('cfungsionaris/ukm_edit/')?>' + id_ukm, '_self')
	}

</script>
