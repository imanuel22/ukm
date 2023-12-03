<?php
	class Mvalidasiadmin extends CI_Model
	{
		function validasi()
		{
			if ($this->session->userdata('username')=='' && $this->session->userdata('Password')=='')
			{
				echo "<script>alert ('Anda tidak dapat mengakses halaman ini..! silakan login terlebih dahulu');</script>";
				redirect('cadmin/login','refresh');
			}
		}
	}
?>
