<?php

/**
* 
*/
class Auth extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	    $this->load->helper('url'); 
	}

	public function login()
	{
		$data['yield'] = 'auth/login';
		$this->resources->mainLayout($data);
	}

	public function register()
	{
		$data['yield'] = 'auth/register';
		$this->resources->mainLayout($data);
	}
}