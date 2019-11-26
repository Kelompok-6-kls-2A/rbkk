<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		// $this->load->model('client/M_pekerjaan', 'pekerjaan');
		// $this->load->model('client/M_user', 'user');
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('Dashboard/Index');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}
}

/* End of file C_Dashboard.php */
