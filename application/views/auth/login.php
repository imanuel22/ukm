<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets/images/logos/ukm.png" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.min.css" />
    <style>
        body {
            background-color: #007bff;
            color: #ffffff;
        }

        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-form h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-login {
            background-color: #007bff;
            color: #ffffff;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center login-container">
            <div class="card mt-5 p-4 col-8 login-form">
                <h1 class="text-center p-3">LOGIN</h1>

                <?php
                    $pesan = $this->session->flashdata('pesan');
                    $color = $this->session->flashdata('color');
                    if ($pesan == "") {
                        echo "";
                    } else {
                ?>
                    <div class="alert alert-<?=$color?> alert-dismissible fade show" role="alert">
                        <?php echo $pesan; ?>                        
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    }
                ?>

                <form action="<?= base_url('cauth/proseslogin') ?>" method="post">
                    <div class="form-group mt-3">
                        <label for="nim">NIM</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nim" name="nim">
                            <span class="input-group-text bg-primary text-light"><i class="ti ti-user text-center"></i></span>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password">
                            <button type="button" id="passwords" class="input-group-text btn btn-primary" onclick="showpassword()"><i id="icon" class="ti ti-eye text-center"></i></button>
                        </div>  
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary col-12 btn-login" type="submit">LOGIN</button>
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
        function daftar() {
            window.open("<?= base_url('cauth/register')?>", "_self");
        }
        function showpassword() {
            var password = document.getElementById('password');
            var icon = document.getElementById('icon');
            if (password.type == 'password') {
                password.type = 'text';
                icon.className = 'ti ti-eye-off';
            }else{
                password.type = 'password';
                icon.className = 'ti ti-eye';
                
            }

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
