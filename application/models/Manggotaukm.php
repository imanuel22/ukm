<?php
    class Manggotaukm extends CI_Model {
        //mengambila data ke view anggota ukm dari id_ukmnya sama dengan parameter
        public function get_anggota_ukm($id_ukm){
            $query = $this->db->get_where('anggota_ukm',['id_ukm'=>$id_ukm]);
            return $query->result();
        }

        //proses simpan dan edit data anggota ukm
        public function proses_anggotaUKM(){
            //data dari form di tampung di array data
            $data= [
                'id_anggota_ukm'=>$this->input->post('id_anggota_ukm'),
                'id_mahasiswa'=>$this->input->post('id_mahasiswa'),
                'id_devisi'=>$this->input->post('id_devisi'),
                'status'=>$this->input->post('status'),
            ];
            $id_anggota_ukm=$data['id_anggota_ukm'];
            //jika ada id_anggota_ukm kosong lakukan isert kalo ada update
            if(empty($id_anggota_ukm)){
                //menambahkan data ke tb_anggota_ukm
                $this->db->insert('tb_anggota_ukm',$data);
                $pesan='Data sudah disimpan';
                $color='success';
            }else{
                //mengedit data ke tb_anggota_ukm dengan id_anggota_ukm = $id_anggota_ukm
                $this->db->where('id_anggota_ukm',$id_anggota_ukm);
                $this->db->update('tb_anggota_ukm',$data);
                $pesan='Data sudah diedit';
                $color='success';
            }
            //mengirim pesan ke user
            $this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
            redirect(base_url('cfungsionaris/anggota_ukm/').$this->input->post('id_ukm'),'_self');
        }
    
        //mengirim data ke form 
        public function edit_anggotaUKM($id_anggota_ukm){
            //mengambil data ke tb_anggota_ukm dari id_anggota_ukm sama dengan parameter
                $query = $this->db->get_where('tb_anggota_ukm',['id_anggota_ukm'=>$id_anggota_ukm]);
                if($query->num_rows()>0)
                {
                    $data=$query->row();
                    //ajax untuk mengirim data ke form byid
                    echo "<script>$('#id_anggota_ukm').val('".$data->id_anggota_ukm."')</script>";
                    echo "<script>$('#id_mahasiswa').val('".$data->id_mahasiswa."')</script>";
                    echo "<script>$('#id_devisi').val('".$data->id_devisi."')</script>";
                    echo "<script>$('#status').val('".$data->status."')</script>";
                }	
        }

        //menghapus data ke tb_anggota_ukm dari id_anggota_ukm
        public function delete_anggota($id_ukm,$id_anggota_ukm) {
			//delete data dari tb_anggota_ukm dengan id_anggota_ukm = $id_anggota_ukm
            $this->db->where('id_anggota_ukm',$id_anggota_ukm);
            $this->db->delete('tb_anggota_ukm');
            $query = $this->db->affected_rows();
            if($query>0){
                $this->session->set_flashdata('pesan','data berhasil Tersimpan');
                $this->session->set_flashdata('color','success');
            }
            redirect(base_url('cfungsionaris/anggota_ukm/').$id_ukm,'_self');
        }

    }

?>
