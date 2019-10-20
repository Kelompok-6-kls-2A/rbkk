<?php

use GuzzleHttp\Client;

defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

	private $_client;

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->_client = new Client([
			'base_uri'		=> 'http://localhost/rbkk/api/',
			'auth'			=> ['admin', '1234']
		]);
	}
	public function getlogin($email)
	{
		# code...
		$response = $this->_client->request('GET', 'user/getlogin', [
			'query'	=> [
				'email'		=> $email
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result['data'];
	}
}

/* End of file M_auth.php */
