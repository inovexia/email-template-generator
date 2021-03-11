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
		$this->load->view ('header', $data);
		$this->load->view ('templates/saom/page1', '');
		$this->load->view ('footer', $data);
	}

}
