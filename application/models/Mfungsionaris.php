<?php
    class Mfungsionaris extends CI_Model {
        public function get_fungsionaris($id_ukm){
            $query = $this->db->get_where('tb_fungsionaris',['id_ukm'=>$id_ukm]);
            return $query->result();
        }

    }

?>
