<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PekerjaanUser extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('client/M_pekerjaan', 'pekerjaan');
	}
	public function index()
	{
		$data['pekerjaans'] = $this->pekerjaan->getAll();
		$data['title'] = 'Pekerjaan';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('Pekerjaan/Index');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}
}

/* End of file PekerjaanUser.php */
