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
		$pesan = '';
		$color = '';
		$data=$_POST;
		$id_jurusan=$data['id_jurusan'];
		if(empty($id_jurusan)){
			$this->db->insert('tb_jurusan',$data);
			$pesan='Data sudah disimpan';
			$color='success';
		}else{
			$update=array(
				'id_jurusan'=>$id_jurusan
			);
			$this->db->where($update);
			$this->db->update('tb_jurusan',$data);
			$pesan='Data sudah diedit';
			$color='success';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
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
	public function edit_jurusan($id_jurusan){
			$this->db->where('id_jurusan',$id_jurusan);
			$query = $this->db->get('tb_jurusan');
			if($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#id_jurusan').val('".$data->id_jurusan."')</script>";
				echo "<script>$('#nama_jurusan').val('".$data->nama_jurusan."')</script>";
				echo "<script>$('#NoSKJurusan').val('".$data->NoSKJurusan."')</script>";
				echo "<script>$('#Kajur').val('".$data->Kajur."')</script>";
				echo "<script>$('#keterangan').val('".$data->keterangan."')</script>";
			}	
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
