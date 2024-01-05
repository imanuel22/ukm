<?php
class Mprodi extends CI_Model{
	//mengambila data ke view prodi
    public function get_prodi() {
		return $this->db->get('prodi')->result();
	}
	//mengambila data ke tb_prodi dari id_jurusan = parameter dan level = admin

	public function get_prodi_id_jurusan($id_jurusan){
		return $this->db->get_where('tb_prodi',['id_jurusan'=>$id_jurusan])->result();
	}
	//function buat insert + update data 
	public function proses_prodi(){
		$data = $_POST;
		$id_prodi = $data['id_prodi'];
		//cek jika tidak ada id_prodi lakukan insert
		if(empty($id_prodi)){
			//menambahkan data ke tb_prodi
			$this->db->insert('tb_prodi',$data);
		$pesan='Data sudah disimpan';
		$color='success';
			//cek apakah ada foto yang ingin di ganti
		}else{
			//update tb_prodi dengan id_prodi = $id_prodi
			$this->db->where('id_prodi',$id_prodi);
			$this->db->update('tb_prodi',$data);
			$pesan='Data sudah diedit';
			$color='success';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('csuperadmin/prodi'),'_self');
	}
	//function buat mengisi data ke halaman form
	public function edit_prodi($id_prodi){
		//mengambil data ke tb_prodi dari id_prodi sama dengan parameter
		$query = $this->db->get_where('tb_prodi',['id_prodi'=>$id_prodi]);
		if($query->num_rows()>0)
		{
			//ajax untuk mengirim data ke form byid
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
	
	//function buat delete 
	public function delete_prodi($id_prodi){
		//delete dari tb_prodi dengan id_prodi = $id_prodi
		$this->db->where('id_prodi',$id_prodi);
		$this->db->delete('tb_prodi');
		$this->session->set_flashdata(['pesan'=>'data berhasil Terhapus','color'=>'success']);
		redirect(base_url('csuperadmin/prodi'),'_self');
	}
}