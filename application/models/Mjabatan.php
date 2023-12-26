<?php 
class Mjabatan extends CI_Model{
    public function get_jabatan($id_ukm) {  
        return $this->db->get_where('tb_jabatan',['id_ukm'=>$id_ukm])->result();
    }
    public function get_jabatan_id($id_jabatan) {
        return $this->db->get_where('tb_jabatan',['id_jabatan'=>$id_jabatan])->row();
    }
    public function proses_jabatan()  {
        $data = [
			'id_jabatan'=>$this->input->post('id_jabatan'),
			'nama_jabatan'=>$this->input->post('nama_jabatan'),
			'deskripsi_jabatan'=>$this->input->post('deskripsi_jabatan'),
			'id_ukm'=>$this->input->post('id_ukm'),
		];
		$id_jabatan = $data['id_jabatan'];
		if(empty($id_jabatan)){
			$this->db->insert('tb_jabatan',$data);
			$pesan = 'data berhasil Tertambah';
			$color = 'success';
		}else{
			$update=array(
				'id_jabatan'=>$id_jabatan
			);
			$this->db->where($update);
			$this->db->update('tb_jabatan',$data);
			$pesan='Data sudah diedit';
			$color='success';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('cfungsionaris/jabatan/').$data['id_ukm'],'_self');
	}
	public function edit_jabatan($id_jabatan){
		$query = $this->db->get_where('tb_jabatan',['id_jabatan'=>$id_jabatan]);
		if($query->num_rows()>0)
		{
			$data=$query->row();
			echo "<script>$('#id_jabatan').val('".$data->id_jabatan."')</script>";
			echo "<script>$('#nama_jabatan').val('".$data->nama_jabatan."')</script>";
			echo "<script>$('#deskripsi_jabatan').val('".$data->deskripsi_jabatan."')</script>";

		}	
	}

    public function delete_jabatan($id_ukm,$id_jabatan) {
        $this->db->where('id_jabatan',$id_jabatan);
        $this->db->delete('tb_jabatan');
        $query = $this->db->affected_rows();
        if($query>0){
            $this->session->set_flashdata('pesan','data berhasil Tersimpan');
            $this->session->set_flashdata('color','success');
        }
        redirect(base_url('cfungsionaris/jabatan/').$id_ukm,'_self');
    }
}