<?php

/**
* 
*/
class Resources extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function mainLayout($data)
	{
		if (!empty($data)) {
			$this->load->view('Resources/layouts/main', $data);
		} else {
			// redirect('controller/method', 'refresh');
			echo 'ERROR';
		}
	}
}