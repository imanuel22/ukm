<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #3498db;
            color: #fff;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #3498db;
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card mt-5 p-4 col-md-8">
                <h1 class="text-center p-3">Register</h1>
                <?php
                $pesan = $this->session->flashdata('pesan');
                if ($pesan != "") {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $pesan; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                }
                ?>
                <?php echo form_open_multipart('cauth/prosesregister');?>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM:</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa:</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" required>
                    </div>
                    <div class="mb-3">
                        <label for="img_mahasiswa" class="form-label">Upload Foto Mahasiswa:</label>
                        <input type="file" class="form-control" id="img_mahasiswa" name="img_mahasiswa" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. Telepon:</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_jurusan" class="form-label">Jurusan:</label>
                        <select class="form-control" id="id_jurusan" required>
                            <option value="" hidden>Pilih Jurusan</option>
                            <?php 
                            foreach($data_jurusan as $row):
                            ?>
                            <option value="<?=$row->id_jurusan?>"><?=$row->nama_jurusan?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_prodi" class="form-label">Prodi:</label>
                        <select class="form-control" name="id_prodi" id="id_prodi" required>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">angkatan:</label>
                        <input type="number" min="1900" class="form-control" id="angkatan" name="angkatan" required placeholder="YYYY">
                    </div>
                    <div class="mb-3">
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
        function login() {
            window.open("<?= base_url('chome/login')?>", "_self");
        }
        
        $(document).ready(function(){
            $('#id_jurusan').change(function() {
                var getJurusanID = $('#id_jurusan').val();
                
                $.ajax({
                    type: 'POST',
                    dataType: 'JSON',
                    url: '<?=base_url()?>cauth/getprodi',
                    data: {id_jurusan:getJurusanID},
                    success: function(data){
                        console.log(data);
                        var html = "<option hidden value=''>Pilih Prodi</option>";
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html +='<option value="'+data[i].id_prodi+'">'+data[i].nama_prodi+'</option>';                        
                        }
                        $('#id_prodi').html(html);
                    }
                })
            })
        })
    </script>

<script src="<?=base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/js/sidebarmenu.js"></script>
<script src="<?=base_url()?>assets/js/app.min.js"></script>
<script src="<?=base_url()?>assets/libs/simplebar/dist/simplebar.js"></script>

<!-- ini untuk memanggil file yang ada pada folder jquery-->       
<script src="<?php echo base_url(); ?>assets/jquery/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/jquery/app.js"></script>
        <script language="javascript">
			var site = "<?php echo base_url()?>index.php/";
			var loading_image_large = "<?php echo base_url()?>assets/gambar/loading_large.gif";
		</script>
</body>
<div id="script"></div>
</html>
