<style>
	.imgs {
		width: 150px;
		height: 150px;
	}

</style>
<div class=" bg-primary text-light rounded-4 p-3 mb-3">
	<div class="row">
        <div class="col-11 ">
            <div class="row">
                <img src="<?=base_url('assets/uploads/ukm/').$data_ukm->img_ukm?>" class="imgs mx-3 col-4" alt="">
                <h1 class="col-9 mt-5 text-light"><?=$data_ukm->nama_ukm?></h1>
            </div>
        </div>
        <div class=" text-end col-1">
            <button type="button" class="btn btn-light" onclick="edit1(<?=$id_ukm?>)">Edit</button>
	    </div>
	</div>
	<div class="deskripsi">
        <h1 class=" text-light">Deskripsi</h1>
		<p><?=$data_ukm->deskripsi?></p>
	</div>
</div>
<div class=" bg-primary text-light rounded-4 p-3 mb-3">
    <div class="row">
        <div class="col-11">
            <h1 class=" text-light">peraturan</h1>
        </div>
        <div class=" text-end col-1">
        <button type="button" class="btn btn-light" onclick="edit1(<?=$id_ukm?>)">Edit</button>
	    </div>
    </div>

		<p><?=$data_ukm->peraturan?></p>
</div>

<div class=" bg-primary text-light rounded-4 p-3 mb-3">
    <div class="row">
        <div class="col-11">
            <h1 class=" text-light">Fungsionaris</h1>
        </div>
        <div class=" text-end col-1">
            <button type="button" class="btn btn-light" onclick="edit3(<?=$id_ukm?>)">Edit</button>
	    </div>
        <div class="rounded-3">
            <div class="cards">
                <div class="card">
                    <img src="<?=base_url('')?>" alt="" width="200" height="300">
                    <div class="card-body"> 
                    <h4 class="card-title">jabatan</h4>
                    <p class="card-text">nama mahasiswa</p>
                  </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script>
    function edit1(id_ukm){
        window.open('<?=base_url('cfungsionaris/ukm_edit/')?>'+id_ukm,'_self')
    }

</script>