<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appgen_actions extends CI_Controller {
	

	/* SAOM - Normal Preivew */
	public function saom_preview () {
		$this->form_validation->set_rules ('dev_name', 'Development Name', 'required|trim');

		if ($this->form_validation->run () == true) {
			$data['dev_name'] = $this->input->post ('dev_name');
			$output = $this->load->view ('templates/saom/page1', $data, true);
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>true, 'output'=>$output )));
		} else {
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>false, 'error'=>validation_errors() )));
		}
	}

	/* SAOM - PDF Preivew */
	public function saom_pdf () {

		$this->form_validation->set_rules ('dev_name', 'Development Name', 'required|trim');

		if ($this->form_validation->run () == true) {
			$data['dev_name'] = $this->input->post ('dev_name');
			$data['pdf_string'] = $this->app_model->saom_preview ();
			$output = $this->load->view ('templates/saom/pdf', $data, true);
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>true, 'output'=>$output )));
		} else {
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>false, 'error'=>validation_errors() )));
		}
	}

	/* SBWK - Normal Preivew */
	public function sbwk_preview () {
		$this->form_validation->set_rules ('username', 'User Name', 'required');
		$this->form_validation->set_rules ('password', 'Password', 'required');

		if ($this->form_validation->run () == true) {
			$data['username'] = $this->input->post ('username');
			$data['password'] = $this->input->post ('password');
			$output = $this->load->view ('templates/sbwk/page1', $data, true);
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>true, 'output'=>$output )));
		} else {
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>false, 'error'=>validation_errors() )));
		}
	}

	/* SBWK - PDF Preivew */
	public function sbwk_pdf () {
		$this->form_validation->set_rules ('username', 'User Name', 'required');
		$this->form_validation->set_rules ('password', 'Password', 'required');

		if ($this->form_validation->run () == true) {
			$data['pdf_string'] = $this->app_model->sbwk_preview ();
			$output = $this->load->view ('templates/sbwk/pdf', $data, true);
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>true, 'output'=>$output )));
		} else {
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>false, 'error'=>validation_errors() )));
		}
	}


	/* SAOV - PDF Preivew */
	public function saov_pdf () {

		$this->form_validation->set_rules ('name', 'User Name', 'required');
		$this->form_validation->set_rules ('contact', 'Password', 'required');
		$this->form_validation->set_rules ('email', 'Password', 'required');

		if ($this->form_validation->run () == true) {
			$data['pdf_string'] = $this->app_model->saov_preview ();
			$output = $this->load->view ('templates/saov/pdf', $data, true);
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>true, 'output'=>$output )));
		} else {
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>false, 'error'=>validation_errors() )));
		}
	}


	/* SBHANGER - PDF Preivew */
	public function sbhanger_pdf () {

		$response = $this->app_model->upload_image ();
		
		if (is_array($response)) {
			$data['pdf_string'] = $this->app_model->sbhanger_preview ($response);
			$output = $this->load->view ('templates/sbhanger/pdf', $data, true);
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>true, 'output'=>$output )));
		} else {
			$this->output->set_content_type("application/json");
			$this->output->set_output(json_encode(array('status'=>false, 'error'=>$response )));
		}
	}

}
