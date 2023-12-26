<?php 
class Mproker extends CI_Model{
    public function get_proker($id_ukm) {
        return $this->db->get_where('tb_proker',['id_ukm'=>$id_ukm])->result();
    }
    public function get_proker_id($id_proker) {
        return $this->db->get_where('tb_proker',['id_proker'=>$id_proker])->row();
    }
    public function proses_proker()  {
        $data = [
			'id_proker'=>$this->input->post('id_proker'),
			'nama_proker'=>$this->input->post('nama_proker'),
			'deskripsi'=>$this->input->post('deskripsi'),
			'peraturan'=>$this->input->post('peraturan'),
			'id_ukm'=>$this->input->post('id_ukm'),
		];
		$id_proker = $data['id_proker'];
		if(empty($id_proker)){
			$this->db->insert('tb_proker',$data);
			$pesan = 'data berhasil Tertambah';
			$color = 'success';
		}else{
			$update=array(
				'id_proker'=>$id_proker
			);
			$this->db->where($update);
			$this->db->update('tb_proker',$data);
			$pesan='Data sudah diedit';
			$color='success';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('cfungsionaris/proker/').$data['id_ukm'],'_self');
	}
	public function edit_proker($id_proker){
		$query = $this->db->get_where('tb_proker',['id_proker'=>$id_proker]);
		if($query->num_rows()>0)
		{
			$data=$query->row();
			echo "<script>$('#id_proker').val('".$data->id_proker."')</script>";
			echo "<script>$('#nama_proker').val('".$data->nama_proker."')</script>";
			echo "<script>$('#deskripsi').val('".$data->deskripsi."')</script>";
			echo "<script>$('#peraturan').val('".$data->peraturan."')</script>";

		}	
	}

    public function delete_proker($id_ukm,$id_proker) {
        $this->db->where('id_proker',$id_proker);
        $this->db->delete('tb_proker');
        $query = $this->db->affected_rows();
        if($query>0){
            $this->session->set_flashdata('pesan','data berhasil Tersimpan');
            $this->session->set_flashdata('color','success');
        }
        redirect(base_url('cfungsionaris/proker/').$id_ukm,'_self');
    }
}