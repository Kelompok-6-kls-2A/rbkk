<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class My_Model extends CI_Model
{
	private $_client;

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->_client = new Client([
			'base_uri'	=> 'http://localhost/rbkk/api/'
		]);
	}

	public function getAll($link, $object)
	{
		# code...
		$response = $this->_client->request('GET', $link);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result[$object];
	}

	public function getById($link, $atr, $id, $object)
	{
		# code...
		$response = $this->_client->request('GET', $link, [
			'query'		=> [
				$atr	=>	$id
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result[$object][0];
	}

	public function insert($link, $data)
	{
		# code...
		$response = $this->_client->request('POST', $link, [
			'form_params'	=> $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}

	public function update($link, $data)
	{
		# code...
		$response = $this->_client->request('PUT', $link, [
			'form_params'	=>	$data
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}

	public function delete($link, $atr, $id)
	{
		# code...
		$response = $this->_client->request('DELETE', $link, [
			'form_params'	=>	[
				$atr	=>	$id
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}

	public function getlogin($link, $atr, $uname, $object)
	{
		# code...
		$response = $this->_client->request('GET', $link, [
			'query'	=>	[
				$atr 	=>	$uname
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result[$object];
	}

	public function register($link, $data)
	{
		# code...
		$response = $this->_client->request('POST', $link, [
			'form_params'	=> $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}
}

/* End of file My_Model.php */
