<style>
    .imgs{
        width: 150px;
        height: 150px;
    }
</style>

<div class="bg-info rounded-4 p-3 mb-3">
    <div class="row">
        <img src="<?=base_url('assets/uploads/ukm/').$data_ukm->img_ukm?>"class="imgs col-4" alt="" srcset="">
        <h1 class="col-8 mt-5"><?=$data_ukm->nama_ukm?></h1>
    </div>
    <div class="deskripsi">
        <h1>Deskripsi</h1>
		<p><?=$data_ukm->deskripsi?></p>
        
    </div>
    <h2>Devisi</h2>
    <ul>
        <?php foreach($data_devisi as $row): ?>
            <li><?=$row->nama_devisi?></li>
        <?php endforeach;?>
    </ul>
    <div class="peraturan">
        <h1>peraturan</h1>
		<p><?=$data_ukm->peraturan?></p>
    </div>
</div>

<div class="bg-info rounded-4 p-3 mb-3">
<h1>proker</h1>

</div>
<div class="bg-info rounded-4 p-3 mb-3">
<h1>Fungsionaris</h1>

</div>
