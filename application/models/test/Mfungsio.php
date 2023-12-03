<?php
class Mfungsio extends CI_Model
{
	public function getviewukm(){
		$query=$this->db->get('tb_ukm');
		return $query->result();
	}

	public function prosesinsertukm(){
		$nama_ukm=$this->input->post('nama_ukm');
		$deskripsi=$this->input->post('deskripsi');
		$peraturan=$this->input->post('peraturan');

		$data=$_POST;

		$this->db->insert('tb_ukm',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cfungsio/ukm'),'_self');
	}

	public function prosesdeleteukm($id_ukm){
		$this->db->where('id_ukm',$id_ukm);
		$this->db->delete('tb_ukm');
		redirect(base_url('cfungsio/ukm'),'_self');

	}
	public function prosesupdateukm(){
		$id_ukm =  $this->input->post('id_ukm');
		$nama_ukm =  $this->input->post('nama_ukm');
		$deskripsi=$this->input->post('deskripsi');
		$peraturan=$this->input->post('peraturan');
		$data= array(
			'nama_ukm'=>$nama_ukm,
			'deskripsi'=>$deskripsi,
			'peraturan'=>$peraturan
		);
		$this->db->where('id_ukm',$id_ukm);
		$this->db->update('tb_ukm',$data);
		redirect(base_url('cfungsio/ukm'),'_self');

	}

	public function getdataukm($id_ukm){
		$this->db->where('id_ukm',$id_ukm);
		$query = $this->db->get('tb_ukm');
		return $query->row();

	}

	public function getviewproker(){
		$query=$this->db->get('tb_proker');
		return $query->result();
	}

	public function prosesinsertproker(){
		$nama_proker=$this->input->post('nama_proker');
		$deskripsi=$this->input->post('deskripsi');
		$peraturan=$this->input->post('peraturan');
		$id_ukm=$this->input->post('id_ukm');

		$data=[
		'nama_proker'=>$nama_proker,
		'deskripsi'=>$deskripsi,
		'peraturan'=>$peraturan,
		'id_ukm'=>$id_ukm
		];

		$this->db->insert('tb_proker',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cfungsio/proker'),'_self');
	}

	public function prosesdeleteproker($id_proker){
		$this->db->where('id_proker',$id_proker);
		$this->db->delete('tb_proker');
		redirect(base_url('cfungsio/proker'),'_self');

	}
	public function prosesupdateproker(){
		$id_proker =  $this->input->post('id_proker');
		$nama_proker =  $this->input->post('nama_proker');
		$deskripsi=$this->input->post('deskripsi');
		$peraturan=$this->input->post('peraturan');
		$data= array(
			'nama_proker'=>$nama_proker,
			'deskripsi'=>$deskripsi,
			'peraturan'=>$peraturan
		);
		$this->db->where('id_proker',$id_proker);
		$this->db->update('tb_proker',$data);
		redirect(base_url('cfungsio/proker'),'_self');

	}

	public function getdataproker($id_proker){
		$this->db->where('id_proker',$id_proker);
		$query = $this->db->get('tb_proker');
		return $query->row();

	}
}
