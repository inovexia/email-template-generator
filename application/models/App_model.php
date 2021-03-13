<?php

class App_model extends CI_Model {

	public function upload_image () {
		
		$this->load->helper('directory');
		$this->load->helper('file');
		
		// Set upload path
		$upload_dir =  $this->config->item ('sbwk_dir');
		
		if ( ! is_dir ($upload_dir) ) {
			mkdir ($upload_dir, 0777, true);
		}
		
		// upload parameters
		$options['upload_path'] 	= $upload_dir;
		$options['allowed_types'] 	= 'gif|jpg';
		$options['max_size']		= MAX_FILE_SIZE;
		$options['overwrite']		= true;
		
		// load upload library
		$this->load->library ('upload', $options); 		
		
		if ( ! $this->upload->do_upload () ) {
			$response = $this->upload->display_errors ();
		} else {   
			$upload_data = $this->upload->data();
			$file_name = $upload_data['file_name'];
			$file_path = $upload_dir . $file_name;

			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_path ;
			$config['create_thumb'] = false; 
			$config['maintain_ratio'] = true;
			$config['width']	 	= 240;
			$config['height']		= 120;			
			$this->load->library('image_lib', $config);
		
			$this->image_lib->resize();
			$response = $upload_data;
		}
		
		return $response;;
	}
}