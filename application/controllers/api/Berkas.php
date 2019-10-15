<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Berkas extends REST_Controller
{


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('api/M_berkas', 'berkas');
		$this->load->library('form_validation');
	}

	public function index_get()
	{
		// Get Method 
		$id = $this->get('id_berkas');
		if ($id === null) {
			# code...
			$data = $this->berkas->getAll();
		} else {
			# code...
			$data = $this->berkas->getAll($id);
		}

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
		$this->form_validation->set_rules('id_pekerjaan', 'message', 'required');
		$this->form_validation->set_rules('SKCK', 'message', 'required');
		$this->form_validation->set_rules('CV', 'message', 'required');
		$this->form_validation->set_rules('foto', 'message', 'required');
		$this->form_validation->set_rules('foto_ktp', 'message', 'required');
		$this->form_validation->set_rules('lainlain', 'message', 'required');

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
				'id_pekerjaan'			=> $this->post('id_pekerjaan'),
				'SKCK'					=> $this->post('SKCK'),
				'CV'					=> $this->post('CV'),
				'foto'					=> $this->post('foto'),
				'foto_ktp'				=> $this->post('foto_ktp'),
				'lainlain'				=> $this->post('lainlain')
			);

			$query = $this->berkas->insert($data);
			if ($query > 0) {
				# code...
				$this->set_response([
					'status' => TRUE,
					'data'   => $data,
					'message' => 'Success'
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

	public function update_put()
	{
		$id = $this->put('id_berkas');
		$data = array(
			'id_pekerjaan'			=> $this->put('id_pekerjaan'),
			'SKCK'					=> $this->put('SKCK'),
			'CV'					=> $this->put('CV'),
			'foto'					=> $this->put('foto'),
			'foto_ktp'				=> $this->put('foto_ktp'),
			'lainlain'				=> $this->put('lainlain')
		);

		$query = $this->berkas->update($data, $id);

		if ($query > 0) {
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

	public function destroy_delete()
	{
		$id = $this->delete('id_berkas');
		if ($id === null) {
			# code...
			$this->set_response([
				'status' => FALSE,
				'message' => 'Not Acceptable'
			], REST_Controller::HTTP_BAD_REQUEST);
		} else {
			# code...
			$query = $this->berkas->delete($id);
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

/* End of file Berkas.php */
