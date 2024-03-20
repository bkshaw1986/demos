<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;

class HtmlPdfHome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load Dompdf library
        //$this->load->library('dompdf');
    }

    public function generate_pdf() {
        // HTML content to convert to PDF
        $html = '<!DOCTYPE html>
        <html>
        <head>
            <title>HTML to PDF</title>
        </head>
        <body>
            <h1>Hello, world!</h1>
            <p>This is a simple HTML to PDF conversion using CodeIgniter and Dompdf.</p>
        </body>
        </html>';

        // Load HTML to Dompdf
        $this->dompdf->loadHtml($html);

        // Set paper size and orientation
        $this->dompdf->setPaper('A4', 'portrait');

        // Render PDF (generate)
        $this->dompdf->render();

        // Output PDF to browser
        $this->dompdf->stream("output.pdf", array("Attachment" => false));
    }

	public function index()	{
		// reference the Dompdf namespace
//use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
		//$this->load->view('includes/CommonHeader');
		$this->load->view('htmlpdf/HtmlPdfHome');
		//$this->load->view('includes/CommonFooter');
	}
}

?>