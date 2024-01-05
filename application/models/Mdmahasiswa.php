<?php
class Mdmahasiswa extends CI_Model{
	//mengambila data ke view daftar_mahasiswa
    public function get_daftafmhs(){
		return $this->db->get('daftar_mahasiswa')->result();
	}
	//mengambila data ke view daftar_mahasiswa dari id_daftar_mahasiswa sama dengan parameter	
	public function get_daftarmhs_id($id_daftar_mahasiswa){
		return $this->db->get_where('daftar_mahasiswa',['id_daftar_mahasiswa'=>$id_daftar_mahasiswa])->row();
	}
	//mengambila data ke view daftar_mahasiswa dari nim sama dengan parameter	
    public function get_daftarmhs_nim($nim) {
		return $this->db->get_where('daftar_mahasiswa',['nim',$nim])->row();
	}

	public function proses_verif_berhasil(){
		$data=[
			'nim'=>$this->input->post('nim'),
			'nama_mahasiswa'=>$this->input->post('nama_mahasiswa'),
			'angkatan'=>$this->input->post('angkatan'),
			'password'=>$this->input->post('password'),
			'no_telp'=>$this->input->post('no_telp'),
			'level'=>'user',
			'img_mahasiswa'=>$this->input->post('img_mahasiswa'),
			'status'=>'aktif',
			'id_prodi'=>$this->input->post('id_prodi'),
		];
		//menambah data ke tb_mahasiswa
		$this->db->insert('tb_mahasiswa',$data);
		$query = $this->get_daftarmhs_nim($data['nim']);
		$id_daftar_mahasiswa1 = $query->id_daftar_mahasiswa;
		//memanggil fungsi hapus
		$this->proseshapus($id_daftar_mahasiswa1);
	}

	//function buat mengisi data ke halaman form
	public function verifdatamahasiswa($id_daftar_mahasiswa){
		//mengambil data ke view daftar_mahasiswa dari id_daftar_mahasiswa sama dengan parameter
		$query = $this->db->get_where('daftar_mahasiswa',['id_daftar_mahasiswa'=>$id_daftar_mahasiswa]);
		if($query->num_rows()>0)
		{
			$data=$query->row();
			//ajax untuk mengirim data ke form byid
			echo "<script>$('#id_daftar_mahasiswa').val('".$data->id_daftar_mahasiswa."')</script>";
			echo "<script>$('#nim').val('".$data->nim."')</script>";
			echo "<script>$('#nama_mahasiswa').val('".$data->nama_mahasiswa."')</script>";
			echo "<script>$('#angkatan').val('".$data->angkatan."')</script>";
			echo "<script>$('#password').val('".$data->password."')</script>";
			echo "<script>$('#no_telp').val('".$data->no_telp."')</script>";
			echo "<script>$('#img_mahasiswa').val('".$data->img_mahasiswa."')</script>";
			echo "<script>$('#id_prodi').val('".$data->id_prodi."')</script>";
			echo "<script>$('#img_mahasiswas').attr('src','".base_url()."assets/uploads/img_mahasiswa/".$data->img_mahasiswa."')</script>";
			echo "<script>$('#img_ktms').attr('src','".base_url()."assets/uploads/img_ktm/".$data->img_ktm."')</script>";
			echo "<script>$('#nama_prodi').val('".$data->nama_prodi."')</script>";
			echo "<script>$('#nama_jurusan').val('".$data->nama_jurusan."')</script>";
		}	
	}
	
	public function proseshapus($id_daftar_mahasiswa){
		//menghapus data tb_daftar_mahasiswa dengan id_daftar_mahasiswa = $id_daftar_mahasiswa
		$this->db->where('id_daftar_mahasiswa',$id_daftar_mahasiswa);
		$this->db->delete('tb_daftar_mahasiswa');
		redirect(base_url('cbem/verif_mahasiswa'),'_self');
	}

}
