<?php
class Mjurusan extends CI_Model{
    public function get_jurusan() {
		$query = $this->db->get('tb_jurusan');
		return $query->result();
	}

	public function get_jurusan_id($id_jurusan){
		$this->db->where('id_jurusan',$id_jurusan);
		$query = $this->db->get('tb_jurusan');
		return $query->row();
	}
	public function insert_jurusan(){
		$data=$_POST;
		$this->db->insert('tb_jurusan',$data);
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Tersimpan');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Tersimpan');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('csuperadmin/jurusan'),'_self');
	}
	public function update_jurusan(){
		$data=$_POST;
		$this->db->where('id_jurusan',$data['id_jurusan']);
		$this->db->update('tb_jurusan',$data);
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terupdate');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Terupdate');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('csuperadmin/jurusan'),'_self');
	}
	public function delete_jurusan($id_jurusan){
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->delete('tb_jurusan');
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terhapus');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Terhapus');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('csuperadmin/jurusan'),'_self');
	}

	
}
