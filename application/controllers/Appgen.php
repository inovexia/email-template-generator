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
		$data['dev_name'] = '<span style="color:red">{development_name}</span>';
		$data['apanel'] = $this->load->view ('apanel/saom', $data, true);
		//$data['script'] = $this->load->view ('scripts/saom', $data, true);
		$this->load->view ('header', $data);
		if ($this->input->post ('dev_name')) {
			echo $data['dev_name'] = $this->input->post ('dev_name');
			$this->load->view ('templates/saom/preview', $data);
		} else {
			$this->load->view ('templates/saom/page1', $data);
		}
		$this->load->view ('footer', $data);
	}

	public function sbwk ()	{

		$data['page_title'] = 'SBWK';
		$data['apanel'] = $this->load->view ('apanel/sbwk', $data, true);
		$this->load->view ('header', $data);
		$this->load->view ('templates/sbwk/page1', '');
		$this->load->view ('footer', $data);
	}

	public function sbhanger ()	{

		$data['page_title'] = 'SB Hanger';
		$data['apanel'] = $this->load->view ('apanel/sbhanger', $data, true);
		$this->load->view ('header', $data);
		$this->load->view ('templates/sbhanger/page1', '');
		$this->load->view ('footer', $data);
	}

	public function saov ()	{

		$data['page_title'] = 'Smart Apartment Overview';
		$data['apanel'] = $this->load->view ('apanel/saov', $data, true);
		$this->load->view ('header', $data);
		$this->load->view ('templates/saov/page', '');
		$this->load->view ('footer', $data);
	}

}
