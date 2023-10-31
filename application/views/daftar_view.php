<!DOCTYPE html>
<html>

<head>
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-center">
		<div class="card mt-5 col-8">
			<h1 class="text-center p-3">DAFTER</h1>
				<form action="<?= base_url('cdaftar/simpandaftar') ?>" method="post">
					<div class="form-group">
						<label for="nl">nama lengkap</label>
						<input type="text" class="form-control" id="nl" name="NamaLengkap">
					</div>
					<div class="form-group">
						<label for="alamat">alamat</label>
						<textarea name="Alamat" class="form-control" id="alamat" cols="30" rows="2"></textarea>
					</div>
					<div class="form-group">
						<label for="telp">Telephone</label>
						<input type="text" class="form-control" id="telp" name="Telp">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="Email">
					</div>
					<div class="form-group">
						<button class="btn btn-primary col-12" type="submit">DAFTAR</button>
					</div>
					<hr>
					<div class="col-12 text-center p-2">
					<button type="button" class="btn col-12" onclick="login()">login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script language='javascript'>
		function login(){
			window.open("<?= base_url('ctampil/login')?>","_self");
		}
	</script>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>
