<?php
    class Mfungsionaris extends CI_Model {
	//mengambila data ke view fungsionaris dari id_ukm = parameter
    public function get_fungsionaris($id_ukm){
            $query = $this->db->get_where('fungsionaris',['id_ukm'=>$id_ukm]);
            return $query->result();
        }	
        //mengambila data ke tb_fungsionaris dari id_fungsionaris = parameter 
        public function get_fungsionaris_id($id_fungsionaris){
            $query = $this->db->get_where('tb_fungsionaris',['id_fungsionaris'=>$id_fungsionaris]);
            return $query->row();
        }
        
	//function buat insert + update data 
    public function proses_fungsionaris(){
            
            $data= [
                'id_fungsionaris'=>$this->input->post('id_fungsionaris'),
                'id_mahasiswa'=>$this->input->post('id_mahasiswa'),
                'id_jabatan'=>$this->input->post('id_jabatan'),
                'status'=>$this->input->post('status'),
            ];
            $id_fungsionaris=$data['id_fungsionaris'];
		//cek jika tidak ada id_fungsionaris lakukan insert
        if(empty($id_fungsionaris)){
			//menambahkan data ke tb_fungsionaris
            $this->db->insert('tb_fungsionaris',$data);
                $pesan='Data sudah disimpan';
                $color='success';
            }
 		//jika ada id_fungsionaris lakukan update
        else{
			//update tb_fungsionaris dengan id_fungsionaris = $id_fungsionaris
            $this->db->where('id_fungsionaris',$id_fungsionaris);
                $this->db->update('tb_fungsionaris',$data);
                $pesan='Data sudah diedit';
                $color='success';
            }
            $this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
            redirect(base_url('cfungsionaris/fungsionaris/').$this->input->post('id_ukm'),'_self');
        }
    
	//function buat mengisi data ke halaman form
    public function edit_fungsionaris($id_fungsionaris){
		//mengambil data ke tb_fungsionaris dari id_fungsionaris sama dengan parameter
        $query = $this->db->get_where('tb_fungsionaris',['id_fungsionaris'=>$id_fungsionaris]);
                if($query->num_rows()>0)
                {
                    $data=$query->row();
			//ajax untuk mengirim data ke form byid
            echo "<script>$('#id_fungsionaris').val('".$data->id_fungsionaris."')</script>";
                    echo "<script>$('#id_mahasiswa').val('".$data->id_mahasiswa."')</script>";
                    echo "<script>$('#id_jabatan').val('".$data->id_jabatan."')</script>";
                    echo "<script>$('#status').val('".$data->status."')</script>";
                }	
        }
        
	//function buat delete 
    public function delete_fungsionaris($id_ukm,$id_fungsionaris) {
    		//delete dari tb_fungsionaris dengan id_fungsionaris = $id_fungsionaris
            $this->db->where('id_fungsionaris',$id_fungsionaris);
            $this->db->delete('tb_fungsionaris');
            $query = $this->db->affected_rows();
            if($query>0){
                $this->session->set_flashdata('pesan','data berhasil Tersimpan');
                $this->session->set_flashdata('color','success');
            }
            redirect(base_url('cfungsionaris/fungsionaris/').$id_ukm,'_self');
        }

    }

?>
