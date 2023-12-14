<div class="bg-info rounded-4 p-3">
    <form method="post" action="<?=base_url('cmahasiswa/proses_edit_profile')?>" enctype="multipart/form-data" >
    <input type="hidden" name="id_mahasiswa" value="<?=$data_mahasiswa->id_mahasiswa?>">
        <div class="mb-3">
            <img src="<?=base_url('assets/uploads/img_mahasiswa/').$data_mahasiswa->img_mahasiswa?>" alt="<?=$data_mahasiswa->img_mahasiswa?>" width="200px">
            <input type="hidden" name="img_mahasiswa_old" value="<?=$data_mahasiswa->img_mahasiswa?>">
        </div>
        <div class="mb-3">
            <label for="nim" class=" form-label">nim</label>
            <input type="text" class=" form-control" name="nim" id="nim" value="<?=$data_mahasiswa->nim?>">
        </div>
        <div class="mb-3">
            <label for="nama_mahasiswa" class=" form-label">nama_mahasiswa</label>
            <input type="text" class=" form-control" name="nama_mahasiswa" id="nama_mahasiswa" value="<?=$data_mahasiswa->nama_mahasiswa?>">
        </div>
        <div class="mb-3">
            <label for="angkatan" class=" form-label">angkatan</label>
            <input type="text" class=" form-control" name="angkatan" id="angkatan" value="<?=$data_mahasiswa->angkatan?>">
        </div>
        <div class="mb-3">
            <label for="no_telp" class=" form-label">no_telp</label>
            <input type="text" class=" form-control" name="no_telp" id="no_telp" value="<?=$data_mahasiswa->no_telp?>">
        </div>
        <div class="mb-3">
            <label for="img_mahasiswa" class=" form-label">img_mahasiswa</label>
            <input type="file" class=" form-control" name="img_mahasiswa" id="img_mahasiswa">
        </div>
        <div class="mb-3">
            <label for="id_prodi" class=" form-label">id_prodi</label>
            <select class="form-control" name="id_prodi" id="id_prodi" required>
                            <option value="<?=$data_mahasiswa->id_prodi?>" hidden><?=$data_mahasiswa->id_prodi?></option>
                            <?php 
                            foreach($data_prodi as $row):
                            ?>
                            <option value="<?=$row->id_prodi?>"><?=$row->nama_prodi?></option>
                            <?php endforeach;?>
                        </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">EDIT</button>
        </div>
    </form>
</div>