<?php
    class Mmahasiswa1 extends CI_Model {
        public function getdataukm(){
            $query = $this->db->get('tb_ukm');
            return $query->result();
        }
        public function getdataukmwhere($id_ukm){
            $this->db->where('id_ukm',$id_ukm);
            $query = $this->db->get('tb_ukm');
            return $query->row();
        }
        public function daftaranggota(){
            $data = $_POST;
            $this->db->insert('tb_daftar_anggota',$data);
            $query = $this->db->affected_rows();
            if($query>0){
                $this->session->set_flashdata('pesan','anda sudah berhasil terdaftar mohon menunggu verifikasi');
                $this->session->set_flashdata('color','success');
            }else {
                $this->session->set_flashdata('pesan','anda gagal terdaftar');
                $this->session->set_flashdata('color','danger');
            }
            redirect(base_url('cmahasiswa/ukm'),'_self');
        }
       

    }

?>
