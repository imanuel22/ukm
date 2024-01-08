<?php
class Mukm extends CI_Model{
	//mengambila data ke view masterukm
    public function get_masterukm(){
		$query = $this->db->get('masterukm');
		return $query->result();
	}
	//mengambila data ke tb_ukm

    public function get_ukm(){
		$query = $this->db->get('tb_ukm');
		return $query->result();
	}
	//mengambila data ke tb_ukm dari id_ukm = parameter

	public function get_ukm_id($id_ukm){
        $this->db->where('id_ukm',$id_ukm);
        $query = $this->db->get('tb_ukm');
        return $query->row();
    }
	//mengambila data ke tb_ukm dari nama_ukm = parameter
	public function get_ukm_nama($nama_ukm){
		$this->db->select('id_ukm');
		$this->db->where('nama_ukm',$nama_ukm);
		$query = $this->db->get('tb_ukm');
		return $query->row();
	}

	
	//function buat insert + update data 
	public function proses_ukm(){
		$data= [
			'id_ukm' => $this->input->post('id_ukm'),
			'nama_ukm'=>$this->input->post('nama_ukm'),
			'deskripsi'=>$this->input->post('deskripsi'),
			'peraturan'=>$this->input->post('peraturan'),
			'tgl_buat'=>date('Y-m-d',time()),
		];
		$id_ukm = $data['id_ukm'];
		//cek jika tidak ada id_mahasiswa lakukan insert
		if(empty($id_ukm)){
			//jika deskripsi & peraturan kosong set lorem
			if(empty($data['deskripsi'] && $data['peraturan'])){
				$data=[
				'peraturan'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. A suscipit quod tempora ratione, laborum numquam ullam mollitia magnam sunt voluptas officiis molestiae adipisci? Aliquid assumenda harum repudiandae sequi cupiditate, minus laborum maxime modi, fugiat exercitationem porro eveniet pariatur saepe dicta molestiae? Voluptas ab nobis mollitia, beatae nam animi, aspernatur maxime at incidunt iste assumenda eos enim itaque accusamus error tenetur minus. Nisi voluptatem libero provident minima accusamus explicabo maxime esse est similique ratione odio optio possimus animi iusto, cumque quod ipsam ab distinctio enim eius cupiditate. Ab cum totam nisi explicabo neque unde, accusantium odit ipsa sequi ipsam ex. Magnam.',
				'deskripsi'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. A suscipit quod tempora ratione, laborum numquam ullam mollitia magnam sunt voluptas officiis molestiae adipisci? Aliquid assumenda harum repudiandae sequi cupiditate, minus laborum maxime modi, fugiat exercitationem porro eveniet pariatur saepe dicta molestiae? Voluptas ab nobis mollitia, beatae nam animi, aspernatur maxime at incidunt iste assumenda eos enim itaque accusamus error tenetur minus. Nisi voluptatem libero provident minima accusamus explicabo maxime esse est similique ratione odio optio possimus animi iusto, cumque quod ipsam ab distinctio enim eius cupiditate. Ab cum totam nisi explicabo neque unde, accusantium odit ipsa sequi ipsam ex. Magnam.',
				];
			}
			//upload img
			$file_name='img-'.$data['nama_ukm'];
			$config = [
				'upload_path'=> 'assets/uploads/ukm',
				'allowed_types'=>'jpg|jpeg|png',
				'max_size'=>4096000,	
				'file_name'=>$file_name,
			];
			$this->load->library('upload',$config);
			$this->upload->do_upload('img_mahasiswa');
			$data['img_ukm']=$this->upload->data('file_name');
			
			//insert ukm
			$this->db->insert('tb_ukm',$data);
			//insert jabatan
			$data_ukm = $this->get_ukm_nama($data['nama_ukm']);
			$id_ukm= $data_ukm->id_ukm;	
			$data1 = [
				'id_ukm'=>$id_ukm,
				'nama_jabatan'=>'ketua fungsionaris',
				'deskripsi_jabatan'=>'ketua fungsionaris'
			];
			$this->db->insert('tb_jabatan',$data1);
			//insert fungsionaris
			$data_jabatan = $this->db->get_where('tb_jabatan',['id_ukm'=>$id_ukm,'nama_jabatan'=>'ketua fungsionaris'])->row();
			$id_jabatan = $data_jabatan->id_jabatan;
			$id_mahasiswa = $this->input->post('id_mahasiswa');
			$data2= [
				'id_mahasiswa'=>$id_mahasiswa,
				'id_jabatan'=>$id_jabatan,
				'status'=>'aktif',
			];
			$this->db->insert('tb_fungsionaris',$data2);
			
		}else{
			if(!empty($_FILES['img_ukm']['name'])){
				$file_name='ukm-'.$data['nama_ukm'];
				$config = [
					'upload_path'=> 'assets/uploads/ukm',
					'allowed_types'=>'jpg|jpeg|png',
					'max_size'=>4096000,	
					'file_name'=>$file_name,
				];
				$this->load->library('upload',$config);
				$target_file ='assets/uploads/ukm/'.$this->input->post('img_ukm_old');
				unlink($target_file);
				$this->upload->do_upload('img_ukm');
				$data['img_ukm']=$this->upload->data('file_name');
			}else{
				$data['img_ukm']=$this->input->post('img_ukm_old');
			}
			$update=array(
				'id_ukm'=>$id_ukm,
			);
			$this->db->where($update);
			$this->db->update('tb_ukm',$data);
			$id_mahasiswa = $this->input->post('id_mahasiswa');
			$data_jabatan = $this->db->get_where('tb_jabatan',['id_ukm'=>$id_ukm,'nama_jabatan'=>'ketua fungsionaris'])->row();
			$id_jabatan = $data_jabatan->id_jabatan;
			$data_fungsionaris = $this->db->get_where('tb_fungsionaris',['id_jabatan'=>$id_jabatan])->row();
			if($data_fungsionaris->id_mahasiswa != $id_mahasiswa){
				$data1=['id_mahasiswa'=>$id_mahasiswa];
				$this->db->where('id_fungsionaris',$data_fungsionaris->id_fungsionaris);
				$this->db->update('tb_fungsionaris',$data1);
			}
			$pesan='Data sudah diedit';
			$color='warning';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('cbem/ukm'),'_self');
	}

