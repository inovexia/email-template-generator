<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appgen_actions extends CI_Controller {
	

	public function saom ()	{

		tcpdf ();
		$pdf->load->library ('custompdf');

		$dev_name = $pdf->input->post ('dev_name');

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
		$html = $pdf->load->view ('templates/saom/page1', $data, true);
		
		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		
		// reset pointer to the last page
		$pdf->lastPage();

		// ---------------------------------------------------------

		//Close and output PDF document
		$pdf->Output('telus-saom-'.$dev_name.'.pdf', 'D');

	}


	public function sbwk ()	{
		
		$response = $this->app_model->upload_image ();
		if (is_array($response)) {
			// Success
	

			tcpdf ();

			// create new PDF document
			$pdf = new TCPDF ('L', 'mm', [294, 230], true, 'UTF-8', false);		

			// set document information
			$pdf->SetCreator(PDF_CREATOR);
			$pdf->SetAuthor('TELUS Author');
			$pdf->SetTitle('TELUS SAOM');
			$pdf->SetSubject('TELUS SAOM');
			$pdf->SetKeywords('TELUS, PDF, test, guide');

			// set default header data
			$pdf->SetHeaderData('', PDF_HEADER_LOGO_WIDTH, 'telus-sbwk', PDF_HEADER_STRING);

			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

			// set margins
			$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
			$pdf->SetHeaderMargin(0);
			$pdf->SetFooterMargin(0);

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

			// add page 1 ------------------------
			$pdf->AddPage();
			// get the current page break margin
	        $bMargin = $pdf->getBreakMargin();
	        // get current auto-page-break mode
	        $auto_page_break = $pdf->getAutoPageBreak ();
	        // disable auto-page-break
	        $pdf->SetAutoPageBreak(false, 0);
	        // set background image
	        $img_file = K_PATH_IMAGES.'templates/sbwk/page1.jpg';
	        $pdf->Image($img_file, 0, 0, 294, 230, '', '', '', false, 300, '', false, false, 0);
	        // set logo image
			$upload_dir =  $this->config->item ('sbwk_dir');
			$image_logo = base_url ($upload_dir . $response['file_name']);
			$pdf->Image($image_logo, 162, 22, 36, 12, 'JPG', '', '', true, 150, '', false, false, 0, false, false, false);

	        // restore auto-page-break status
	        $pdf->SetAutoPageBreak($auto_page_break, $bMargin);
	        // set the starting point for the page content
	        $pdf->setPageMark();


			// add page 2 ------------------------
			$pdf->AddPage();
			// get the current page break margin
	        $bMargin = $pdf->getBreakMargin();
	        // get current auto-page-break mode
	        $auto_page_break = $pdf->getAutoPageBreak ();
	        // disable auto-page-break
	        $pdf->SetAutoPageBreak(false, 0);
	        // set bacground image
	        $img_file = K_PATH_IMAGES.'templates/sbwk/page2.jpg';
	        $pdf->Image($img_file, 0, 0, 294, 230, '', '', '', false, 300, '', false, false, 0);
	        // restore auto-page-break status
	        $pdf->SetAutoPageBreak($auto_page_break, $bMargin);
	        // set the starting point for the page content
	        $pdf->setPageMark();


			// Get content for the page
			//$html = $pdf->load->view ('templates//page1', $data, true);
			
			// output the HTML content
			//$pdf->writeHTML($html, true, false, true, false, '');
			
			// reset pointer to the last page
			$pdf->lastPage();

			// ---------------------------------------------------------

			//Close and output PDF document
			$pdf->Output('telus-sbwk'.'.pdf', 'D');

		} else {
			redirect ('appgen/sbwk?status=false&error='.$response);
		}
	}


	public function sbhanger ()	{
		
		$response = $this->app_model->upload_image ();
		if (is_array($response)) {
			// Success
	

			tcpdf ();

			// create new PDF document
			$pdf = new TCPDF ('P', 'mm', [108, 279], true, 'UTF-8', false);		

			// set document information
			$pdf->SetCreator(PDF_CREATOR);
			$pdf->SetAuthor('TELUS Author');
			$pdf->SetTitle('TELUS SAOM');
			$pdf->SetSubject('TELUS SAOM');
			$pdf->SetKeywords('TELUS, PDF, test, guide');

			// set default header data
			$pdf->SetHeaderData('', PDF_HEADER_LOGO_WIDTH, 'telus-sbwk', PDF_HEADER_STRING);

			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

			// set margins
			$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
			$pdf->SetHeaderMargin(0);
			$pdf->SetFooterMargin(0);

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

			// add page 1 ------------------------
			$pdf->AddPage();
			// get the current page break margin
	        $bMargin = $pdf->getBreakMargin();
	        // get current auto-page-break mode
	        $auto_page_break = $pdf->getAutoPageBreak ();
	        // disable auto-page-break
	        $pdf->SetAutoPageBreak(false, 0);
	        // set background image
	        $img_file = K_PATH_IMAGES.'templates/sbhanger/page.jpg';
	        $pdf->Image($img_file, 0, 0, 108, 279, '', '', '', false, 300, '', false, false, 0);
	        // set logo image
			$upload_dir =  $this->config->item ('sbwk_dir');
			$image_logo = base_url ($upload_dir . $response['file_name']);
			$pdf->Image($image_logo, 5, 5, 34, 12, 'JPG', '', '', false, 150, '', false, false, 0, false, false, false);

	        // restore auto-page-break status
	        $pdf->SetAutoPageBreak($auto_page_break, $bMargin);
	        // set the starting point for the page content
	        $pdf->setPageMark();	

			// ---------------------------------------------------------

			//Close and output PDF document
			$pdf->Output('telus-sbhanger'.'.pdf', 'D');

		} else {
			redirect ('appgen/sbhanger?status=false&error='.$response);
		}
	}

	public function saov ()	{
		
		$response = $this->app_model->upload_image ();
		if (is_array($response)) {

			// Success	

			tcpdf ();

			// create new PDF document
			$pdf = new TCPDF ('P', 'mm', [216, 279], true, 'UTF-8', false);		

			// set document information
			$pdf->SetCreator(PDF_CREATOR);
			$pdf->SetAuthor('TELUS Author');
			$pdf->SetTitle('TELUS SAOM');
			$pdf->SetSubject('TELUS SAOM');
			$pdf->SetKeywords('TELUS, PDF, test, guide');

			// set default header data
			$pdf->SetHeaderData('', PDF_HEADER_LOGO_WIDTH, 'telus-sbwk', PDF_HEADER_STRING);

			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

			// set margins
			$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
			$pdf->SetHeaderMargin(0);
			$pdf->SetFooterMargin(0);

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

			// add page 1 ------------------------
			$pdf->AddPage();
			// get the current page break margin
	        $bMargin = $pdf->getBreakMargin();
	        // get current auto-page-break mode
	        $auto_page_break = $pdf->getAutoPageBreak ();
	        // disable auto-page-break
	        $pdf->SetAutoPageBreak(false, 0);
	        // set background image
	        $img_file = K_PATH_IMAGES.'templates/saov/page1.jpg';
	        $pdf->Image($img_file, 0, 0, 216, 279, '', '', '', false, 300, '', false, false, 0);
	        // set logo image
			$upload_dir =  $this->config->item ('sbwk_dir');
			$image_logo = base_url ($upload_dir . $response['file_name']);
			$pdf->Image($image_logo, 17, 7, 70, 20, 'JPG', '', '', true, 150, '', false, false, 0, false, false, false);

	        // restore auto-page-break status
	        $pdf->SetAutoPageBreak($auto_page_break, $bMargin);
	        // set the starting point for the page content
	        $pdf->setPageMark();


			// add page 2 ------------------------
			$pdf->AddPage();
			// get the current page break margin
	        $bMargin = $pdf->getBreakMargin();
	        // get current auto-page-break mode
	        $auto_page_break = $pdf->getAutoPageBreak ();
	        // disable auto-page-break
	        $pdf->SetAutoPageBreak(false, 0);
	        // set bacground image
	        $img_file = K_PATH_IMAGES.'templates/saov/page2.jpg';
	        $pdf->Image($img_file, 0, 0, 216, 279, '', '', '', false, 300, '', false, false, 0);
	        // restore auto-page-break status
	        $pdf->SetAutoPageBreak($auto_page_break, $bMargin);
	        // set the starting point for the page content
	        $pdf->setPageMark();
			// ---------------------------------------------------------

			//Close and output PDF document
			$pdf->Output('telus-saov.pdf', 'D');

		} else {
			redirect ('appgen/saov?status=false&error='.$response);
		}
	}

}
