<?php

class Mdanggota extends CI_Model{
    public function daftar_anggota(){
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