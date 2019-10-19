<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function getlogin($email)
	{
		# code...
		return $this->db->get_where('tb_user', ['email' => $email])->row_array();
	}
}

/* End of file M_auth.php */
