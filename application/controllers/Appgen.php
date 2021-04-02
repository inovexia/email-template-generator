<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Appgen extends CI_Controller {
	
	public function index () {
		$data['page_title'] = 'Select Template';
		$data['apanel'] = $this->load->view ('apanel/main', $data, true);
		$this->load->view ('header', $data);
		$this->load->view ('index', $data);
		$this->load->view ('footer', $data);
	}

	public function saom ()	{

		$data['page_title'] = 'Select Template';
		$data['apanel'] = $this->load->view ('apanel/saom', $data, true);

		$this->form_validation->set_rules ('dev_name', 'Development Name', 'required|trim');
		if ($this->form_validation->run () == true) {
			$data['dev_name'] = $this->input->post ('dev_name');
			$this->load->view ('header', $data);
			$this->load->view ('templates/saom/preview', $data);
			$this->load->view ('footer', $data);
		} else {
			$data['dev_name'] = '<span style="color:red">{development_name}</span>';
			$this->load->view ('header', $data);
			$this->load->view ('templates/saom/page1', $data);
			$this->load->view ('footer', $data);
		}

	}

	public function sbwk ()	{

		$data['page_title'] = 'SBWK';
		$data['apanel'] = $this->load->view ('apanel/sbwk', $data, true);

		$this->form_validation->set_rules ('username', 'User Name', 'required');
		$this->form_validation->set_rules ('password', 'Password', 'required');

		if ($this->form_validation->run () == true) {
			$pdf_string = $this->app_model->sbwk_preview ();
			$data['pdf_string'] = $pdf_string;
			if (is_string($pdf_string)) {
				$data['script'] = $this->load->view ('scripts/sbwk', $data, true);
				$this->load->view ('header', $data);
				$this->load->view ('templates/sbwk/preview', $data);
				$this->load->view ('footer', $data);
			} else {
				$data['script'] = $this->load->view ('scripts/sbwk', $data, true);
				$this->load->view ('header', $data);
				$this->load->view ('templates/sbwk/page1', $data);
				$this->load->view ('footer', $data);				
			}
		} else {
			$data['script'] = $this->load->view ('scripts/sbwk', $data, true);
			$this->load->view ('header', $data);
			$this->load->view ('templates/sbwk/page1', '');
			$this->load->view ('footer', $data);
		}
	}

	public function saov ()	{

		$data['page_title'] = 'Smart Apartment Overview';
		$data['apanel'] = $this->load->view ('apanel/saov', $data, true);

		$this->form_validation->set_rules ('name', 'User Name', 'required');
		$this->form_validation->set_rules ('contact', 'Password', 'required');
		$this->form_validation->set_rules ('email', 'Password', 'required');

		if ($this->form_validation->run () == true) {
			$pdf_string = $this->app_model->saov_preview ();
			$data['pdf_string'] = $pdf_string;
			if (is_string($pdf_string)) {
				$data['script'] = $this->load->view ('scripts/sbwk', $data, true);
				$this->load->view ('header', $data);
				$this->load->view ('templates/saov/preview', $data);
				$this->load->view ('footer', $data);
			} else {
				$data['script'] = $this->load->view ('scripts/sbwk', $data, true);
				$this->load->view ('header', $data);
				$this->load->view ('templates/saov/page', $data);
				$this->load->view ('footer', $data);
			}
		} else {
			$data['script'] = $this->load->view ('scripts/sbwk', $data, true);
			$this->load->view ('header', $data);
			$this->load->view ('templates/saov/page', '');
			$this->load->view ('footer', $data);
		}

	}

	public function sbhanger ()	{

		$data['page_title'] = 'SB Hanger';
		$data['apanel'] = $this->load->view ('apanel/sbhanger', $data, true);
			$pdf_string = $this->app_model->sbhanger_preview ();
			if (is_string($pdf_string)) {
				$data['pdf_string'] = $pdf_string;
				$data['script'] = $this->load->view ('scripts/sbwk', $data, true);
				$this->load->view ('header', $data);
				$this->load->view ('templates/sbhanger/preview', $data);
				$this->load->view ('footer', $data);
			} else {
				$data['script'] = $this->load->view ('scripts/sbwk', $data, true);
				$this->load->view ('header', $data);
				$this->load->view ('templates/sbhanger/page1', '');
				$this->load->view ('footer', $data);				
			}
	}


}
