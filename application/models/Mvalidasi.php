<?php
	class Mvalidasi extends CI_Model
	{
		function validasi()
		{
			if ($this->session->userdata('NamaLengkap')=='')
			{
				echo "<script>alert ('Anda tidak dapat mengakses halaman ini..!');</script>";
				redirect('clogin/login','refresh');
			}
		}
		
	}
?>
