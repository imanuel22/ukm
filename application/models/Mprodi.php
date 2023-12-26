<?php
class Mprodi extends CI_Model{

    public function get_prodi() {
		return $this->db->get('prodi')->result();
	}
	public function get_prodi_id($id_prodi){
		return $this->db->get_where('tb_prodi',['id_prodi'=>$id_prodi])->row();
	}
	public function proses_prodi(){
		$data = $_POST;
		$id_prodi = $data['id_prodi'];
		if(empty($id_prodi)){
		$this->db->insert('tb_prodi',$data);
		$pesan='Data sudah disimpan';
		$color='success';
		}else{
			$update=array(
				'id_prodi'=>$id_prodi
			);
			$this->db->where($update);
			$this->db->update('tb_prodi',$data);
			$pesan='Data sudah diedit';
			$color='success';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('csuperadmin/prodi'),'_self');
	}
	public function edit_prodi($id_prodi){
		$query = $this->db->get_where('tb_prodi',['id_prodi'=>$id_prodi]);
		if($query->num_rows()>0)
		{
			$data=$query->row();
			echo "<script>$('#id_prodi').val('".$data->id_prodi."')</script>";
			echo "<script>$('#nama_prodi').val('".$data->nama_prodi."')</script>";
			echo "<script>$('#id_jurusan').val('".$data->id_jurusan."')</script>";
			echo "<script>$('#jenjang').val('".$data->jenjang."')</script>";
			echo "<script>$('#NoSKProdi').val('".$data->NoSKProdi."')</script>";
			echo "<script>$('#Kaprodi').val('".$data->Kaprodi."')</script>";
			echo "<script>$('#Keterangan').val('".$data->Keterangan."')</script>";
		}	
	}
	public function update_prodi(){
		$data=$_POST;
		$this->db->where('id_prodi',$data['id_prodi']);
		$this->db->update('tb_prodi',$data);
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terupdate');
			$this->session->set_flashdata('color','success');
		}
		redirect(base_url('csuperadmin/prodi'),'_self');
	}
	public function delete_prodi($id_prodi){
		$this->db->where('id_prodi',$id_prodi);
		$this->db->delete('tb_prodi');
		$this->session->set_flashdata(['pesan'=>'data berhasil Terhapus','color'=>'success']);
		redirect(base_url('csuperadmin/prodi'),'_self');
	}
}