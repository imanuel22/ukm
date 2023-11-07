<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title> <?=$title?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<link rel="stylesheet" href="<?=base_url('assets/css/')?>style.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

</head>

<body className='snippet-body'>

	<body id="body-pd">
		<header class="header" id="header">
			<div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
			<div class="p-3">
				<a href="">
					<h3 class="">LOGIN</h3>
				</a>
			</div>
		</header>
		<div class="l-navbar" id="nav-bar">
			<nav class="nav">
				<div>
					<a href="<?= base_url('cbem/dashboard'); ?>" class="nav_logo">
						<i class='bx bx-layer nav_logo-icon'></i>
						<span class="nav_logo-name">NAME WEB</span>
					</a>
					<div class="nav_list">
						<a href="<?= base_url('cbem/dashboard'); ?>" class="nav_link ">
							<i class='bx bxs-home' ></i>
							<span class="nav_name">Home</span>
						</a>
						<a href="<?= base_url('cbem/mahasiswa'); ?>" class="nav_link ">
							<i class='bx bxs-data'></i>
							<span class="nav_name">CRUD MAHASISWA</span>
						</a>
						<a href="<?= base_url('cbem/ukm'); ?>" class="nav_link ">
							<i class='bx bxs-data'></i>
							<span class="nav_name">CRUD UKM</span>
						</a>
						<a href="<?= base_url('cbem/jurusan'); ?>" class="nav_link">
						<i class='bx bxs-data'></i>
							<span class="nav_name">CRUD Jurusan</span>
						</a>
						<a href="<?= base_url('cbem/prodi'); ?>" class="nav_link">
						<i class='bx bxs-data'></i>
							<span class="nav_name">CRUD Prodi</span>
						</a>
						<a href="<?= base_url('cbem/verifmhs'); ?>" class="nav_link">
						<i class='bx bx-user'></i>
							<span class="nav_name">Verifikasi Mahasiswa</span>
						</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="container">
		<br>
		<?php
		if (empty($konten) && empty($table)) {
		?>
		<h2>Selamat datang</h2>
		<?php
		}
		else{
			if(empty($konten)){
				echo'';
			}
			else{
				echo $konten;
			}
			if(empty($table)) {
				echo '';
			} else {
				echo $table;
			}
		}
		?>
		</div>


		<script type='text/javascript'src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
		<script type='text/javascript' src='#'></script>
		<script type='text/javascript' src='#'></script>
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

				// Your code to run since DOM is loaded and ready
			});

		</script>
		<script type='text/javascript'>
			var myLink = document.querySelector('a[href="#"]');
			myLink.addEventListener('click', function (e){	e.preventDefault();});

		</script>

	</body>
</body>

</html>
