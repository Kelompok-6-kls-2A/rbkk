<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pekerjaan extends REST_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Pekerjaan', 'pekerjaan');
	}

	public function index_get()
	{ 
		$id = $this->get('id_pekerjaan');
		if ($id === null) {
			# code...
			 
		} else {
			# code...
		}
		
	}
}
/** End of file Pekerjaan.php **/