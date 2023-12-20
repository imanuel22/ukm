<?php 
class Mmahasiswa extends CI_Model{  
    public function get_mahasiswa(){
		return $this->db->get('mahasiswa')->result();
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

	public function proses_edit_profile() {
		if(!empty($this->input->post('img_mahasiswa'))){
			$namafile='img-'.$this->input->post('nim');
			$config = [
				'upload_path'=> 'assets/uploads/img_mahasiswa',
				'allowed_types'=>'jpg|jpeg|png',
				'max_size'=>0,	
				'file_name'=>$namafile,
			];
			$this->load->library('upload',$config);
			$this->upload->do_upload('img_mahasiswa');
			$data = [
				'nim'=>$this->input->post('nim'),
				'nama_mahasiswa'=>$this->input->post('nama_mahasiswa'),
				'angkatan '=>$this->input->post('angkatan'),
				'password'=>$this->input->post('password'),
				'no_telp'=>$this->input->post('no_telp'),
				'level'=>'user',
				'img_mahasiswa'=>$this->upload->data('file_name'),
				'status'=>'aktif',
				'id_prodi'=>$this->input->post('id_prodi'),
			];
		}
		else{
			$data = [
				'nim'=>$this->input->post('nim'),
				'nama_mahasiswa'=>$this->input->post('nama_mahasiswa'),
				'angkatan '=>$this->input->post('angkatan'),
				'password'=>$this->input->post('password'),
				'no_telp'=>$this->input->post('no_telp'),
				'level'=>'user',
				'img_mahasiswa'=>$this->input->post('img_mahasiswa_old'),
				'status'=>'aktif',
				'id_prodi'=>$this->input->post('id_prodi'),
			];}
		;
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$this->db->update('tb_mahasiswa',$data);
		redirect(base_url('cmahasiswa/profile/').$id_mahasiswa,'_self');

	}
	

}