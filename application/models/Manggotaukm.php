<?php
    class Manggotaukm extends CI_Model {
        public function get_anggota_ukm($id_ukm){
            $query = $this->db->get_where('anggota_ukm',['id_ukm'=>$id_ukm]);
            return $query->result();
        }public function get_anggota_id($id_anggota_ukm){
            $query = $this->db->get_where('tb_anggota_ukm',['id_anggota_ukm'=>$id_anggota_ukm]);
            return $query->row();
        }
        public function insert_anggota(){
            $data = [
                'id_mahasiswa'=>$this->input->post('id_mahasiswa'),
                'id_devisi'=>$this->input->post('id_devisi'),
                'status' => 'aktif',
                'tgl_mulai' => date('Ymd'),
            ];
            $this->db->insert('tb_anggota_ukm',$data);
            $query = $this->db->affected_rows();
            if($query>0){
                $this->session->set_flashdata('pesan','data berhasil Tersimpan');
                $this->session->set_flashdata('color','success');
            }else {
                $this->session->set_flashdata('pesan','data gagal Tersimpan');
                $this->session->set_flashdata('color','danger');
            }
            redirect(base_url('cfungsionaris/anggota_ukm/').$this->input->post('id_ukm'),'_self');
        }
        public function update_anggota(){
            $data = $_POST;
            $data['status'] = 'aktif';
            $this->db->where('id_anggota_ukm',$data['id_anggota_ukm']);
            $this->db->update('tb_anggota_ukm',$data);
            $query = $this->db->affected_rows();
            if($query>0){
                $this->session->set_flashdata('pesan','data berhasil Tersimpan');
                $this->session->set_flashdata('color','success');
            }else {
                $this->session->set_flashdata('pesan','data gagal Tersimpan');
                $this->session->set_flashdata('color','danger');
            }
            redirect(base_url('cfungsionaris/anggota_ukm/').$data['id_ukm'],'_self');
        }

        public function delete_anggota($id_ukm,$id_anggota_ukm) {
            $this->db->where('id_anggota_ukm',$id_anggota_ukm);
            $this->db->delete('tb_anggota_ukm');
            $query = $this->db->affected_rows();
            if($query>0){
                $this->session->set_flashdata('pesan','data berhasil Tersimpan');
                $this->session->set_flashdata('color','success');
            }else {
                $this->session->set_flashdata('pesan','data gagal Tersimpan');
                $this->session->set_flashdata('color','danger');
            }
            redirect(base_url('cfungsionaris/anggota_ukm/').$id_ukm,'_self');
        }

    }

?>
