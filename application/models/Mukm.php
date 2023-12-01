<?php
class Mukm extends CI_Model{

    public function get_ukm() {
        return $this->db->get('tb_ukm');
    }
}


