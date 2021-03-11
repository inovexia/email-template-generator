<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appgen_actions extends CI_Controller {
	

	public function saom ()	{

		tcpdf ();
		$this->load->library ('custompdf');

		$dev_name = $this->input->post ('dev_name');

		// create new PDF document
		$pdf = new custompdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('TELUS Author');
		$pdf->SetTitle('TELUS SAOM');
		$pdf->SetSubject('TELUS SAOM');
		$pdf->SetKeywords('TELUS, PDF, test, guide');

		// set default header data
		$pdf->SetHeaderData('', PDF_HEADER_LOGO_WIDTH, 'telus-saom-'.$dev_name, PDF_HEADER_STRING);

		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
		    require_once(dirname(__FILE__).'/lang/eng.php');
		    $pdf->setLanguageArray($l);
		}

		// ---------------------------------------------------------

		// set font
		$pdf->SetFont('dejavusans', '', 10);

		// add a page
		$pdf->AddPage();

		// Get content for the page
		$data['dev_name'] = $dev_name;
		$html = $this->load->view ('templates/saom/page1', $data, true);
		
		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		
		// reset pointer to the last page
		$pdf->lastPage();

		// ---------------------------------------------------------

		//Close and output PDF document
		$pdf->Output('telus-saom-'.$dev_name.'.pdf', 'D');

	}

}
