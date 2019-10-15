<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pekerjaan extends CI_Model
{
	private $_table = "tb_pekerjaan";

	public function getAll($id = null) 
	{
		# code...
		if ($id === null) {
			# code...
			$this->db->SELECT('*')
				->FROM($this->_table)
				->JOIN('tb_user', 'tb_user.id_user = tb_pekerjaan.id_user');
			$query = $this->db->get()->result_array();
			return $query;
		} else {
			# code...
			$this->db->SELECT('*')
				->FROM($this->_table)
				->JOIN('tb_user', 'tb_user.id_user = tb_pekerjaan.id_user')
				->WHERE('id_pekerjaan', $id);
			$query = $this->db->get()->result_array();
			return $query;
		}
	}

	public function insert($data)
	{
		# code...
		$this->db->insert($this->_table, $data);
		return $this->db->affected_rows();
	}

	public function update($data, $id)
	{
		# code...
		$this->db->update($this->_table, $data, ['id_pekerjaan' => $id]);
		return $this->db->affected_rows();
	}

	public function delete($id = null)
	{
		# code...
		$this->db->delete($this->_table, ['id_pekerjaan' => $id]);
		return $this->db->affected_rows();
	}
}

/* End of file M_pekerjaan.php */
