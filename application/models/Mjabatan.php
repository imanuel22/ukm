<?php 
class Mjabatan extends CI_Model{
    public function get_jabatan($id_ukm) {  
        return $this->db->get_where('tb_jabatan',['id_ukm'=>$id_ukm])->result();
    }
    public function get_jabatan_id($id_jabatan) {
        return $this->db->get_where('tb_jabatan',['id_jabatan'=>$id_jabatan])->row();
    }
    public function insert_jabatan(){
        $data = $_POST;
        $this->db->insert('tb_jabatan',$data);
        $query = $this->db->affected_rows();
        if($query>0){
            $this->session->set_flashdata('pesan','data berhasil Tersimpan');
            $this->session->set_flashdata('color','success');
        }else {
            $this->session->set_flashdata('pesan','data gagal Tersimpan');
            $this->session->set_flashdata('color','danger');
        }
        redirect(base_url('cfungsionaris/jabatan/').$data['id_ukm'],'_self');
    }
    public function update_jabatan(){
        $data = $_POST;
        $this->db->where('id_jabatan',$data['id_jabatan']);
        $this->db->update('tb_jabatan',$data);
        $query = $this->db->affected_rows();
        if($query>0){
            $this->session->set_flashdata('pesan','data berhasil Tersimpan');
            $this->session->set_flashdata('color','success');
        }else {
            $this->session->set_flashdata('pesan','data gagal Tersimpan');
            $this->session->set_flashdata('color','danger');
        }
        redirect(base_url('cfungsionaris/jabatan/').$data['id_ukm'],'_self');
    }

    public function delete_jabatan($id_ukm,$id_jabatan) {
        $this->db->where('id_jabatan',$id_jabatan);
        $this->db->delete('tb_jabatan');
        $query = $this->db->affected_rows();
        if($query>0){
            $this->session->set_flashdata('pesan','data berhasil Tersimpan');
            $this->session->set_flashdata('color','success');
        }else {
            $this->session->set_flashdata('pesan','data gagal Tersimpan');
            $this->session->set_flashdata('color','danger');
        }
        redirect(base_url('cfungsionaris/jabatan/').$id_ukm,'_self');
    }
}