<?php
class Mcard extends CI_Model
{
	function card_fungsionaris($id_mahasiswa) {
       $data_fungsio=$this->db->get_where('cekfungsionaris',['id_mahasiswa'=>$id_mahasiswa,'status'=>'aktif']);
       if($data_fungsio->num_rows()>0){
            return $data_fungsio->result();
       }
       else{
        return null;
     }
    }
    function card_anggotaUKM($id_mahasiswa) {
         $data_anggota=$this->db->get_where('cekanggota',['id_mahasiswa'=>$id_mahasiswa,'status'=>'aktif']);
         if($data_anggota->num_rows()>0){
             return $data_anggota->result();
         }else{
            return null;
         }
     }
}