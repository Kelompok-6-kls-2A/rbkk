<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_User extends CI_Controller
{

	var $API = "";
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->API = "http://localhost/rbkk";
	}


	public function index()
	{
		$data['users'] = json_decode($this->curl->simple_get($this->API . '/a_user'));

		$data['title'] = 'User';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('User/Index');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}
}

/* End of file User.php */
