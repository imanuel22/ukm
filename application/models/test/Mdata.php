<?php
class Mdata extends CI_Model
{
    function getdata() {
        $bem = $this->db->get_where('tb_mahasiswa',['level'=>'admin'])->num_rows();
        $mahasiswa = $this->db->get_where('tb_mahasiswa',['level'=>'user'])->num_rows();
        $ukm = $this->db->get('tb_ukm')->num_rows();
        $jurusan = $this->db->get('tb_jurusan')->num_rows();
        $prodi = $this->db->get('tb_prodi')->num_rows();
        $fungsionaris = $this->db->get('tb_fungsionaris')->num_rows();
        $anggota = $this->db->get('tb_anggota_ukm')->num_rows();
        $proker = $this->db->get('tb_proker')->num_rows();
        $devisi = $this->db->get('tb_devisi')->num_rows();
        $jabatan = $this->db->get('tb_jabatan')->num_rows();

        return [
            'bem'=>$bem,
            'mahasiswa'=>$mahasiswa,
            'ukm'=>$ukm,
            'jurusan'=>$jurusan,
            'prodi'=>$prodi,
            'fungsionaris'=>$fungsionaris,
            'anggota'=>$anggota,
            'jabatan'=>$jabatan,
            'devisi'=>$devisi,
            'proker'=>$proker,
        ];
    }
}