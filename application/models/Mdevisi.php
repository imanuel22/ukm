<?php 
class mdevisi extends CI_Model{
    public function get_devisi($id_ukm){
        return $this->db->get_where('tb_devisi',['id_ukm'=>$id_ukm])->result();
    }
    public function get_devisi_id($id_devisi){
        return $this->db->get_where('tb_devisi',['id_devisi'=>$id_devisi])->row();
    }
    public function proses_devisi()  {
        $data = [
			'id_devisi'=>$this->input->post('id_devisi'),
			'nama_devisi'=>$this->input->post('nama_devisi'),
			'id_ukm'=>$this->input->post('id_ukm'),
		];
		$id_devisi = $data['id_devisi'];
		if(empty($id_devisi)){
			$this->db->insert('tb_devisi',$data);
			$pesan = 'data berhasil Tertambah';
			$color = 'success';
		}else{
			$update=array(
				'id_devisi'=>$id_devisi
			);
			$this->db->where($update);
			$this->db->update('tb_devisi',$data);
			$pesan='Data sudah diedit';
			$color='success';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('cfungsionaris/devisi/').$data['id_ukm'],'_self');
	}
	public function edit_devisi($id_devisi){
		$query = $this->db->get_where('tb_devisi',['id_devisi'=>$id_devisi]);
		if($query->num_rows()>0)
		{
			$data=$query->row();
			echo "<script>$('#id_devisi').val('".$data->id_devisi."')</script>";
			echo "<script>$('#nama_devisi').val('".$data->nama_devisi."')</script>";

		}	
	}

    public function delete_devisi($id_ukm,$id_devisi) {
        $this->db->where('id_devisi',$id_devisi);
        $this->db->delete('tb_devisi');
        $query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terhapus');
			$this->session->set_flashdata('color','success');
		}
		redirect(base_url('cfungsionaris/devisi/').$id_ukm,'_self');
    }
}