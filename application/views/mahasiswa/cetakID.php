<html>
<head>
	<title>Cetak PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
        .member-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .member-id {
            font-size: 14px;
            margin-bottom: 10px;
        }
        .expiration-date {
            font-size: 12px;
            color: #888;
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
                        <img src="<?php echo base_url()?>gambar/pasfoto.jpeg" alt="Member Photo" class="member-photo" width="75">
                    </td>
                
                    <td>
                    <div class="member-name">Nama</div>
                    <div class="member-id">NIM</div>
                    <div class="expiration-date">Jabatan/Divisi</div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>
