<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{

	private $_table = "tb_user";

	public function getAll($id = null) //untuk panggil data
	{
		# code...
		if ($id === null) {
			# code...
			$this->db->SELECT('*')
				->FROM($this->_table)
				->JOIN('lvluser', 'lvluser.id_lvl = tb_user.idlvl');
			$query = $this->db->get()->result_array();
			return $query;
		} else {
			# code...
			$this->db->SELECT('*')
				->FROM($this->_table)
				->JOIN('lvluser', 'lvluser.id_lvl = tb_user.idlvl')
				->WHERE('id_user', $id);
			$query = $this->db->get()->result_array();
			return $query;
		}
	}

	public function register($data)
	{
		# code...
		$this->db->insert($this->_table, $data);
		return $this->db->affected_rows();
	}

	public function getlogin($email)
	{
		# code...
		$this->db->SELECT('*')
			->FROM($this->_table)
			->JOIN('lvluser', 'lvluser.id_lvl = tb_user.idlvl')
			->WHERE('email', $email);
		$query = $this->db->get()->row_array();
		return $query;
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
		$this->db->update($this->_table, $data, ['id_user' => $id]);
		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		# code...
		$this->db->delete($this->_table, ['id_user' => $id]);
		return $this->db->affected_rows();
	}
}

/* End of file M_user.php */
