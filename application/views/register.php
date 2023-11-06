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

			<h1 class="text-center p-3">Register</h1>
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
			<form action="<?= base_url('chome/proses_login') ?>" method="post">
				<div class="form-group mt-3">
					<label for="nim">nim</label>
					<input type="text" class="form-control" id="nim" name="nim">
				</div>
				<div class="form-group mt-3">
					<label for="nama_mhs">nama_mhs</label>
					<input type="text" class="form-control" id="nama_mhs" name="nama_mhs">
				</div>
				<div class="form-group mt-3">
					<label for="img_ktm">img_ktm</label>
					<input type="file" class="form-control" id="img_ktm" name="img_ktm">
				</div>
				<div class="form-group mt-3">
					<label for="img_mahasiswa">img_mahasiswa</label>
					<input type="file" class="form-control" id="img_mahasiswa" name="img_mahasiswa">
				</div>
				<div class="form-group mt-3">
					<label for="password">password</label>
					<input type="text" class="form-control" id="password" name="password">
				</div>
				<div class="form-group mt-3">
					<label for="no_telp">no_telp</label>
					<input type="text" class="form-control" id="no_telp" name="no_telp">
				</div>
				<div class="form-group mt-3">
					<label for="id_prodi">id_prodi</label>
					<input type="id_prodi" class="form-control" id="id_prodi" name="id_prodi">
				</div>
				<div class="form-group mt-3">
					<button class="btn btn-primary col-12" type="submit">REGISTER</button>
				</div>
				<hr>
				<div class="col-12 text-center p-2">
					<button type="button" class="btn col-12" onclick="login()">Sudah punya Akun</button>
				</div>
			</form>
		</div>
		</div>
	</div>

	<script language='javascript'>
		function login(){
			window.open("<?= base_url('chome/login')?>","_self");
		}
	</script>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
