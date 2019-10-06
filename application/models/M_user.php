<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function empty_Response()
	{
		# code...
		$response['status'] = 200;
		$response['error'] = false;
		$response['message'] = 'Field tidak boleh ada yang kosong';
	}

	public function getAll()
	{
		# code...
		$this->db->SELECT('*')
			->FROM('tb_user')
			->JOIN('lvluser', 'lvluser.id_lvl = tb_user.id_user');
		$query = $this->db->get()->result();

		$response['status'] = 200;
		$response['error'] = false;
		$response['person'] = $query;

		return $response;
	}
}

/* End of file M_user.php */
