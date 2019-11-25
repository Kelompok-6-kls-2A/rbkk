<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pekerjaan extends REST_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('api/M_API', 'apimodel');
		$this->load->library('form_validation');
	}

	public function index_get()
	{
		$id = $this->get('id_pekerjaan');
		if ($id === null) {
			# code...
			$data = $this->apimodel->getAll($id, 'tb_pekerjaan', 'tb_user', 'id_user', 'tb_pekerjaan', 'id_user', null, null, null, null, null, 'tb_pekerjaan.created_add', 'DESC')->result_array();
		} else {
			# code...
			$data = $this->apimodel->getAll($id, 'tb_pekerjaan', 'tb_user', 'id_user', 'tb_pekerjaan', 'id_user', null, null, null, null, null, 'tb_pekerjaan.created_add', 'DESC')->result_array();
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
		$this->form_validation->set_rules('id_user', 'message', 'required');
		$this->form_validation->set_rules('nama_kategori_pekerjaan', 'message', 'required');
		$this->form_validation->set_rules('deskripsi', 'message', 'required');
		$this->form_validation->set_rules('gaji', 'message', 'required');
		$this->form_validation->set_rules('lokasi', 'message', 'required');
		$this->form_validation->set_rules('jam_kerja', 'message', 'required');
		if ($this->form_validation->run() == FALSE) {
			// Form Validation Errors
			$this->set_response([
				'status' => FALSE,
				'error' => $this->form_validation->error_array(),
				'message' => validation_errors()
			], REST_Controller::HTTP_NOT_FOUND);
		} else {
			$data = array(
				'id_user'					=> $this->post('id_user'),
				'nama_kategori_pekerjaan'	=> $this->post('nama_kategori_pekerjaan'),
				'deskripsi'					=> $this->post('deskripsi'),
				'gaji'						=> $this->post('gaji'),
				'lokasi'					=> $this->post('lokasi'),
				'jam_kerja'					=> $this->post('jam_kerja')
			);

			$query = $this->apimodel->insert('tb_pekerjaan', $data);
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

			// Success function

		}
	}

	public function update_put()
	{
		$id = $this->put('id_pekerjaan');
		$data = array(
			'id_user'					=> $this->put('id_user'),
			'nama_kategori_pekerjaan'	=> $this->put('nama_kategori_pekerjaan'),
			'deskripsi'					=> $this->put('deskripsi'),
			'gaji'						=> $this->put('gaji'),
			'lokasi'					=> $this->put('lokasi'),
			'jam_kerja'					=> $this->put('jam_kerja')
		);

		// var_dump($data,$id);

		$query = $this->apimodel->update('tb_pekerjaan', $data, 'id_pekerjaan', $id);
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

	public function destroy_delete()
	{
		$id = $this->delete('id_pekerjaan');
		if ($id === null) {
			# code...
			$this->set_response([
				'status' => FALSE,
				'message' => 'Not Found'
			], REST_Controller::HTTP_BAD_REQUEST);
		} else {
			# code...
			$query = $this->apimodel->destroy('tb_pekerjaan', 'id_pekerjaan', $id);
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
/** End of file Pekerjaan.php **/
