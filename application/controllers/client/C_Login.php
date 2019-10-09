<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	var $API="";

	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		
	}
	
	
	public function index()
	{
		$this->load->view('Login/Login');
		
	}

}

/* End of file C_Login.php */
