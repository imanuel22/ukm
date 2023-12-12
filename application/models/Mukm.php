<?php
class Mukm extends CI_Model{

    public function get_masterukm(){
		$query = $this->db->get('masterukm');
		return $query->result();
	}
    public function get_ukm(){
		$query = $this->db->get('tb_ukm');
		return $query->result();
	}
	public function get_ukm_id($id_ukm){
        $this->db->where('id_ukm',$id_ukm);
        $query = $this->db->get('tb_ukm');
        return $query->row();
    }
	public function insert_ukm(){
		$nama_ukm =  $this->input->post('nama_ukm');
		$data= array(
			'nama_ukm'=>$nama_ukm
		);
		$this->db->insert('tb_ukm',$data);
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$id_ukm1 = $this->get_ukm_nama($nama_ukm);
		$id_ukm= $id_ukm1->id_ukm;
		$data1= array(
			'id_ukm'=>$id_ukm,
			'id_mahasiswa'=>$id_mahasiswa,
			'id_jabatan'=>'1',
			'status'=>'aktif'
		);
		$this->db->insert('tb_fungsionaris',$data1);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/ukm'),'_self');
	}
	
	public function get_mahasiswa_user($user){
		$this->db->where('level',$user);
		$query = $this->db->get('tb_mahasiswa');
		return $query->result();
	}
	public function get_ukm_nama($nama_ukm){
		$this->db->select('id_ukm');
		$this->db->where('nama_ukm',$nama_ukm);
		$query = $this->db->get('tb_ukm');
		return $query->row();
	}

	public function update_data_ukm(){
		$data=$_POST;
		$id_ukm =  $this->input->post('id_ukm');
		$this->db->where('id_ukm',$id_ukm);
		$this->db->update('tb_ukm',$data);
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/ukm'),'_self');
	} 
  

	public function delete_data_ukm($id_ukm){
		$this->db->where('id_daftar_mhs',$id_ukm);
		$this->db->delete('tb_daftar_mhs');
		redirect(base_url('cbem/verifmhs'),'_self');
	}

	public function proses_ukm() {
		$data = $_POST;
		$this->db->where('id_ukm',$data['id_ukm']);
		$this->db->update('tb_ukm',$data);
		$query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terupdate');
			$this->session->set_flashdata('color','success');
		}else {
			$this->session->set_flashdata('pesan','data gagal Terupdate');
			$this->session->set_flashdata('color','danger');
		}
		redirect(base_url('cfungsionaris/ukm_where/'.$data['id_ukm']),'_self');
	}
}


