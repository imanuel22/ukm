<style>
	.img-ukm{
		width: 100%;
		padding: 15px;
		overflow:hidden;
	}

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
	}

	.card__image-container {
		width: 100%;
		padding-top: 100%;
		overflow: hidden;
		position: relative;
	}

	.card__image-container img {
		width: 60%;
		height: 80%;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.card__content {
		padding: 20px;
		margin-top: -50px;
	}

	.card__title {
		margin-top: 10px;
		margin-bottom: -15px;
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
	
	.card__image-container1 {
		width: 100%;
		padding-top: 100%;
		overflow: hidden;
		position: relative;
	}

	.card__image-container1 img {
		width: 75%;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.card__content1 {
		padding: 20px;
	}

	.card__title1 {
		margin-bottom: 20px;
	}

	.card__info1 {
		display: flex;
		align-self: end;
		align-items: center;
	}

</style>


<div class=" bg-primary text-light rounded-4 p-3 mb-3 text-center">
	<div class="nama-ukm mb-5">
		<h1 class="mt-5 text-light"><?=$data_ukm->nama_ukm?></h1>
	</div>
	<div class="d-flex justify-content-center">
		<div class=" bg-light rounded-3 mb-5 ">
			<img class="img-ukm" src="<?=base_url('assets/uploads/ukm/').$data_ukm->img_ukm?>" class="rounded-circle bg-light" alt="">
		</div>
	</div>
	<div class="deskripsi mb-5">
		<h3 class="text-light "></h3>
		<p><?=$data_ukm->deskripsi?></p>
	</div>
	<div class="row mb-3">
		<div class="col-8 text-light shadow">
			<h3 class="text-light">Peraturan</h3>
			<p class="text-start"><?=$data_ukm->peraturan?></p>
		</div>
		<div class="col-4 text-light shadow-lg">
			<h3 class=" text-light">Divisi</h3>
			<ul>
				<?php $no=1; foreach($data_devisi as $row):?>
				<li class="text-start"><?=$no++.'. '.$row->nama_devisi?></li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
</div>

<div class=" bg-primary text-light rounded-4 p-3 mb-3">
	<div>
		<h3 class=" text-light text-center mt-3">Fungsionaris</h3>
	</div>
	<main>
		<section class="cards">
			<?php foreach($data_fungsionaris as $row): ?>
			<div class="card bg-light rounded-3">
				<h4 class="card__title text-center text-capitalize">
					<?=$row->nama_jabatan?>
				</h4>
				<div class="card__image-container rounded-3">
					<img src="<?=base_url('assets/uploads/img_mahasiswa/').$row->img_mahasiswa?>" class="rounded-3">
				</div>
				<div class="card__content">
					<h4 class=" text-center text-capitalize">
						<?=$row->nama_mahasiswa?>
					</h4>
				</div>
			</div>
			<?php endforeach; ?>
		</section>
	</main>
</div>
<?php
if(!empty($data_proker)):
?>
<div class=" bg-primary text-light rounded-4 p-3 mb-3">
	<div>
		<h3 class=" text-light text-center mt-3">Program Kerja</h3>
	</div>
	<div class="rounded-3">
		<main>
			<section class="cards">
				<?php foreach($data_proker as $row): ?>
				<a href="<?=base_url('cmahasiswa/proker/').$id_ukm.'/'.$row->id_proker;?>"
					class="card rounded-3 bg-light">
					<div class="card__content1">
						<div class="card__image-container1  rounded-3 mb-2">
						 <img src="<?=base_url('assets/uploads/img_proker/').$row->img_proker?>"  />
						</div>
						<h4 class="card__title1 text-center">
							<?=$row->nama_proker?>
						</h4>
						<h6 class="card-info text-center1 text-center mb-4">
							<?php 
							if(!empty($row->deskripsi)){
								echo substr($row->deskripsi,0,200);
							}
							?>
						</h6>
						<div class="d-flex justify-content-end ">
							<button type="button" onclick="opens(<?=$row->id_ukm?>)" class="btn btn-primary">View</button>
						</div>
					</div>
				</a>
				<?php endforeach; ?>
			</section>
		</main>
	</div>
</div>
<?php endif; ?>