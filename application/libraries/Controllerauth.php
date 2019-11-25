<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controllerauth
{
	/**
	 * @package        	CodeIgniter
	 * @subpackage 		Libraries
	 * @package 		Libraries
	 * @author  		Abdul Qhodir Zaelany
	 */


	/**
	 * =====================================================
	 * cara install
	 * =====================================================
	 *  copy file ke dalam folder library
	 * pada controller silahkan  buat construct
	 * $this->load->library('Auth');
	 */

	/**
	 * ======================================================
	 * Contoh Pemakaian StoreLogin
	 * =====================================================
	 * $uname = $this->input->post('email');
	 * $pass = $this->input->post('password');
	 *
	 * $user = $this->authm->getlogin($uname);
	 * $_passModel = $user['password'];
	 * $data = [
	 * 'id_user'		=> $user['id_user'],
	 * '		'nama_user'		=> $user['nama_user'],
	 * '		'foto_profil'	=> $user['foto_profil'],
	 * '		'email'			=> $user['email'],
	 * '		'idlvl'			=> $user['idlvl']
	 * '	];
	 * '
	 * '		$urlSuccess = 'dashboard';
	 * '	$urlWrong = 'auth';
	 * 'Controllerauth::storeLogin($uname, $pass, $_passModel, * '$data, $urlSuccess, $urlWrong, 'flash', 'Masuk');
	 *
	 * $username $$ $password = memasukkan inputan dari controller
	 * $model = untuk mengambil 1 data dari tabel yang ada pada database
	 * $arraySession = untuk mengambil beberapa data yang ada di dalam array dan di masukkan kedalam session
	 * $urlSuccess = url redirect ketika login berhasil
	 * $urlWrong = url redirect ketika login gagal
	 * $flashName && flashContent= jika ingin memakai notifikasi
	 */

	static function storeLogin($username, $password, $model, $arraySession, $urlSuccess, $urlWrong, $flashName = null, $flashContent = null)
	{
		$CI = get_instance();
		$uname = $username;
		$pass = $password;

		$getpass = $model;

		if ($uname) {
			if (password_verify($pass, $getpass)) {
				$data = $arraySession;
				$CI->session->set_userdata($data);
				$CI->session->set_flashdata($flashName, $flashContent);
				redirect($urlSuccess);
			} else {
				$CI->session->set_flashdata($flashName, $flashContent);
				redirect($urlWrong);
			}
		} else {
			$CI->session->set_flashdata($flashName, $flashContent);
			redirect($urlWrong);
		}
	}

	/**
	 * =====================================================
	 * Contoh Pemakaian Register
	 * =====================================================
	 * $data = [
	 * 		'email'		=> $this->input->post('email'),
	 * 		'password'	=> $this->input->post('password')
	 * 	];
	 * Controllerauth::logout($data, 'user', 'flash','Masuk');
	 */

	static function register($arrayData, $namaTable, $flashName = null, $flashContent = null)
	{
		$CI = get_instance();
		$queri = $CI->db->INSERT($namaTable, $arrayData);
		$CI->session->set_flashdata($flashName, $flashContent);
		return $queri;
	}

	/**
	 * =====================================================
	 * Contoh Pemakaian Logout
	 * =====================================================
	 * $data = [
	 * 		'id_user',
	 * 		'nama_user',
	 * 		'foto_profil',
	 * 		'email',
	 * 		'idlvl'
	 * 	];
	 * Controllerauth::logout($data, 'auth', 'flash');
	 *
	 * $arraySession = untuk mengambil beberapa data yang ada di dalam array dan di data yang d session akan di hapus
	 * $urlWrong = url redirect ketika login gagal
	 * $flashName && flashContent= jika ingin memakai notifikasi
	 */

	static function logout($arraySession, $urlSuccess, $flashName = null)
	{
		$CI = get_instance();
		$data = $arraySession;
		$CI->session->unset_userdata($data);
		$CI->session->set_flashdata($flashName, '<div class="alert alert-success" role="alert"> You has been Log Out! </div>');
		redirect($urlSuccess);
	}
}
