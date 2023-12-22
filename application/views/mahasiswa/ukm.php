<!-- 
<div class="card">

</div>
 -->

<!-- <style>
	.card{
		background-color: dodgerblue;
		color: white;
		padding: 1rem;
  		height: 4rem;

	}
	.cards {
	max-width: 1200px;
	margin: 0 auto;
	display: grid;
	gap: 1rem;
	}
	@media (min-width: 900px) {
  .cards { grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
 }
}

</style> -->
<style>
main {
  display: grid;
  grid-template-columns: 1fr repeat(12, minmax(auto, 60px)) 1fr;
  grid-gap: 40px;
  padding: 60px 0;
}

.cards {
  grid-column: 2 / span 12;
  display: grid;
  grid-template-columns: repeat(12, minmax(auto, 60px));
  grid-gap: 40px;
}

.card {
  grid-column-end: span 4;
  display: flex;
  flex-direction: column;
  cursor: pointer;
  transition: all 0.3s ease 0s;
}

.card:hover {
  transform: translateY(-7px);
}

.card__image-container {
  width: 100%;
  padding-top: 100%;
  overflow: hidden;
  position: relative;
}

.card__image-container img {
  width: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.card__content {
  padding: 20px;
}

.card__title {
  margin-bottom: 20px;
}

.card__info {
  display: flex;
  align-self: end;
  align-items: center;
}

@media only screen and (max-width: 1000px) {
  .card {
    grid-column-end: span 6;
  }
}

@media only screen and (max-width: 700px) {
  main {
    grid-gap: 20px;
  }
  .card {
    grid-column-end: span 12;
  }
}

@media only screen and (max-width: 500px) {
  main {
    grid-template-columns: 10px repeat(6, 1fr) 10px;
    grid-gap: 10px;
  }
  .cards {
    grid-column: 2 / span 6;
    grid-template-columns: repeat(6, 1fr);
    grid-gap: 20px;
  }
  .card {
    grid-column-end: span 6;
  }
}

</style>
<main>
    <section class="cards">  
		<?php foreach($data_ukm as $row): ?>
        <a href="<?=base_url('cmahasiswa/cek_level_user/').$row->id_ukm?>" class="card rounded-3 bg-primary">
          <div class="card__image-container bg-light">
            <img src="<?=base_url('assets/uploads/ukm/').$row->img_ukm?>"/>
          </div>
          <div class="card__content">
            <h3 class="card__title text-light  text-center">
              <?=$row->nama_ukm?>
            </h3>
            <p class="d-flex text-light">
              <?php 
              if(!empty($row->deskripsi)){
                echo substr($row->deskripsi,0,200);
              }
              ?>
            </p>
            <div class="d-flex justify-content-end">
              <button type="button" onclick="opens(<?=$row->id_ukm?>)" class="btn btn-light">View</button>
            </div>
          </div>
        </a>
		<?php endforeach; ?>
      </section>
</main>
<script>
  function opens(id_ukm){
		window.open("<?=base_url('cmahasiswa/cek_level_user/')?>"+id_ukm,'_self');
	}
</script>
