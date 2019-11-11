<?php

class UserController extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('Controllerku');
	}

	public function index()
	{
		# code...0
		My_Controller::get();
		Controllerku::get();
	}
}
