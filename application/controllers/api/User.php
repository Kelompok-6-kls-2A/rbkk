<?php

defined('BASEPATH') or exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');

class User extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('form_validation');
	}

	public function index_get()
	{
		$response = $this->M_user->getAll();
		$this->response($response);
	}

	public function store_post()
	{
		$data = $this->security->xss_clean($_POST);
		$this->form_validation->set_data($data);
		$this->form_validation->set_rules('nama_user', 'message', 'required');
		$this->form_validation->set_rules('alamat_user', 'message', 'required');
		$this->form_validation->set_rules('tempattl_user', 'message', 'required');
		$this->form_validation->set_rules('tl_user', 'message', 'required');
		$this->form_validation->set_rules('email', 'message', 'required');
		$this->form_validation->set_rules('password', 'message', 'required');
		$this->form_validation->set_rules('no_hp', 'message', 'required');
		$this->form_validation->set_rules('foto_profil', 'message', 'required');
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
				"password"			=> $this->post('password'),
				"no_hp"				=> $this->post('no_hp'),
				"foto_profil"		=> $this->post('foto_profil'),
				"idlvl"				=> $this->post('idlvl'),
			);
			$response = $this->M_user->insert($data);
			return $this->response($response);
		}
	}

	public function update_put()
	{
		$data = array(
			"id_user"			=> $this->put('id_user'),
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
		$response = $this->M_user->update($data, $this->put('id_user'));
		return $this->response($response);
	}

	public function destroy_delete()
	{
		$response = $this->M_user->delete($this->delete('id_user'));
		return $this->response($response);
	}
}
/** End of file User.php **/
