<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<title>Cetak PDF</title>
    <style>
        .card {
            width:122.2%;
            transform: translate(-10.2%,-16.3%);
            height: 150%;
            border: 1px solid #ccc;
            overflow: hidden;
            position: absolute;
            grid-column-end: span 4;
            display: flex;
            flex-direction: column;
            cursor: pointer;
            transition: all 0.3s ease 0s;
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
        transform: translate(10.2%,16.3%);
		font-size: 18px;
		font-weight: bold;
		margin-bottom: 10px;
		padding-left: 10px;
	}

	.nim {
        transform: translate(10.2%,16.3%);
		font-size: 14px;
		margin-bottom: 10px;
		padding-left: 10px;
	}

	.divataujab {
        
		font-size: 12px;
		padding-left: 10px;
	}

	.photo {
        transform: translate(10.2%,16.3%);
		border-radius: 15%;
		margin-bottom: 10px;
		margin-right: 10px;
	}
    </style>
</head>

<body>

    <div class="card">
			<div class="card-header bg-primary">
				<?=$data_cardA->nama_ukm?>
			</div>
			<div class="card-body">
				<table>
					<tr>
						<td>
							<img src="<?=base_url('assets/uploads/img_mahasiswa/').$data_cardA->img_mahasiswa?>"
								class="photo" alt="Pas Foto" width="100" height="130">
						</td>

						<td>
                        <div class="nama"><?= $data_cardA->nama_mahasiswa?></div>
							<div class="nim"><?= $data_cardA->nim?></div>
                            <table style="transform: translate(20%,16.3%);">
                                <tr>
                                    <td class="divataujab">Role</td>
                                    <td class="divataujab"> : </td>
                                    <td class="divataujab">Anggota UKM</td>
                                </tr>
                                <tr>
                                    <td class="divataujab">Divisi</td>
                                    <td class="divataujab"> : </td>
                                    <td class="divataujab"><?= $data_cardA->nama_devisi?></td>
                                </tr>
                            </table>
							<!-- <div class="divataujab">Role : Fungsionaris</div>
							<div class="divataujab">Jabatan : <?= $data_cardA->nama_jabatan?></div> -->
						</td>
					</tr>
				</table>
			</div>
		</div>

</body>
</html>
