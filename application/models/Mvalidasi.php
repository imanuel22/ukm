<?php
	class Mvalidasi extends CI_Model
	{
		function validasi()
		{
			if ($this->session->userdata('id_mahasiswa')=='')
			{
				echo "<script>alert ('Anda tidak dapat mengakses halaman ini..!');</script>";
				redirect('cauth/login','refresh');
			}
		}
		public function cek_level_user($id_ukm) {
            $id_mahasiswa = $this->session->userdata('id_mahasiswa');
            $query = $this->db->get_where('cekfungsionaris',['id_mahasiswa'=>$id_mahasiswa,'id_ukm'=>$id_ukm]);
            if($query->num_rows()>0){
				$data=$query->row();
				$array=array(
					'level'=>'fungsionaris',
					'id_fungsionaris'=>$data->id_fungsionaris,
				);	
				$this->session->set_userdata($array);
            }else{
				$query1 = $this->db->get_where('cekkoordinator',['id_mahasiswa'=>$id_mahasiswa,'id_ukm'=>$id_ukm]);
                if($query1->num_rows()>0){
					$data1=$query1->row();
					$array1=array(
						'level'=>'koordinator',
						'id_koordinator '=>$data1->id_koordinator,
					);	
					$this->session->set_userdata($array1);
				}else{
					$query2 = $this->db->get_where('cekanggota',['id_mahasiswa'=>$id_mahasiswa,'id_ukm'=>$id_ukm]);
					if($query2->num_rows()>0){
						$data2=$query2->row();
						$array2=array(
							'level'=>'anggota_ukm',
							'id_anggota_ukm'=>$data2->id_anggota_ukm,
						);
						$this->session->set_userdata($array2);
					}else{
						$array4=array(
							'level'=>'mahasiswa',
						);	
						$this->session->set_userdata($array4);
            		};
        		}
		
		
			}
		}
	}
?>
