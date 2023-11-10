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
		</header>
	<div class="container">
		<div class="d-flex justify-content-center">
			<div class="bg-info rounded-4 mt-5 p-4 col-8">
			<h1 class="text-center p-3">LOGIN</h1>
			<?php
				$pesan=$this->session->flashdata('pesan');
				$color=$this->session->flashdata('color');
				if(!empty($pesan)):
				?>
				<div class="alert alert-<?=$color?> alert-dismissible fade show "role="alert">
					<?php echo $pesan; ?>                        
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<?php
					endif;
				?>
			<form action="<?= base_url('cadmin/login_proses') ?>" method="post">
				<div class="form-group mt-3">
					<label for="username">username</label>
					<input type="text" class="form-control" id="username" name="username">
				</div>
				<div class="form-group mt-3">
					<label for="password">password</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<div class="form-group mt-3">
					<button class="btn btn-primary col-12" type="submit">LOGIN</button>
				</div>
				<hr>
				<div class="col-12 text-center p-2">
					<button type="button" class="btn col-12" onclick="daftar()">Belum punya akun</button>
				</div>
			</form>
		</div>
		</div>
	</div>

	<script language='javascript'>
		function daftar(){
			window.open("<?= base_url('chome/register')?>","_self");
		}
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
