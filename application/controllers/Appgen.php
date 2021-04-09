<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Appgen extends CI_Controller {
	
	public function index () {
		$data['page_title'] = 'Select Template';
		$data['apanel'] = $this->load->view ('apanel/main', $data, true);
		$data['script'] = $this->load->view ('scripts/main', $data, true);
		$this->load->view ('header', $data);
		$this->load->view ('index', $data);
		$this->load->view ('footer', $data);
	}

	public function saom ()	{

		$data['page_title'] = 'Select Template';
		$data['apanel'] = $this->load->view ('apanel/saom', $data, true);
		$data['dev_name'] = '{development_name}';

		$data['script'] = $this->load->view ('scripts/saom', $data, true);
		$this->load->view ('header', $data);
		$this->load->view ('templates/saom/page1', $data);
		$this->load->view ('footer', $data);

	}

	public function sbwk ()	{

		$data['page_title'] = 'SBWK';
		$data['apanel'] = $this->load->view ('apanel/sbwk', $data, true);
		$data['script'] = $this->load->view ('scripts/sbwk', $data, true);

		$data['username'] = '';
		$data['password'] = '';

		$this->load->view ('header', $data);
		$this->load->view ('templates/sbwk/page1', $data);
		$this->load->view ('footer', $data);
	}


	public function saov ()	{

		$data['page_title'] = 'Smart Apartment Overview';
		$data['apanel'] = $this->load->view ('apanel/saov', $data, true);
		$data['script'] = $this->load->view ('scripts/saov', $data, true);

		$this->load->view ('header', $data);
		$this->load->view ('templates/saov/page', '');
		$this->load->view ('footer', $data);

	}

	public function sbhanger ()	{

		$data['page_title'] = 'SB Hanger';
		$data['apanel'] = $this->load->view ('apanel/sbhanger', $data, true);
		$data['script'] = $this->load->view ('scripts/sbhanger', $data, true);

		$this->load->view ('header', $data);
		$this->load->view ('templates/sbhanger/page1', '');
		$this->load->view ('footer', $data);
	}


}
