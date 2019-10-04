<?php

defined('BASEPATH') or exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');

class User extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		
	}

	public function index_get()
	{ 
		$response = $this->M_user->getAll();
		$this->response($response);
	}
}
/** End of file User.php **/
