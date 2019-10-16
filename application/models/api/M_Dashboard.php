<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Dashboard extends CI_Model
{

	public function empty_response()
	{
		$response['status'] = 502;
		$response['error'] = true;
		$response['message'] = 'Field tidak boleh kosong';
		return $response;
	}

	// mengambil semua data person
	public function getAll()
	{
		// $data = $this->db->get("user")->result();
		$response['status'] = 200;
		$response['error'] = false;
		// $response['person'] = $data;
		return $response;
	}
}

/* End of file M_Dashboard.php */
