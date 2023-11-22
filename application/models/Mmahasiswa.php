<?php
    class Mmahasiswa extends CI_Model {
        public function getdataukm(){
            $query = $this->db->get('tb_ukm');
            return $query->result();
        }
        public function getdataukmwhere($id_ukm){
            $this->db->where('id_ukm',$id_ukm);
            $query = $this->db->get('tb_ukm');
            return $query->row();
        }

    }

?>
