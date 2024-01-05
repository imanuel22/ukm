<?=$header?>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
	data-sidebar-position="fixed" data-header-position="fixed">
	<?=$sitebar;?>
	<!--  Main wrapper -->
	<div class="body-wrapper ">
		<?=$navbar?>
		<!-- main -->
		<div class="container-fluid">
			<?php
			$pesan = $this->session->flashdata('pesan');
			$color = $this->session->flashdata('color');
			if(!empty($pesan)):
			?>
			<div class="alert alert-<?=$color?> alert-dismissible fade show" role="alert">
				<?=$pesan?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php
			endif;
			?>
			<?php
		if(!empty($konten)||!empty($table)){
			if(!empty($konten)){
				echo $konten;
			}
			if(!empty($table)){
				echo $table;
			}
		}
		else {
		?>
			<div class="p-3 rounded-4 bg-primary bg-opacity-50">
				<h1 class="text-capitalize">Selamat Datang <?php
				if(!empty($this->session->userdata('username'))){
					echo $this->session->userdata('username');
				}
				else{
					echo $this->session->userdata('nama_mahasiswa');
				}
				?>.</h1>
				<h3>Di sistem informasi Unit Kegiatan Mahasiswa Politeknik Negeri Bali</h3>
			</div>

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
					grid-column-end: span 3;
					display: flex;
					flex-direction: column;
					transition: all 0.3s ease 0s;
				}

				.card:hover {
					transform: translateY(-7px);
				}

				@media only screen and (max-width: 1000px) {
					.card {
						grid-column-end: span 4;
					}
				}

				@media only screen and (max-width: 800px) {
					main {
						grid-gap: 30px;
					}

					.card {
						grid-column-end: span 6;
					}
				}

				@media only screen and (max-width: 600px) {
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
			<main>
				<div class="cards text-light">
					<div class="card text-center bg-primary ">
						<div class="d-flex justify-content-center">
							<img src="<?=base_url()?>assets/images/logos/ukm.png" width="100" height="100" alt="">
						</div>
						<h4 class="text-light">UKM</h4>
						<h1 class="text-light"><?= $data['ukm']?></h1>
					</div>
					<div class="card text-center bg-primary ">
						<div class="d-flex justify-content-center">
							<img src="<?=base_url()?>assets/images/logos/ukm.png" width="100" height="100" alt="">
						</div>
						<h4 class="text-light">Mahasiswa</h4>
						<h1 class="text-light"><?= $data['mahasiswa']?></h1>
					</div>
					<div class="card text-center bg-primary ">
						<div class="d-flex justify-content-center">
							<img src="<?=base_url()?>assets/images/logos/ukm.png" width="100" height="100" alt="">
						</div>
						<h4 class="text-light">BEM</h4>
						<h1 class="text-light"><?= $data['bem']?></h1>
					</div>
					<div class="card text-center bg-primary ">
						<div class="d-flex justify-content-center">
							<img src="<?=base_url()?>assets/images/logos/ukm.png" width="100" height="100" alt="">
						</div>
						<h4 class="text-light">Jurusan</h4>
						<h1 class="text-light"><?= $data['jurusan']?></h1>
					</div>
					<div class="card text-center bg-primary ">
						<div class="d-flex justify-content-center">
							<img src="<?=base_url()?>assets/images/logos/ukm.png" width="100" height="100" alt="">
						</div>
						<h4 class="text-light">Prodi</h4>
						<h1 class="text-light"><?= $data['prodi']?></h1>
					</div>
					<div class="card text-center bg-primary ">
						<div class="d-flex justify-content-center">
							<img src="<?=base_url()?>assets/images/logos/ukm.png" width="100" height="100" alt="">
						</div>
						<h4 class="text-light">anggota</h4>
						<h1 class="text-light"><?= $data['anggota']?></h1>
					</div>
					<div class="card text-center bg-primary ">
						<div class="d-flex justify-content-center">
							<img src="<?=base_url()?>assets/images/logos/ukm.png" width="100" height="100" alt="">
						</div>
						<h4 class="text-light">fungsionaris</h4>
						<h1 class="text-light"><?= $data['fungsionaris']?></h1>
					</div>
					<div class="card text-center bg-primary ">
						<div class="d-flex justify-content-center">
							<img src="<?=base_url()?>assets/images/logos/ukm.png" width="100" height="100" alt="">
						</div>
						<h4 class="text-light">proker</h4>
						<h1 class="text-light"><?= $data['proker']?></h1>
					</div>
					<div class="card text-center bg-primary ">
						<div class="d-flex justify-content-center">
							<img src="<?=base_url()?>assets/images/logos/ukm.png" width="100" height="100" alt="">
						</div>
						<h4 class="text-light">jabatan</h4>
						<h1 class="text-light"><?= $data['jabatan']?></h1>
					</div>
					<div class="card text-center bg-primary ">
						<div class="d-flex justify-content-center">
							<img src="<?=base_url()?>assets/images/logos/ukm.png" width="100" height="100" alt="">
						</div>
						<h4 class="text-light">devisi</h4>
						<h1 class="text-light"><?= $data['devisi']?></h1>
					</div>
				</div>
			</main>

			<?php
	}
	?>
		</div>
	</div>
	<!-- main -->
</div>

<?=$footer?>
