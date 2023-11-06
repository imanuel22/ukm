<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="d-flex justify-content-center">
			<div class="card mt-5 p-4 col-8">

			<h1 class="text-center p-3">LOGIN</h1>
			<?php
				$pesan=$this->session->flashdata('pesan');
				if ($pesan=="")
				{
					echo "";	
				}
				else
				{
			?>
				<div class="alert alert-danger alert-dismissible fade show "role="alert">
					<?php echo $pesan; ?>                        
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php
				}
			?>
			<form action="<?= base_url('cdaftar/prosseslogin') ?>" method="post">
				<div class="form-group mt-3">
					<label for="username">username</label>
					<input type="text" class="form-control" id="username" name="Username">
				</div>
				<div class="form-group mt-3">
					<label for="password">password</label>
					<input type="password" class="form-control" id="password" name="Password">
				</div>
				<div class="form-group mt-3">
					<button class="btn btn-primary col-12" type="submit">LOGIN</button>
				</div>
				<hr>
				<div class="col-12 text-center p-2">
					<button type="button" class="btn col-12" onclick="daftar()">Sudah punya akun</button>
				</div>
			</form>
		</div>
		</div>
	</div>

	<script language='javascript'>
		function daftar(){
			window.open("<?= base_url('ctampil/daftar')?>","_self");
		}
	</script>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
