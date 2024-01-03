<div class="d-flex justify-content-center ">

    <div class="bg-primary rounded-4  p-3 text-center" style="width: 50%;">
        <div class="mb-3" >
            <img class=" rounded-circle" src="<?=base_url('assets/uploads/img_mahasiswa/').$data_mahasiswa->img_mahasiswa?>" alt="<?=$data_mahasiswa->img_mahasiswa?>" width="200px">
        </div>
        <h3 class="mb-3 text-light"><?=$data_mahasiswa->nama_mahasiswa?></h3>
        <h4 class="mb-3 text-light"><?=$data_mahasiswa->nim?></h4>
        <h4 class="mb-3 text-light"><?=$data_mahasiswa->nama_jurusan?></h4>
        <h4 class="mb-3 text-light"><?=$data_mahasiswa->nama_prodi?></h4>
        <h4 class="mb-3 text-light"><?=$data_mahasiswa->angkatan?></h4>
        <h4 class="mb-3 text-light"><?=$data_mahasiswa->no_telp?></h4>
        <button type="button" class="btn btn-light col-12" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="editdata(<?=$data_mahasiswa->id_mahasiswa?>)">
            Edit Profile
        </button>
    </div>
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('cbem/proses_mahasiswa')?>" method="post" enctype="multipart/form-data"> 
        <input type="hidden" name="id_mahasiswa" id="id_mahasiswa">
        <input type="hidden" name="img_mahasiswa_old" id="img_mahasiswa_old">
		<div class="mb-3">
			<label for="nim" class="form-label">NIM</label>
			<input type="text" name="nim" class="form-control bg-light" id="nim">
		</div>
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
			<input type="text" name="nama_mahasiswa" class="form-control bg-light" id="nama_mahasiswa">
		</div>
		<div class="mb-3">
			<label for="angkatan" class="form-label">Angkatan</label>
			<input type="text" name="angkatan" class="form-control bg-light" id="angkatan">
		</div>
			<input type="hidden" name="password" class="form-control bg-light" id="password">
		<div class="mb-3">
			<label for="no_telp" class="form-label">Nomor Telepon</label>
			<input type="text" name="no_telp" class="form-control bg-light" id="no_telp">
		</div>
		<div class="mb-3">
				<img src="" class="ju" alt="" id="img_mahasiswas" width="150" height="225">
				<label for="img_mahasiswa" class="form-label">IMG</label>
				<input type="file" name="img_mahasiswa" class="form-control bg-light" >
		</div>
			<select name="status" hidden id="status" class="form-control bg-light">
				<option value="aktif">Aktif</option>
				<option value="tidakaktif">Tidak Aktif</option>
			</select>
        <div class="mb-3">
			<label for="id_jurusan" class="form-label">jurusan</label>
			<select name="id_jurusan" id="id_jurusan" class="form-control bg-light">
				<option value="" hidden>pilih</option>
				<?php foreach($data_jurusan as $row):?>
				<option value="<?=$row->id_jurusan?>"><?=$row->nama_jurusan?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="mb-3">
			<label for="id_prodi" class="form-label">Prodi</label>
			<select name="id_prodi" id="id_prodi" class="form-control bg-light">
				<option value="" hidden>pilih</option>
				<?php foreach($data_prodi as $row):?>
				<option value="<?=$row->id_prodi?>"><?=$row->nama_prodi?></option>
				<?php endforeach;?>
			</select>
		</div>		
		<div class="mb-3 row">
			<div class="col-6">
				<button type="submit" class="btn btn-success col-12">Submit</button>
			</div>
			<div class="col-6">
				<button type="reset" onclick="reset_img()" class="btn btn-danger col-12">Reset</button>
			</div>
		</div>
	</form>
    </div>
  </div>
</div>
<script>
    function editdata(id_mahasiswa){
		load("cbem/edit_mahasiswa/" + id_mahasiswa, "#script");
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