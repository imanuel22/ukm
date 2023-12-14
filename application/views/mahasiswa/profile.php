<div class="bg-info rounded-4 p-3">
    <img src="<?=base_url('assets/uploads/img_mahasiswa/').$data_mahasiswa->img_mahasiswa?>" alt="<?=$data_mahasiswa->img_mahasiswa?>" width="200px">
    <p>nim:<?=$data_mahasiswa->nim?></p>
    <p>nama_mahasiswa:<?=$data_mahasiswa->nama_mahasiswa?></p>
    <p>angkatan:<?=$data_mahasiswa->angkatan?></p>
    <p>no_telp:<?=$data_mahasiswa->no_telp?></p>
    <p>id_prodi:<?=$data_mahasiswa->id_prodi?></p>
    <button type="button" class="btn btn-primary" onclick="edit(<?=$data_mahasiswa->id_mahasiswa?>)">Edit</button>
</div>
<script>
    function edit(id_mahasiswa){
        window.open('<?=base_url('cmahasiswa/profile_edit/')?>'+id_mahasiswa,'_self')
    }
</script>