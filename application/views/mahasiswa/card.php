<?php 
foreach($data_card as $row):
?>
<div class="bg-primary rounded-3 p-3 mb-3 text-light">
    <p><?=$row->nama_ukm?></p>
    <p><?=$this->session->userdata('nama_mahasiswa')?></p>
    <p><?=$this->session->userdata('nim')?></p>
    <div class="d-flex justify-content-end">
        <a href="<?=base_url('Pdfview')?>" class="col-2 btn btn-light">Print</a>
    </div>
</div>
<?php endforeach;?>