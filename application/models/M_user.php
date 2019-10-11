<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{

	private $_table = "tb_user";

	public function empty_Response()
	{
		# code...
		$response['status'] = 502;
		$response['error'] = true;
		$response['message'] = 'Field tidak boleh ada yang kosong';

		return $response;
	}

	public function getAll()
	{
		# code...
		$this->db->SELECT('*')
			->FROM($this->_table)
			->JOIN('lvluser', 'lvluser.id_lvl = tb_user.idlvl');
		$query = $this->db->get()->result();

		$response['status'] = 200;
		$response['error'] = false;
		$response['person'] = $query;

		return $response;
	}

	public function insert($data)
	{
		# code...
		if (!empty($data)) {
			# code...
			$query = $this->db->insert($this->_table, $data);
			if ($query) {
				# code...
				$response['status'] = 200;
				$response['error'] = false;
				$response['message'] = 'Data berhasil ditambahkan';
				return $response;
			} else {
				# code...
				$response['status'] = 502;
				$response['error'] = false;
				$response['message'] = 'Data gagal ditambahkan';
				return $response;
			}
		} else {
			# code...
			return $this->empty_Response();
		}
	}

	public function update($data, $id)
	{
		# code...
		if (!empty($data) || $id == '') {
			# code...
			$this->db->where('id_user', $id);
			$query = $this->db->update($this->_table, $data);
			if ($query) {
				# code...
				$response['status'] = 200;
				$response['error'] = false;
				$response['message'] = 'Data berhasil diubah';
				return $response;
			} else {
				# code...
				$response['status'] = 502;
				$response['error'] = false;
				$response['message'] = 'Data gagal diubah';
				return $response;
			}
		} else {
			# code...
			return $this->empty_Response();
		}
	}

	public function delete($id)
	{
		# code...
		if ($id == '') {
			# code...
			return $this->empty_Response();
		} else {
			# code...
			$this->db->where('id_user', $id);
			$query = $this->db->delete($this->_table);
			if ($query) {
				# code...
				$response['status'] = 200;
				$response['error'] = false;
				$response['message'] = 'Data berhasil delete';
				return $response;
			} else {
				# code...
				$response['status'] = 502;
				$response['error'] = false;
				$response['message'] = 'Data gagal delete';
				return $response;
			}
		}
	}
}

/* End of file M_user.php */
