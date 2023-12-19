<?=$header?>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
	data-sidebar-position="fixed" data-header-position="fixed">
	<?=$sitebar;?>
	<!--  Main wrapper -->
	<div class="body-wrapper">
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
			<div class="card_bg1 p-2 rounded-4">
				<h1 class="text-capitalize">Selamat Datang <?=$this->session->userdata('username')?>.</h1>
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