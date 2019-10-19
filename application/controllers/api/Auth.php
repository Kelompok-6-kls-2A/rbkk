<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Auth extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('api/M_user', 'user');
		$this->load->model('api/M_auth', 'authm');
		$this->load->library('form_validation');
	}

	public function Login_get()
	{
		# code...
		$email = $this->get('email');
		$password = $this->get('password');

		$user = $this->authm->getlogin($email);

		if ($email) {
			# code...
			if (password_verify($password, $user['password'])) {
				# code...
				$data = [
					'email'		=> $user['email'],
					'idlvl'		=> $user['idlvl']
				];
				$this->session->set_userdata($data);
				$this->set_response([
					'status' => TRUE,
					'data'   => $data,
					'message' => 'Success'
				], REST_Controller::HTTP_OK);
			} else {
				# code...
				$this->set_response([
					'status' => FALSE,
					'message' => 'Password is wrong!!'
				], REST_Controller::HTTP_NOT_ACCEPTABLE);
			}
		} else {
			# code...
			$this->set_response([
				'status' => FALSE,
				'message' => 'Email not registerred'
			], REST_Controller::HTTP_NOT_ACCEPTABLE);
		}
	}
}
