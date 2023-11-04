<?php
    class Mketua extends CI_Model {
        public function getdataukm(){
            $query = $this->db->get('tb_ukm');
            return $query->result();
        }

        public function getdataproker(){
            $query = $this->db->get('tb_proker');
            return $query->result();
        }
    
        public function insert_data_ukm(){
            $data=$_POST;
            $this->db->insert('tb_ukm',$data);
            echo "<script>alert('database sudah berhasil di simpan');</script>";
            redirect(base_url('cketua/ukm'),'_self');
        }

        public function update_data_ukm(){
            $data=$_POST;
            $id_ukm =  $this->input->post('id_ukm');
            $this->db->where('id_ukm',$id_ukm);
            $this->db->update('tb_ukm',$data);
            echo "<script>alert('database sudah berhasil di simpan');</script>";
            redirect(base_url('cketua/ukm'),'_self');
        }
    }
?>