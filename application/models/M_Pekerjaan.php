<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pekerjaan extends CI_Model
{

	private $_table = 'tb_pekerjaan';

	public function empty_Response()
	{
		# code...
		$response['status'] = 502;
		$response['error'] = true;
		$response['message'] = 'Field tidak boleh kosong';

		return $response;
	}

	public function getAll()
	{
		# code...
		$query = $this->db->get($this->_table)->result();

		$response['status'] = 200;
		$response['error'] = false;
		$response['field'] = $query;

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
				$response['error'] = true;
				$response['message'] = 'Data gagail ditambahkan';
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
		if (!empty($data || $id == '')) {
			# code...
			$this->db->where('id_pekerjaan', $id);
			$query = $this->db->update($this->_table, $data);

			if ($query) {
				# code...
				$response['status'] = 200;
				$response['error'] = false;
				$response['message'] = 'Data berhasil diupdate';
				return $response;
			} else {
				# code...
				$response['status'] = 502;
				$response['error'] = true;
				$response['message'] = 'Data gagal diupdate';
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
		if ($id != '') {
			# code...
			$this->db->where('id_pekerjaan', $id);
			$query = $this->db->delete($this->_table);
			if ($query) {
				# code...
				$response['status'] = 200;
				$response['error'] = false;
				$response['message'] = 'Data berhasil dihapus';
				return $response;
			} else {
				# code...
				$response['status'] = 502;
				$response['error'] = true;
				$response['message'] = 'Data gagal dihapus';
				return $response;
			}
		} else {
			# code...
			return $this->empty_Response();
		}
	}
}

/* End of file M_Pekerjaan.php */
