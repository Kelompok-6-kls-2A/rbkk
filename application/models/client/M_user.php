<?php

use GuzzleHttp\Client;

defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{

	private $_client;

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->_client = new Client([
			'base_uri'		=> 'http://localhost/rbkk/api/'
		]);
	}

	public function getAll()
	{
		# code...
		$response = $this->_client->request('GET', 'user');

		$result = json_decode($response->getBody()->getContents(), true);
		return $result['person'];
	}

	public function getByID($id)
	{
		# code...
		$response = $this->_client->request('GET', 'user', [
			'query' 		=> [
				'id_user'	=> $id
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result['data'][0];
	}

	public function insert()
	{
		# code...
		$_POST = $this->input->post();

		$data = array(
			"nama_user" 			=> $_POST['nama_user'],
			"alamat_user"			=> $_POST['alamat_user'],
			"tempattl_user"			=> $_POST['tempattl_user'],
			"tl_user"				=> $_POST['tl_user'],
			"email"					=> $_POST['email'],
			"password"				=> $_POST['password'],
			"no_hp"					=> $_POST['no_hp'],
			"foto_profil"			=> $_POST['foto_profil'],
			"idlvl"					=> $_POST['idlvl']
		);

		$response = $this->_client->request('POST', 'user/store', [
			'form_params'			=> $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}

	public function update()
	{
		# code...
		$_POST = $this->input->post();

		$data = array(
			"nama_user" 			=> $_POST['nama_user'],
			"alamat_user"			=> $_POST['alamat_user'],
			"tempattl_user"			=> $_POST['tempattl_user'],
			"tl_user"				=> $_POST['tl_user'],
			"email"					=> $_POST['email'],
			"password"				=> $_POST['password'],
			"no_hp"					=> $_POST['no_hp'],
			"foto_profil"			=> $_POST['foto_profil'],
			"idlvl"					=> $_POST['idlvl'],
			"id_user"				=> $_POST['id_user']
		);

		$response = $this->_client->request('PUT', 'user/update', [
			'form_params'			=> $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}

	public function delete($id)
	{
		# code...
		$response = $this->_client->request('DELETE', 'user/destroy', [
			'form_params'	=> [
				'id_user'	=> $id
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}
}

/* End of file M_user.php */
