<?php

require(APPPATH . 'libraries/REST_Controller.php');

class Pekerjaan extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_Pekerjaan');
		$this->load->library('form_validation');
	}

	public function index_get()
	{
		// Get Method 
		return $this->response($this->M_Pekerjaan->getAll());
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
			// Success function
			$data = array(
				"id_user" 						=> $this->post('id_user'),
				"nama_kategori_pekerjaan"		=> $this->post('nama_kategori_pekerjaan'),
				"deskripsi"						=> $this->post('deskripsi'),
				"gaji"							=> $this->post('gaji'),
				"lokasi"						=> $this->post('lokasi'),
				"jam_kerja"						=> $this->post('jam_kerja')
			);

			return $this->response($this->M_Pekerjaan->insert($data));
		}
	}

	public function update_put()
	{
		$data = array(
			"id_pekerjaan"						=> $this->put('id_pekerjaan'),
			"id_user"							=> $this->put('id_user'),
			"nama_kategori_pekerjaan"			=> $this->put('nama_kategori_pekerjaan'),
			"deskripsi"							=> $this->put('deskripsi'),
			"gaji"								=> $this->put('gaji'),
			"lokasi"							=> $this->put('lokasi'),
			"jam_kerja"							=> $this->put('jam_kerja')
		);

		return $this->response($this->M_Pekerjaan->update($data, $this->put('id_pekerjaan')));
	}

	public function destroy_delete()
	{
		return $this->response($this->M_Pekerjaan->delete($this->delete('id_pekerjaan')));
	}
}
