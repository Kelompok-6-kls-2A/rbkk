<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class User extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api/M_user', 'user');
		$this->load->model('api/M_API', 'apimodel');
		$this->load->library('form_validation');
	}

	public function index_get()
	{
		$id = $this->get('id_user');
		// $id = 64;
		if ($id === null) {
			# code...
			// $data = $this->user->getAll();
			$data2 = $this->apimodel->getAll($id, 'tb_user', 'lvluser', 'id_lvl', 'tb_user', 'idlvl')->result_array();
		} else {
			# code...
			$data2 = $this->apimodel->getAll($id, 'tb_user', 'lvluser', 'id_lvl', 'tb_user', 'idlvl', null, null, null, null, 'id_user')->result_array();
			// $data = $this->user->getAll($id);
		}

		$this->set_response([
			'status' => TRUE,
			'data'   => $data2,
			'message' => 'Success'
		], REST_Controller::HTTP_OK);
	}

	public function getlogin_get()
	{
		# code...
		$email = $this->get('email');
		$data = $this->user->getlogin($email);
		$this->set_response([
			'status' => TRUE,
			'data'   => $data,
			'message' => 'Success'
		], REST_Controller::HTTP_OK);
	}

	public function store_post()
	{
		$data = $this->security->xss_clean($_POST);
		$this->form_validation->set_data($data);
		$this->form_validation->set_rules('nama_user', 'message', 'required');
		$this->form_validation->set_rules('alamat_user', 'message', 'required');
		$this->form_validation->set_rules('email', 'message', 'required');
		$this->form_validation->set_rules('password', 'message', 'required');
		$this->form_validation->set_rules('idlvl', 'message', 'required');

		if ($this->form_validation->run() == FALSE) {
			// Form Validation Errors
			$this->set_response([
				'status' => FALSE,
				'error' => $this->form_validation->error_array(),
				'message' => validation_errors()
			], REST_Controller::HTTP_NOT_FOUND);
		} else {
			// Success function
			$data = array(
				"nama_user"			=> $this->post('nama_user'),
				"alamat_user"		=> $this->post('alamat_user'),
				"tempattl_user"		=> $this->post('tempattl_user'),
				"tl_user"			=> $this->post('tl_user'),
				"email"				=> $this->post('email'),
				"password"			=> password_hash($this->post('password'), PASSWORD_DEFAULT),
				"no_hp"				=> $this->post('no_hp'),
				"foto_profil"		=> $this->post('foto_profil'),
				"idlvl"				=> $this->post('idlvl'),
			);
			// $query = $this->user->insert($data);
			$query = $this->apimodel->insert('tb_user', $data);
			if ($query > 0) {
				# code...
				$this->set_response([
					'status' => TRUE,
					'data'   => $data,
					'message' => 'Field has been Created Success'
				], REST_Controller::HTTP_CREATED);
			} else {
				# code...
				$this->set_response([
					'status' => FALSE,
					'message' => 'Not Acceptable'
				], REST_Controller::HTTP_NOT_ACCEPTABLE);
			}
		}
	}
	public function register_post()
	{
		$data = $this->security->xss_clean($_POST);
		$this->form_validation->set_data($data);
		$this->form_validation->set_rules('email', 'message', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'message', 'required');
		$this->form_validation->set_rules('idlvl', 'message', 'required');

		if ($this->form_validation->run() == FALSE) {
			// Form Validation Errors
			$this->set_response([
				'status' => FALSE,
				'error' => $this->form_validation->error_array(),
				'message' => validation_errors()
			], REST_Controller::HTTP_NOT_FOUND);
		} else {
			// Success function
			$data = [
				'email'			=> $this->post('email'),
				'password'		=> password_hash($this->post('password'), PASSWORD_DEFAULT),
				'idlvl'			=> $this->post('idlvl')
			];
			$query = $this->user->register($data);
			if ($query) {
				# code...
				$this->set_response([
					'status' => TRUE,
					'data'   => $data,
					'message' => 'Success'
				], REST_Controller::HTTP_OK);
			} else {
				# code...
				$this->set_response([
					'status' => FALSE,
					'message' => 'Not Acceptable'
				], REST_Controller::HTTP_NOT_ACCEPTABLE);
			}
		}
	}

	public function update_put()
	{
		$id = $this->put('id_user');
		$data = array(
			"nama_user"			=> $this->put('nama_user'),
			"alamat_user"		=> $this->put('alamat_user'),
			"tempattl_user"		=> $this->put('tempattl_user'),
			"tl_user"			=> $this->put('tl_user'),
			"email"				=> $this->put('email'),
			"password"			=> $this->put('password'),
			"no_hp"				=> $this->put('no_hp'),
			"foto_profil"		=> $this->put('foto_profil'),
			"idlvl"				=> $this->put('idlvl'),
		);

		$query = $this->user->update($data, $id);
		if ($query > 0) {
			# code...
			$this->set_response([
				'status' => TRUE,
				'data'   =>  $query,
				'message' => 'field has been updated Success'
			], REST_Controller::HTTP_OK);
		} else {
			# code...
			$this->set_response([
				'status' => FALSE,
				'message' => 'Not Acceptable'
			], REST_Controller::HTTP_NOT_ACCEPTABLE);
		}
	}

	public function destroy_delete()
	{
		$id = $this->delete('id_user');
		if ($id === null) {
			# code...
			$this->set_response([
				'status' => FALSE,
				'message' => 'Not Acceptable'
			], REST_Controller::HTTP_BAD_REQUEST);
		} else {
			# code...
			$query = $this->user->delete($id);
			if ($query > 0) {
				# code...
				$this->set_response([
					'status' => TRUE,
					'data'   => $query,
					'message' => 'Success'
				], REST_Controller::HTTP_OK);
			} else {
				# code...
				$this->set_response([
					'status' => FALSE,
					'message' => 'Not Acceptable'
				], REST_Controller::HTTP_NOT_ACCEPTABLE);
			}
		}
	}
}
/** End of file User.php **/
