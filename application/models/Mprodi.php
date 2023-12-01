<?php
class Mprodi extends CI_Model{

    public function get_prodi() {
		return $this->db->get('prodi')->result();
	}
	public function get_prodi_id($id_prodi){
		return $this->db->get_where('tb_prodi',['id_prodi'=>$id_prodi])->row();
	}
	public function view_prodi() {
		return $this->db->get('prodi')->result();
	}

	public function insert_prodi(){
		$data = $_POST;
		$this->db->insert('tb_prodi',$data);
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Tersimpan');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Tersimpan');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('csuperadmin/prodi'),'_self');
	}
	public function update_prodi(){
		$data=$_POST;
		$this->db->where('id_prodi',$data['id_prodi']);
		$this->db->update('tb_prodi',$data);
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terupdate');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Terupdate');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('csuperadmin/prodi'),'_self');
	}
	public function delete_prodi($id_prodi){
		$this->db->where('id_prodi',$id_prodi);
		$this->db->delete('tb_prodi');
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terhapus');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Terhapus');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('csuperadmin/prodi'),'_self');
	}
}