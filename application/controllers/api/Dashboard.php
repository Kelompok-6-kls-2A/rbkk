<?php
// import library dari REST_Controller
require(APPPATH . 'libraries/REST_Controller.php');
// extends class dari REST_Controller
class Dashboard extends REST_Controller
{
	// constructor
	public function __construct()
	{
		parent::__construct();
		$this->load->model('api/M_dashboard');
	}

	//ambil semua data
	public function index_get()
	{
		$response = $this->M_dashboard->getAll();
		$this->response($response);
	}

	//ambil data berdasarkan parameter
	public function show_get()
	{
		# code...
	}

	//input data
	public function store_post()
	{
		# code...
	}

	//update data
	public function update_put()
	{
		# code...
	}

	//delete data
	public function destroy_delete()
	{
		# code...
	}
}
