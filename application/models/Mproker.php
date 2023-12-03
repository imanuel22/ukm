<?php 
class Mproker extends CI_Model{
    public function get_proker($id_ukm) {
        return $this->db->get_where('tb_proker',['id_ukm'=>$id_ukm])->result();
    }
    public function get_proker_id($id_proker) {
        return $this->db->get_where('tb_proker',['id_proker'=>$id_proker])->row();
    }
    public function insert_proker(){
        $data = $_POST;
        $this->db->insert('tb_proker',$data);
        $query = $this->db->affected_rows();
        if($query>0){
            $this->session->set_flashdata('pesan','data berhasil Tersimpan');
            $this->session->set_flashdata('color','success');
        }else {
            $this->session->set_flashdata('pesan','data gagal Tersimpan');
            $this->session->set_flashdata('color','danger');
        }
        redirect(base_url('cfungsionaris/proker/').$data['id_ukm'],'_self');
    }
    public function update_proker(){
        $data = $_POST;
        $this->db->where('id_proker',$data['id_proker']);
        $this->db->update('tb_proker',$data);
        $query = $this->db->affected_rows();
        if($query>0){
            $this->session->set_flashdata('pesan','data berhasil Tersimpan');
            $this->session->set_flashdata('color','success');
        }else {
            $this->session->set_flashdata('pesan','data gagal Tersimpan');
            $this->session->set_flashdata('color','danger');
        }
        redirect(base_url('cfungsionaris/proker/').$data['id_ukm'],'_self');
    }

    public function delete_proker($id_ukm,$id_proker) {
        $this->db->where('id_proker',$id_proker);
        $this->db->delete('tb_proker');
        $query = $this->db->affected_rows();
        if($query>0){
            $this->session->set_flashdata('pesan','data berhasil Tersimpan');
            $this->session->set_flashdata('color','success');
        }else {
            $this->session->set_flashdata('pesan','data gagal Tersimpan');
            $this->session->set_flashdata('color','danger');
        }
        redirect(base_url('cfungsionaris/proker/').$id_ukm,'_self');
    }
}