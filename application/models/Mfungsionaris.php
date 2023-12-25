<?php
    class Mfungsionaris extends CI_Model {
        public function get_fungsionaris($id_ukm){
            $query = $this->db->get_where('fungsionaris',['id_ukm'=>$id_ukm]);
            return $query->result();
        }public function get_fungsionaris_id($id_fungsionaris){
            $query = $this->db->get_where('tb_fungsionaris',['id_fungsionaris'=>$id_fungsionaris]);
            return $query->row();
        }
        public function proses_fungsionaris(){
            $pesan = '';
            $color = '';
            $data= [
                'id_fungsionaris'=>$this->input->post('id_fungsionaris'),
                'id_mahasiswa'=>$this->input->post('id_mahasiswa'),
                'id_jabatan'=>$this->input->post('id_jabatan'),
                'status'=>$this->input->post('status'),
            ];
            $id_fungsionaris=$data['id_fungsionaris'];
            if(empty($id_fungsionaris)){
                $this->db->insert('tb_fungsionaris',$data);
                $pesan='Data sudah disimpan';
                $color='success';
            }else{
                $update=array(
                    'id_fungsionaris'=>$id_fungsionaris
                );
                $this->db->where($update);
                $this->db->update('tb_fungsionaris',$data);
                $pesan='Data sudah diedit';
                $color='success';
            }
            $this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
            redirect(base_url('cfungsionaris/fungsionaris/').$this->input->post('id_ukm'),'_self');
        }
    
        public function edit_fungsionaris($id_fungsionaris){
                $query = $this->db->get_where('tb_fungsionaris',['id_fungsionaris'=>$id_fungsionaris]);
                if($query->num_rows()>0)
                {
                    $data=$query->row();
                    echo "<script>$('#id_fungsionaris').val('".$data->id_fungsionaris."')</script>";
                    echo "<script>$('#id_mahasiswa').val('".$data->id_mahasiswa."')</script>";
                    echo "<script>$('#id_jabatan').val('".$data->id_jabatan."')</script>";
                    echo "<script>$('#status').val('".$data->status."')</script>";
                }	
        }
        public function delete_fungsionaris($id_ukm,$id_fungsionaris) {
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
