<?php 
class Mmahasiswa extends CI_Model{  
    public function get_mahasiswa(){
		return $this->db->get('tb_mahasiswa')->result();
	}
    public function get_mahasiswa_id($id_mahasiswa){
		return$this->db->get_where('tb_mahasiswa',['id_mahasiswa'=>$id_mahasiswa])->row();
	}

	public function insert_data_mhs(){
		$data=$_POST;
		$this->db->insert('tb_mahasiswa',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/mahasiswa'),'_self');
	}

	public function update_data_mhs(){
		$data=$_POST;
		$id_mahasiswa =  $this->input->post('id_mahasiswa');
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$this->db->update('tb_mahasiswa',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/mahasiswa'),'_self');
	}

	public function delete_data_mhs($id_mahasiswa){
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$this->db->delete('tb_mahasiswa');
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/mahasiswa'),'_self');
	}



}