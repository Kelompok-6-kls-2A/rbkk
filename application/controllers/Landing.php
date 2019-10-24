<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Megawe';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('Front/Index');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}
}

/* End of file Landing.php */
