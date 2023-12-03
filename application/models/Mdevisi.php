<?php 
class mdevisi extends CI_Model{
    public function get_devisi($id_ukm){
        return $this->db->get_where('tb_devisi',['id_ukm'=>$id_ukm])->result();
    }
    public function get_devisi_id($id_devisi){
        return $this->db->get_where('tb_devisi',['id_devisi'=>$id_devisi])->row();
    }
    public function insert_devisi()  {
        $data = $_POST;
        $this->db->insert('tb_devisi',$data);
        $query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Tertambah');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Tertambah');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('cfungsionaris/devisi/'.$data['id_ukm']),'_self');
    }
    public function update_devisi()  {
        $data = $_POST;
        $this->db->where('id_devisi',$data['id_devisi']);
        $this->db->update('tb_devisi',$data);
        $query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Tertambah');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Tertambah');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('cfungsionaris/devisi/'.$data['id_ukm']),'_self');
    }
    public function delete_devisi($id_ukm,$id_devisi) {
        $this->db->where('id_devisi',$id_devisi);
        $this->db->delete('tb_devisi');
        $query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terhapus');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Terhapus');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('cfungsionaris/devisi/').$id_ukm,'_self');
    }
}