<?php
	class Mvalidasi extends CI_Model
	{
		function validasi()
		{
			if ($this->session->userdata('id_mahasiswa')=='')
			{
				echo "<script>alert ('Anda tidak dapat mengakses halaman ini..!');</script>";
				redirect('clogin/login','refresh');
			}
		}
		public function cekanggota($id_ukm) {
            $id_mahasiswa = $this->session->userdata('id_mahasiswa');
            $query = $this->db->get_where('cekanggotaukm',['id_mahasiswa'=>$id_mahasiswa,'id_ukm'=>$id_ukm]);
            if($query->num_rows()>0){
				$data=$query->row;
				$array=array(
					'level'=>'anggota',
					'id_anggota_ukm'=>$data->id_anggota_ukm,
				);	
				$this->session->set_userdata($array);
            }else{
                $data=$query->row;
				$array=array(
					'level'=>'mahasiswa',
					'id_anggota_ukm'=>$data->id_anggota_ukm,
				);	
				$this->session->set_userdata($array);
            };
        }
		
	}
?>
