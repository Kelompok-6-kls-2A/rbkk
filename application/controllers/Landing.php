<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		// $this->load->model('client/M_pekerjaan', 'pekerjaan');
		$this->load->model('client/My_Model', 'mod');
		// $this->load->model('client/M_user', 'user');
	}


	public function index()
	{
		$data['title'] = 'Megawe';
		$data['pekerjaan'] = $this->mod->getAll('pekerjaan', 'data');
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('Front/Index');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}
}

/* End of file Landing.php */
