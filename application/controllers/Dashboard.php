<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
