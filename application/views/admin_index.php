
<nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('')?>">NAME WEB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">   
				<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?= base_url('')?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Master Data
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('')?>">Data Jurusan</a></li>
            <li><a class="dropdown-item" href="<?= base_url('')?>">Data Prodi</a></li>	
          </ul>
        </li><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Data Pendaftaran
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('')?>">Jadwal Pendaftaran</a></li>
            <li><a class="dropdown-item" href="<?= base_url('')?>">Data Calon Mahasiswa</a></li>	
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('')?>">Laporan Data</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-danger" onclick="logout()" type="button">logout</button>
      </form>
    </div>
  </div>
</nav>
<div class="container mt-3">
  <h3>Halo <?php echo $this->session->userdata('NamaLengkap'); ?></h3>
  <p>Selamat Datang di Sistem Pendaftaran Mahasiswa Baru</p>
</div>
