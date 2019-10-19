<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_key extends CI_Model
{
	public function insert($data)
	{
		# code...
		$this->db->INSERT('keys', $data);
		return $this->db->affected_rows();
	}
}

/* End of file M_key.php */
