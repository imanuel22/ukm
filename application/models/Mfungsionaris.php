<?php
    class Mfungsionaris extends CI_Model {
        public function get_fungsionaris($id_ukm){
            $query = $this->db->get_where('fungsionaris',['id_ukm'=>$id_ukm]);
            return $query->result();
        }public function get_fungsionaris_id($id_fungsionaris){
            $query = $this->db->get_where('tb_fungsionaris',['id_fungsionaris'=>$id_fungsionaris]);
            return $query->row();
        }
        public function insert_fungsionaris(){
            $data = $_POST;
            $data['status'] = 'aktif';
            $this->db->insert('tb_fungsionaris',$data);
            $query = $this->db->affected_rows();
            if($query>0){
                $this->session->set_flashdata('pesan','data berhasil Tersimpan');
                $this->session->set_flashdata('color','success');
            }else {
                $this->session->set_flashdata('pesan','data gagal Tersimpan');
                $this->session->set_flashdata('color','danger');
            }
            redirect(base_url('cfungsionaris/fungsionaris/').$data['id_ukm'],'_self');
        }
        public function update_fungsionaris(){
            $data = $_POST;
            $data['status'] = 'aktif';
            $this->db->where('id_fungsionaris',$data['id_fungsionaris']);
            $this->db->update('tb_fungsionaris',$data);
            $query = $this->db->affected_rows();
            if($query>0){
                $this->session->set_flashdata('pesan','data berhasil Tersimpan');
                $this->session->set_flashdata('color','success');
            }else {
                $this->session->set_flashdata('pesan','data gagal Tersimpan');
                $this->session->set_flashdata('color','danger');
            }
            redirect(base_url('cfungsionaris/fungsionaris/').$data['id_ukm'],'_self');
        }

        public function delete_fungsionaris($id_ukm,$id_fungsionaris) {
            $this->db->where('id_fungsionaris',$id_fungsionaris);
            $this->db->delete('tb_fungsionaris');
            $query = $this->db->affected_rows();
            if($query>0){
                $this->session->set_flashdata('pesan','data berhasil Tersimpan');
                $this->session->set_flashdata('color','success');
            }else {
                $this->session->set_flashdata('pesan','data gagal Tersimpan');
                $this->session->set_flashdata('color','danger');
            }
            redirect(base_url('cfungsionaris/fungsionaris/').$id_ukm,'_self');
        }

    }

?>
