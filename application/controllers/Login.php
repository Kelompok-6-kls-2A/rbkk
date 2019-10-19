<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	var $API = "";


	public function __construct()
	{
		parent::__construct();
		//Do your magic here

	}


	public function index()
	{
		redirect('auth');
	}
}

/* End of file C_Login.php */
