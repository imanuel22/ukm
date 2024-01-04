<?=$header?>
<!--  Body Wrapper -->
<div class="page-wrapper bg-custom" style="background-image: url(<?=base_url('')?>assets/images/logos/ukm.png);"  id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
	data-sidebar-position="fixed" data-header-position="fixed">
	<?=$sitebar;?>
	<!--  Main wrapper -->
	<div class="body-wrapper ">
    <?=$navbar?>
		<!-- main -->
		<div class="container-fluid">
    <?php
			$pesan = $this->session->flashdata('pesan');
			$color = $this->session->flashdata('color');
			if(!empty($pesan)):
			?>
			<div class="alert alert-<?=$color?> alert-dismissible fade show" role="alert">
				<?=$pesan?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php
			endif;
			?>
			<?php
		if(!empty($konten)||!empty($table)){
			if(!empty($konten)){
				echo $konten;
			}
			if(!empty($table)){
				echo $table;
			}
		}
		else {
		?>
			<div class="p-2 rounded-4" style="height: 600px;">
				<h1 class="text-capitalize">Selamat Datang <?php
				if(!empty($this->session->userdata('username'))){
					echo $this->session->userdata('username');
				}
				else{
					echo $this->session->userdata('nama_mahasiswa');
				}
				?>.</h1>
        		<h3>Di sistem informasi Unit Kegiatan Mahasiswa Politeknik Negeri Bali</h3>
			</div>
			<?php
	}
	?>
		</div>
	</div>
	<!-- main -->
</div>
<?=$footer?>