<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    function cetakpdf()
		{
			$data['hasil']=$this->mprodi->tampildata();

			require_once(APPPATH . 'libraries/dompdf/autoload.inc.php');
			$pdf = new Dompdf\Dompdf();
			$pdf->setPaper('A6', 'landscape');
			$pdf->set_option('isRemoteEnabled', TRUE);
			$pdf->set_option('isHtml5ParserEnabled', true);
			$pdf->set_option('isPhpEnabled', true);
			$pdf->set_option('isFontSubsettingEnabled', true);
			
			$pdf->loadHtml($this->load->view('cetakID',$data, true));
			$pdf->render();
			$pdf->stream('ID Card UKM', ['Attachment' => false]);	
            
		}
?>