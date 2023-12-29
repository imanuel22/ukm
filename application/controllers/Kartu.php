<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kartu extends CI_Controller{
    function printcardf($id_mahasiswa,$id_ukm)
		{
			$this->load->model('mcard');
			$data1['data_cardF']=$this->mcard->card_fungsionaris_ukm($id_mahasiswa,$id_ukm);

			require_once(APPPATH . 'libraries/dompdf/autoload.inc.php');
			$pdf = new Dompdf\Dompdf();
			$pdf->setPaper(array(0,0,400 ,207 ), 'portrait');
			$pdf->set_option('isRemoteEnabled', TRUE);
			$pdf->set_option('isHtml5ParserEnabled', true);
			$pdf->set_option('isPhpEnabled', true);
			$pdf->set_option('isFontSubsettingEnabled', true);
			
			$pdf->loadHtml($this->load->view('mahasiswa/cetakidf',$data1, true));
			$pdf->render();
			$pdf->stream('ID Card UKM', ['Attachment' => false]);	
            
		}
		function printcarda($id_mahasiswa,$id_ukm)
		{
			$this->load->model('mcard');
			$data1['data_cardA']=$this->mcard->card_anggotaUKM_ukm($id_mahasiswa,$id_ukm);

			require_once(APPPATH . 'libraries/dompdf/autoload.inc.php');
			$pdf = new Dompdf\Dompdf();
			$pdf->setPaper(array(0,0,400 ,207 ), 'portrait');
			$pdf->set_option('isRemoteEnabled', TRUE);
			$pdf->set_option('isHtml5ParserEnabled', true);
			$pdf->set_option('isPhpEnabled', true);
			$pdf->set_option('isFontSubsettingEnabled', true);
			
			$pdf->loadHtml($this->load->view('mahasiswa/cetakida',$data1, true));
			$pdf->render();
			$pdf->stream('ID Card UKM', ['Attachment' => false]);	
            
		}
	}
?>