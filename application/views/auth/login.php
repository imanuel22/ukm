<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LOGIN PAGE</title>
  <link rel="shortcut icon" type="image/png" href="logo.png" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-qieyhf5jcqt6S8z0p6fOPcufGPFnZlM5aV5r8H8i53Mh5KXtgr4Og0BzgUpnMYY" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/solid.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/thinline.css">
</head>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?=base_url()?>assets/images/logos/ukm.png" alt="" width="60" height="50" class="rounded-circle">
                </a>
                <p class="text-center">UNIT KEGIATAN MAHASISWA</p>
                <p class="text-center">Politeknik Negeri Bali</p>
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
                    <br>              
                <button class="btn btn-primary col-12 btn-login" type="submit">Sign In</button>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <p class="fs-3 mb-1 fw-bold" style="margin-top: 1rem;">New to Member?</p> 
                    <a class="fw-bold fs-3 mb-2" style="cursor: pointer; margin-top: 1rem;" onclick="daftar()">Create Account</a>
                </div>  
                </form>
              </div>
            </div>
          </div>
        </div>
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
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>