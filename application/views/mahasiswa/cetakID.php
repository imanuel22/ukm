<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<title>Cetak PDF</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
        }
        .card {
            width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }
        .card-header {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .card-body {
            padding: 20px;
        }
        .nama {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            padding-left: 10px;
        }
        .nim {
            font-size: 14px;
            margin-bottom: 10px;
            padding-left: 10px;
        }
        .divataujab {
            font-size: 12px;
            padding-left: 10px;
        }

        .photo {
            width: 75px;
            border-radius: 15%;
            margin-bottom: 10px;
            margin-right: 10px;
        }
    </style>
</head>

<body>

  <div class="card">
        <div class="card-header">
            Nama UKM
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <td>
                        <img src="<?php echo base_url()?>gambar/pasfoto.jpeg" class="photo" alt="Pas Foto" width="75">
                    </td>
                
                    <td>
                    <div class="nama">Nama: </div>
                    <div class="nim">NIM: </div>
                    <div class="divataujab">Jabatan/Divisi: </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>
