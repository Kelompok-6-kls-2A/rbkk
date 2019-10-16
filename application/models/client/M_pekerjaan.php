<?php

use GuzzleHttp\Client;

defined('BASEPATH') or exit('No direct script access allowed');

class M_pekerjaan extends CI_Model
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
		$response = $this->_client->request('GET', 'pekerjaan'); //untuk memanggil data

		$result = json_decode($response->getBody()->getContents(), true);
		return $result['data'];
	}

	public function getByID($id)
	{
		# code...
		$response = $this->_client->request('GET', 'pekerjaan', [
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
			"id_user" 			   	 	=> $_POST['id_user'],
			"nama_kategori_pekerjaan"	=> $_POST['nama_kategori_pekerjaan'],
			"deskripsi"					=> $_POST['deskripsi'],
			"gaji"						=> $_POST['gaji'],
			"lokasi"					=> $_POST['lokasi'],
			"jam_kerja"					=> $_POST['jam_kerja'],
			"idlvl"						=> $_POST['idlvl']
		);

		$response = $this->_client->request('POST', 'pekerjaan/store', [
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
			"id_user" 			   	 	=> $_POST['id_user'],
			"nama_kategori_pekerjaan"	=> $_POST['nama_kategori_pekerjaan'],
			"deskripsi"					=> $_POST['deskripsi'],
			"gaji"						=> $_POST['gaji'],
			"lokasi"					=> $_POST['lokasi'],
			"jam_kerja"					=> $_POST['jam_kerja'],
			"idlvl"					=> $_POST['idlvl'],
			"id_pekerjaan"				=> $_POST['id_pekerjaan']
		);

		$response = $this->_client->request('PUT', 'pekerjaan/update', [
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
