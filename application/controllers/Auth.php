<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('form_validation');
		$this->load->model('client/M_auth', 'authm');
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
			$this->_login();
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
		$this->form_validation->set_rules('email', 'Email', 'trim|reqiured');
		$this->form_validation->set_rules('password', 'Password', 'trim|reqiured');
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->authm->register();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Register Sukses! </div>');
			redirect('auth');
		} else {
			# code...
			$this->load->view('Template/Authhead');
			$this->load->view('Login/Register');
			$this->load->view('Template/Authfooter');
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->authm->getlogin($email);

		$_pass = $user['password'];
		if ($email) {
			# code...
			if (password_verify($password, $_pass)) {
				# code...
				$data = [
					'id_user'		=> $user['id_user'],
					'nama_user'		=> $user['nama_user'],
					'foto_profil'	=> $user['foto_profil'],
					'email'			=> $user['email'],
					'idlvl'			=> $user['idlvl']
				];
				$this->session->set_userdata($data);
				if ($user['idlvl'] == 1) {
					redirect('dashboard');
				} else {
					redirect('dashboard');
				}
			} else {
				# code...
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Wrong Password! </div>');
				redirect('auth');
			}
		} else {
			# code...
			$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert"> Email isnot registered! </div>');
			redirect('auth');
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
		$this->session->unset_userdata($data);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
			You has been Log Out!
		  </div>');

		redirect('/');
	}
}

/* End of file Auth.php */
