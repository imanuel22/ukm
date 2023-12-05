
  <?php 
  echo $title_pdf;
$no=1;
$data_card = [['nama_ukm'=>'ukm 1','nama_mahasiswa'=>'mahasiswa 1']];
foreach($data_card as $row):
?>
<div class="bg-info rounded-4 p-3 mb-3">
    <p><?=$row['nama_ukm']?></p>
    <p><?=$row['nama_mahasiswa']?></p>
    <div class="text-end">
        <button type="button" class="col-2 btn btn-primary">Print</button>
    </div>
</div>
<?php endforeach;?>