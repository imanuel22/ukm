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

	public function getdatamahasiswa(){
		$query = $this->db->get('tb_mahasiswa');
		return $query->result();
	}

	public function insert_data_mhs(){
		$data=$_POST;
		$this->db->insert('tb_mahasiswa',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/mahasiswa'),'_self');
	}

	public function getdataprodi(){
		$query = $this->db->get('tb_prodi');
		return $query->result();
	}

	public function update_data_mhs(){
		$data=$_POST;
		$id_mahasiswa =  $this->input->post('id_mahasiswa');
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$this->db->update('tb_mahasiswa',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/mahasiswa'),'_self');
	}

	public function getdatamahasiswawhere($id_mahasiswa){
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$query = $this->db->get('tb_mahasiswa');
		return $query->row();
	}

	public function delete_data_mhs($id_mahasiswa){
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$this->db->delete('tb_mahasiswa');
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/mahasiswa'),'_self');
	}

	public function getdatajurusan(){
		$query = $this->db->get('tb_jurusan');
		return $query->result();
	}

	//jurusan
	public function insert_data_jurusan(){
		$data=$_POST;
		$this->db->insert('tb_jurusan',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/jurusan'),'_self');
	}

	public function delete_data_jurusan($id_jurusan){
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->delete('tb_jurusan');
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/jurusan'),'_self');
	}

	public function getdatajurusanwhere($id_jurusan){
		$this->db->where('id_jurusan',$id_jurusan);
		$query = $this->db->get('tb_jurusan');
		return $query->row();
	}

	public function update_data_jurusan(){
		$data=$_POST;
		$id_jurusan =  $this->input->post('id_jurusan');
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->update('tb_jurusan',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/jurusan'),'_self');
	}

	//prodi
	public function insert_data_prodi(){
		$data=$_POST;
		$this->db->insert('tb_prodi',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/prodi'),'_self');
	}

	public function delete_data_prodi($id_prodi){
		$this->db->where('id_prodi',$id_prodi);
		$this->db->delete('tb_prodi');
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/prodi'),'_self');
	}

	public function getdataprodiwhere($id_prodi){
		$this->db->where('id_prodi',$id_prodi);
		$query = $this->db->get('tb_prodi');
		return $query->row();
	}

	public function update_data_prodi(){
		$data=$_POST;
		$id_prodi =  $this->input->post('id_prodi');
		$this->db->where('id_prodi',$id_prodi);
		$this->db->update('tb_prodi',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/prodi'),'_self');
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

	//verif mhs
	public function getdataverifmhs(){
		$query = $this->db->get('tb_daftar_mhs');
		return $query->result();
	}
	public function getdataverifmhswhere($id_daftar_mhs){
		$this->db->where('id_daftar_mhs',$id_daftar_mhs);
		$query = $this->db->get('tb_daftar_mhs');
		return $query->row();
	}
	public function proses_verif_berhasil(){
		$data = $_POST;
		$this->db->insert('tb_mahasiswa',$data);
		$id_daftar_mhs = $this->getdatadaftarmhswhere($data['nim']);
		$id_daftar_mhs1 = $id_daftar_mhs->id_daftar_mhs;
		$this->proseshapus($id_daftar_mhs1);
	}
	public function proses_verif_gagal(){
		$data =$_POST;
		$id_daftar_mhs = $this->getdatadaftarmhswhere($data['nim']);
		$id_daftar_mhs1 = $id_daftar_mhs->id_daftar_mhs;
		$this->proseshapus($id_daftar_mhs1);
	}
	

	public function getdatadaftarmhswhere($nim) {
		$this->db->select('id_daftar_mhs');
		$this->db->where('nim_mhs',$nim);
		$query=$this->db->get('tb_daftar_mhs');
		return $query->row();
	}
	public function proseshapus($id_daftar_mhs){
		$this->db->where('id_daftar_mhs',$id_daftar_mhs);
		$this->db->delete('tb_daftar_mhs');
		redirect(base_url('cbem/verifmhs'),'_self');
	}
	public function getdataprodiwherejurusan($id_jurusan){
		$this->db->where('id_jurusan',$id_jurusan);
		$query=$this->db->get('tb_prodi');
		return$query->result();
	}

}
