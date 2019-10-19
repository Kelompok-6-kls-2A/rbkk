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
		$this->load->view('Login/Login');
	}

	public function store()
	{
		# code...
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->load->view('Login/Login');
		} else {
			# code...
			// $data = [
			// 	'email'			=> $this->input->post('email'),
			// 	'password'		=> $this->input->post('password'),
			// ];

			// var_dump($data);
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->authm->getlogin($email);

		if ($email) {
			# code...
			if (password_verify($password, $user['email'])) {
				# code...
				$data = [
					'email'		=> $user['email'],
					'idlvl'		=> $user['idlvl']
				];
				$this->session->set_userdata($data);
				if ($user['idlvl'] == 1) {
					redirect('user');
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
}

/* End of file Auth.php */
