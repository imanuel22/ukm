<?php 
class mdevisi extends CI_Model{

    public function get_devisi_id($id_ukm){
        return $this->db->get_where('tb_devisi',['id_ukm'=>$id_ukm])->row();
    }
}