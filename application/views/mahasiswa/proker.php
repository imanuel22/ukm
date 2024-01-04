<div class=" bg-primary bg-opacity-75 text-light rounded-4 p-3 mb-3 text-center">
    <div class="row">
        <div class="col-md-6 bg-light rounded-3 mx-3">
            <div class="nama-ukm">
                <h1 class="text-dark "><?=$data_proker->nama_proker?></h1>
			</div>
			<div class="d-flex justify-content-center">
				<div class=" bg-light rounded-3 mb-5 p-3">
					<img class="img-ukm" src="<?=base_url('assets/uploads/img_proker/').$data_proker->img_proker?>"
						class="rounded-circle bg-light" alt="">
				</div>
			</div>
			<div class="deskripsi mb-5 ">
				<p class="text-dark p-3"><?=$data_proker->deskripsi?></p>
			</div>
		</div>
		<div class="col-md-5 bg-light rounded-3 mx-3">
			<h3 class=" mt-5">Peraturan</h3>
			<p class="text-start text-dark p-3"><?=$data_proker->peraturan?></p>
		</div>
	</div>

</div>
