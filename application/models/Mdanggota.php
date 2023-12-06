<?php

class Mdanggota extends CI_Model{
    public function get_daftar_anggota(){
		return $this->db->get('tb_daftar_anggota')->result();
	}
	public function get_daftar_anggota_id($id_daftar_anggota){
		return $this->db->get_where('tb_daftar_anggota',['id_daftar_anggota'=>$id_daftar_anggota])->row();
	}
    public function get_devisi_id($id_devisi) {
		return $this->db->get_where('tb_devisi',['id_devisi',$id_devisi])->row();
	}

	public function proses_verif_berhasil(){
		$data = [
			'id_mahasiswa'=>$this->input->post('id_mahasiswa'),
			'id_devisi'=>$this->input->post('id_devisi'),
			'status'=>'aktif'
		];
		$this->db->insert('tb_anggota_ukm',$data);
		$result = $this->get_devisi_id($data['id_devisi']);
		$this->proseshapus($this->input->post('id_daftar_anggota'),$result->id_ukm);
	}
	
	public function proseshapus($id_daftar_anggota,$id_ukm){
		$this->db->where('id_daftar_anggota',$id_daftar_anggota);
		$this->db->delete('tb_daftar_anggota');
		redirect(base_url('cfungsionaris/verif_anggota/').$id_ukm,'_self');
	}

	public function daftar_fungsionaris() {
        $data=$_POST;
            $this->db->insert('tb_daftar_fungsionaris',$data);
            $this->session->set_flashdata('pesan','Data Sudah Disimpan...');
			redirect('cmahasiswa/dashboard','refresh');
	}
}