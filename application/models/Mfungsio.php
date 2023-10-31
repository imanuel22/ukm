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

		$data=[
		'nama_ukm'=>$nama_ukm,
		'deskripsi'=>$deskripsi,
		'peraturan'=>$peraturan
		];

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
}
