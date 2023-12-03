<style>
	.imgs {
		width: 150px;
		height: 150px;
	}

</style>
<div class="bg-info rounded-4 p-3 mb-3">
	<div class="row">
        <div class="col-11 ">
            <div class="row">
                <img src="<?=base_url('assets/img/').$data_ukm->img_ukm?>" class="imgs mx-3 col-4" alt="" srcset="">
                <h1 class="col-9 mt-5"><?=$data_ukm->nama_ukm?></h1>
            </div>
        </div>
        <div class=" text-end col-1">
            <button type="button" class="btn btn-primary" onclick="edit1(<?=$id_ukm?>)">Edit</button>
	    </div>
	</div>
	<div class="deskripsi">
        <h1>Deskripsi</h1>
		<p><?=$data_ukm->deskripsi?></p>
	</div>
</div>
<div class="bg-info rounded-4 p-3 mb-3">
    <div class="row">
        <div class="col-11">
            <h1>devisi</h1>
        </div>
        <div class=" text-end col-1">
        <button type="button" class="btn btn-primary" onclick="edit2(<?=$id_ukm?>)">Edit</button>
	    </div>
    </div>

</div>
<div class="bg-info rounded-4 p-3 mb-3">
    <div class="row">
        <div class="col-11">
            <h1>peraturan</h1>
        </div>
        <div class=" text-end col-1">
        <button type="button" class="btn btn-primary" onclick="edit1(<?=$id_ukm?>)">Edit</button>
	    </div>
    </div>

		<p><?=$data_ukm->peraturan?></p>
</div>
<div class="bg-info rounded-4 p-3 mb-3">
<div class="row">
        <div class="col-11">
            <h1>proker</h1>
        </div>
        <div class=" text-end col-1">
            <button type="button" class="btn btn-primary">Edit</button>
	    </div>
    </div>
</div>
<div class="bg-info rounded-4 p-3 mb-3">
    <div class="row">
        <div class="col-11">
            <h1>Fungsionaris</h1>
        </div>
        <div class=" text-end col-1">
        <button type="button" class="btn btn-primary" onclick="edit3(<?=$id_ukm?>)">Edit</button>
	    </div>
    </div>

</div>
<div class="bg-info rounded-4 p-3 mb-3">
    <div class="row">
        <div class="col-11">
            <h1>Koordinator</h1>
        </div>
        <div class=" text-end col-1">
        <button type="button" class="btn btn-primary" onclick="edit4(<?=$id_ukm?>)">Edit</button>
	    </div>
    </div>

</div>
<script>
    function edit1(id_ukm){
        window.open('<?=base_url('cfungsionaris/ukm_edit/')?>'+id_ukm,'_self')
    }
    function edit2(id_ukm){
        window.open('<?=base_url('cfungsionaris/devisi/')?>'+id_ukm,'_self')
    }
    function edit3(id_ukm){
        window.open('<?=base_url('cfungsionaris/fungsionaris/')?>'+id_ukm,'_self')
    }
</script>