<?php
class Mbem extends CI_Model
{
	// public function prosesviewukm(){
	// 	$this->db->select('*');
	// 	$this->db->from('ketua');
	// 	$query = $this->db->get();
	// 	return $query->result();

	// }
	// public function prosesinsertukm(){
	// 	$nama_ukm =  $this->input->post('nama_ukm');
	// 	$data= array(
	// 		'nama_ukm'=>$nama_ukm,
	// 	);
	// 	$this->db->insert('tb_ukm',$data);
	// 	echo "<script>alert('databas sudah berhasil di simpan');</script>";
	// 	redirect(base_url('cbem/ukm'),'_self');
	// }
	// public function prosesupdateukm(){
	// 	$id_ukm =  $this->input->post('id_ukm');
	// 	$nama_ukm =  $this->input->post('nama_ukm');
	// 	$data= array(
	// 		'nama_ukm'=>$nama_ukm,
	// 	);
	// 	$this->db->where('id_ukm',$id_ukm);
	// 	$this->db->update('tb_ukm',$data);
	// 	redirect(base_url('cbem/ukm'),'_self');

	// }

	// public function getdataukm($id_ukm){
	// 	$this->db->where('id_ukm',$id_ukm);
	// 	$query = $this->db->get('tb_ukm');
	// 	return $query->row();

	// }

	// public function prosesdeleteukm($id_ukm){
	// 	$this->db->where('id_ukm',$id_ukm);
	// 	$this->db->delete('tb_ukm');
	// 	redirect(base_url('cbem/ukm'),'_self');

	// }

	// public function prosesviewmhs(){
	// 	$this->db->select('*');
	// 	$this->db->from('tb_mahasiswa');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }	

	public function getdatajurusan(){
		$query = $this->db->get('tb_jurusan');
		return $query->result();
	}

	//ukm
	public function getdataukm(){
		$query = $this->db->get('masterukm');
		return $query->result();
	}

	public function insert_data_ukm(){
		$nama_ukm =  $this->input->post('nama_ukm');
		$data= array(
			'nama_ukm'=>$nama_ukm
		);
		$this->db->insert('tb_ukm',$data);
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$id_ukm1 = $this->getdataukmwhere($nama_ukm);
		$id= $id_ukm1->id_ukm;
		$data1= array(
			'id_ukm'=>$id,
			'id_mahasiswa'=>$id_mahasiswa,
			'jabatan'=>'ketua',
			'status'=>'aktif'
		);
		$this->db->insert('tb_inti_ukm',$data1);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/ukm'),'_self');
	}
	
	public function getdatamahasiswawherel($user){
		$this->db->where('level',$user);
		$query = $this->db->get('tb_mahasiswa');
		return $query->result();
	}
	public function getdataukmwhere($nama_ukm){
		$this->db->select('id_ukm');
		$this->db->where('nama_ukm',$nama_ukm);
		$query = $this->db->get('tb_ukm');
		return $query->row();
	}

	public function delete_data_ukm($id_ukm){
		$this->db->where('id_daftar_mhs',$id_ukm);
		$this->db->delete('tb_daftar_mhs');
		redirect(base_url('cbem/verifmhs'),'_self');
	}

	//verif mhs
	

	
}
