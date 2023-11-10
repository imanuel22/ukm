<?php
    class Mmahasiswa extends CI_Model {
        public function getdataukm(){
            $query = $this->db->get('tb_ukm');
            return $query->result();
        }

    }

?>
