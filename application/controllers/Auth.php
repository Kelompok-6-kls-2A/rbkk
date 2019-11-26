<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('form_validation');
		$this->load->library('Controllerauth');
		// $this->load->model('client/M_auth', 'authm');
		$this->load->model('client/My_Model', 'mod');
	}
	public function index()
	{
		# code...
		$this->load->view('Template/Authhead');
		$this->load->view('Login/Login');
		$this->load->view('Template/Authfooter');
	}

	public function store()
	{

		# code...
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->load->view('Template/Authhead');
			$this->load->view('Login/Login');
			$this->load->view('Template/Authfooter');
		} else {
			# code...
			$uname = $this->input->post('email');
			$pass = $this->input->post('password');

			$user = $this->mod->getlogin('user/getlogin', 'email', $uname, 'data');
			$_passModel = $user['password'];
			$data = [
				'id_user'		=> $user['id_user'],
				'nama_user'		=> $user['nama_user'],
				'foto_profil'	=> $user['foto_profil'],
				'email'			=> $user['email'],
				'idlvl'			=> $user['idlvl']
			];

			$urlSuccess = 'dashboard';
			$urlWrong = 'auth';
			Controllerauth::storeLogin($uname, $pass, $_passModel, $data, $urlSuccess, $urlWrong, 'flash', 'Masuk');
		}
	}

	public function daftar()
	{
		# code...
		$this->load->view('Template/Authhead');
		$this->load->view('Login/Register');
		$this->load->view('Template/Authfooter');
	}

	public function register()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|reqiured|valid_email|is_unique[tb_user.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|reqiured');
		$this->form_validation->set_rules('idlvl', 'Kategori', 'reqiured');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$data = array(
				"email"		=> $this->input->post('email', true),
				"idlvl"		=> $this->input->post('idlvl', true),
				"password"	=> $this->input->post('password', true)
			);

			$this->mod->register('user/register', $data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Register Sukses! </div>');
			redirect('auth');
		} else {
			# code...
			$this->load->view('Template/Authhead');
			$this->load->view('Login/Register');
			$this->load->view('Template/Authfooter');
		}
	}

	public function logout()
	{
		# code...
		$data = [
			'id_user',
			'nama_user',
			'foto_profil',
			'email',
			'idlvl'
		];

		Controllerauth::logout($data, 'auth', 'flash');
	}
}

/* End of file Auth.php */
