<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> <?=$title?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?=base_url();?>assets/bootstrap-5.3.2/dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/icon/bootstrap-icons-1.11.1/bootstrap-icons.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/icon/boxicons-2.1.4/css/boxicons.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/icon/fontawesome/css/fontawesome.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/icon/fontawesome/css/brands.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/icon/fontawesome/css/solid.css">
	<link href="<?=base_url();?>assets/Toast/toast.style.min.css" rel="stylesheet">
</head>

<body className='snippet-body'>

	<body id="body-pd">
		<header class="header" id="header">
			<div class="header_toggle"> <a href="#"><i class='bx bx-menu' id="header-toggle"></i></a> </div>
			<div class="p-3">
			<li><a href="<?php echo base_url('cauth/logout'); ?>"><span class="bi bi-box-arrow-right"></span> Logout</a></li>
			</div>
		</header>
		<div class="l-navbar" id="nav-bar">
			<nav class="nav">
				<div>
					<a href="<?= base_url('cmahasiswa/dashboard'); ?>" class="nav_logo">
						<i class="fa-solid fa-image"></i>
						<span class="nav_logo-name">UKM</span>
					</a>
					<div class="nav_list">
						<a href="<?= base_url('cmahasiswa/dashboard'); ?>" class="nav_link ">
							<i class="fa-solid fa-house"></i>
							<span class="nav_name">Home</span>
						</a>
						<a href="<?= base_url('cmahasiswa/ukm'); ?>" class="nav_link ">
							<i class="fa-solid fa-database"></i>
							<span class="nav_name">UKM</span>
						</a>
						<a href="<?= base_url('cmahasiswa/card'); ?>" class="nav_link">
							<i class="fa-solid fa-database"></i>
							<span class="nav_name">CARD ANGGOTA</span>
						</a>
						<a href="<?= base_url('cfungsionaris/verif_fungsionaris'); ?>" class="nav_link">
							<i class="fa-solid fa-database"></i>
							<span class="nav_name">Verifikasi Fungsionaris</span>
						</a>
						<a href="<?= base_url('cfungsionaris/verif_anggota'); ?>" class="nav_link">
							<i class="fa-solid fa-database"></i>
							<span class="nav_name">Verifikasi Anggota ukm</span>
						</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="container mt-5">
			<br>
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
			<div class="card_bg1 p-2 rounded-4">
				<h1>selamat datang di sistem informasi Unit Kegiatan Mahasiswa Politeknik Negeri Bali</h1>
			</div>
			<?php
	}
	?>
		</div>
		<script type='text/javascript' src='#'>
		</script>
		<script type='text/javascript'>
			document.addEventListener("DOMContentLoaded", function (event) {

				const showNavbar = (toggleId, navId, bodyId, headerId) => {
					const toggle = document.getElementById(toggleId),
						nav = document.getElementById(navId),
						bodypd = document.getElementById(bodyId),
						headerpd = document.getElementById(headerId)

					// Validate that all variables exist
					if (toggle && nav && bodypd && headerpd) {
						toggle.addEventListener('click', () => {
							// show navbar
							nav.classList.toggle('show')
							// change icon
							toggle.classList.toggle('bx-x')
							// add padding to body
							bodypd.classList.toggle('body-pd')
							// add padding to header
							headerpd.classList.toggle('body-pd')
						})
					}
				}

				showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

				/*===== LINK ACTIVE =====*/
				const linkColor = document.querySelectorAll('.nav_link')

				function colorLink() {
					if (linkColor) {
						linkColor.forEach(l => l.classList.remove('active'))
						this.classList.add('active')
					}
				}
				linkColor.forEach(l => l.addEventListener('click', colorLink))

			});

		</script>
		<script type='text/javascript'>
			var myLink = document.querySelector('a[href="#"]');
			myLink.addEventListener('click', function (e) {
				e.preventDefault();
			});

		</script>


	</body>
</body>
<script src="<?=base_url();?>assets/Toast/jquery.min.js"></script>
<script src="<?=base_url();?>assets/Toast/toast.script.js"></script>
<script defer src="<?=base_url();?>assets/icon/fontawesome/js/brands.js"></script>
<script defer src="<?=base_url();?>assets/icon/fontawesome/js/solid.js"></script>
<script defer src="<?=base_url();?>assets/icon/fontawesome/js/fontawesome.js"></script>
<script src="<?=base_url();?>assets/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="<?=base_url();?>assets/bootstrap-5.3.2/dist/js/bootstrap.min.js"></script>

</html>