	public function proses_ukmf(){
		$data = $_POST;
		$this->db->where('id_ukm',$data['id_ukm']);
		$this->db->update('tb_ukm',$data);
		$pesan='Data sudah diedit';
		$color='warning';
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('cfungsionaris/ukm_where/').$data['id_ukm'],'_self');
	}

	
	public function edit_ukm($id_ukm){
		$query = $this->db->get_where('masterukm',['id_ukm'=>$id_ukm]);
		if($query->num_rows()>0)
		{
			$data=$query->row();
			echo "<script>$('#id_ukm').val('".$data->id_ukm."')</script>";
			echo "<script>$('#deskripsi').val('".$data->deskripsi."')</script>";
			echo "<script>$('#peraturan').val('".$data->peraturan."')</script>";
			echo "<script>$('#nama_ukm').val('".$data->nama_ukm."')</script>";
			echo "<script>$('#id_mahasiswa').val('".$data->id_mahasiswa."')</script>";
			echo "<script>$('#img_ukm_old').val('".$data->img_ukm."')</script>";
			echo "<script>$('#img_ukms').attr('src','".base_url()."assets/uploads/ukm/".$data->img_ukm."')</script>";
		}	
	} 
  

	public function delete_ukm($id_ukm){
		$this->db->where('id_ukm',$id_ukm);
		$this->db->delete('tb_ukm');
		redirect(base_url('cbem/ukm'),'_self');
	}

	public function get_card() {
		return $this->db->get('tb_ukm')->result();
	}
}


