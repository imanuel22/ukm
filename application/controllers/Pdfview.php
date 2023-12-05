<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfview extends CI_Controller {
    public function index()
    {
                        // Load pdfgenerator library
                        $this->load->library('pdfgenerator');

                        // Set data for the view
                        $this->data['title_pdf'] = 'Nota Pesanan';
        
                        // Set filename for the PDF when downloaded
                        $file_pdf = 'Nota Pesanan';
        
                        // Set paper size
                        $paper = 'A4';
        
                        // Set paper orientation (portrait / landscape)
                        $orientation = "portrait";
        
                        // Load the 'Cetaknota' view and store the HTML content
                        $html = $this->load->view('laporan_pdf', $this->data, true);
        
                        // Generate PDF using pdfgenerator library
                        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}