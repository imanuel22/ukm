<?php
class Mbem extends CI_Model
{
	public function prosesviewukm(){
		$this->db->select('*');
		$this->db->from('ketua');
		$query = $this->db->get();
		return $query->result();

	}
	public function prosesinsertukm(){
		$nama_ukm =  $this->input->post('nama_ukm');
		$data= array(
			'nama_ukm'=>$nama_ukm,
		);
		$this->db->insert('tb_ukm',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/ukm'),'_self');
	}
	public function prosesupdateukm(){
		$id_ukm =  $this->input->post('id_ukm');
		$nama_ukm =  $this->input->post('nama_ukm');
		$data= array(
			'nama_ukm'=>$nama_ukm,
		);
		$this->db->where('id_ukm',$id_ukm);
		$this->db->update('tb_ukm',$data);
		redirect(base_url('cbem/ukm'),'_self');

	}

	public function getdataukm($id_ukm){
		$this->db->where('id_ukm',$id_ukm);
		$query = $this->db->get('tb_ukm');
		return $query->row();

	}

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

	public function getdatamahasiswa(){
		$query = $this->db->get('tb_mahasiswa');
		return $query->result();
	}

	public function insert_data_mhs(){
		$data=$_POST;
		$this->db->insert('tb_mahasiswa',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/home'),'_self');
	}

	public function getdataprodi(){
		$query = $this->db->get('tb_prodi');
		return $query->result();
	}

	//public function 
}
