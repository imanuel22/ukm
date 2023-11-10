<?php
class Msuperadmin extends CI_Model{

	public function getdatajurusan() {
		$query = $this->db->get('tb_jurusan');
		return $query->result();
	}

	public function getdatajurusan_id($id_jurusan){
		$this->db->where('id_jurusan',$id_jurusan);
		$query = $this->db->get('tb_jurusan');
		return $query->row();
	}
	public function insert_data_jurusan(){
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
	public function update_data_jurusan(){
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
	public function delete_data_jurusan($id_jurusan){
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

	public function getdataprodi() {
		$query = $this->db->get('tb_prodi');
		return $query->result();
	}
	public function getdataprodi_id($id_prodi){
		$this->db->where('id_prodi',$id_prodi);
		$query = $this->db->get('tb_prodi');
		return $query->row();
	}
	public function insert_data_prodi(){
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
	public function update_data_prodi(){
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
	public function delete_data_prodi($id_prodi){
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
	public function getdatabem() {
		$this->db->where('level','admin');
		$query = $this->db->get('tb_mahasiswa');
		return $query->result();
		
	}
	public function getdatabem_id($id_mahasiswa) {
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$this->db->where('level','admin');
		$query = $this->db->get('tb_mahasiswa');
		return $query->row();
		
	}
	public function insert_data_bem(){
		$data = $_POST;
		$data['level']='admin';
		$this->db->insert('tb_mahasiswa',$data);
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Tersimpan');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Tersimpan');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('csuperadmin/bem'),'_self');
	}
	public function update_data_bem(){
		$data=$_POST;
		$this->db->where('id_mahasiswa',$data['id_mahasiswa']);
		$this->db->update('tb_mahasiswa',$data);
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terupdate');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Terupdate');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('csuperadmin/bem'),'_self');
	}
	public function delete_data_bem($id_mahasiswa){
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$this->db->delete('tb_mahasiswa');
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terhapus');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Terhapus');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('csuperadmin/bem'),'_self');
	}
	
	
}

?>
