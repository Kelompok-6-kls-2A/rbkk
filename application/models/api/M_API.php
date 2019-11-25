<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_API extends CI_Model
{
	public function getAll($id = null, $table, $joinTable1 = null, $atribut1 = null, $atributjoin1 = null, $atribut2 = null, $joinTable2 = null, $atribut3 = null, $atributjoin2 = null, $atribut4 = null, $where = null, $orderatribut = null, $short = null)
	{
		# code...
		if ($id === null) {
			$this->db->SELECT('*');
			$this->db->FROM($table);
			if ($joinTable1 != null) {
				$this->db->JOIN($joinTable1, $joinTable1 . '.' . $atribut1 . '=' . $atributjoin1 . '.' . $atribut2);
			} elseif ($joinTable1 != null && $joinTable2 != null) {
				$this->db->JOIN($joinTable2, $joinTable2 . '.' . $atribut3 . '=' . $atributjoin2 . '.' . $atribut4);
			}
			$this->db->ORDER_BY($orderatribut, $short);
			$query = $this->db->GET();
		} else {
			$this->db->SELECT('*');
			$this->db->FROM($table);
			if ($joinTable1 != null) {
				$this->db->JOIN($joinTable1, $joinTable1 . '.' . $atribut1 . '=' . $atributjoin1 . '.' . $atribut2);
			} elseif ($joinTable1 != null && $joinTable2 != null) {
				$this->db->JOIN($joinTable2, $joinTable2 . '.' . $atribut3 . '=' . $atributjoin2 . '.' . $atribut4);
			}
			$this->db->WHERE($where, $id);
			$query = $this->db->GET();
		}
		return $query;
	}

	public function insert($table, $data)
	{
		# code...
		$this->db->INSERT($table, $data);
		return $this->db->affected_rows();
	}

	public function update($table, $data, $atribut, $id)
	{
		# code...
		$this->db->update($table, $data, [$atribut => $id]);
		return $this->affected_rows();
	}

	public function destroy($table, $atribut, $id)
	{
		# code...
		$this->db->delete($table, [$atribut => $id]);
		return $this->db->affected_rows();
	}

	public function getlogin($table, $atribut, $joinTable, $atributjoin, $where, $watribut)
	{
		# code...
		$this->db->SELECT('*')
			->FROM($table)
			->JOIN($joinTable, $joinTable . "." . $atributjoin . "=" . $table . "." . $atribut)
			->WHERE($where, $watribut);
		$query = $this->db->get()->row_array();
		return $query;
	}
}

/* End of file M_API.php */
