<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_User extends CI_Controller
{

	var $API = "";
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->API = "http://localhost/rbkk/api";
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['users'] = json_decode($this->curl->simple_get($this->API . '/user'));

		$data['title'] = 'User';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('User/Index');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}

	public function store()
	{
		# code...
		$_POST = $this->input->post();

		# code...
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
		// echo ("<pre>");
		// print_r($data);
		$insert = $this->curl->simple_post($this->API . '/user/store', $data, array(CURLOPT_BUFFERSIZE => 10));
		if ($insert) {
			# code...
			$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
		} else {
			# code...
			$this->session->set_flashdata('hasil', 'Insert Data gagal');
		}

		redirect('client/c_user');
	}

	public function edit($id)
	{
		# code...
		if (empty($id)) {
			# code...
			echo "eror";
		} else {
			# code...
			$data['title'] = 'Edit';
			$this->load->view('Template/Head', $data);
			$this->load->view('Template/Sidebar');
			$this->load->view('Template/Topnavbar');
			$this->load->view('User/Edit');
			$this->load->view('Template/Footer');
			$this->load->view('Template/Js');
		}
	}

	public function update()
	{
		# code...
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

		$update = $this->curl->simple_put($this->API . '/a_user/update', $data, array(CURLOPT_BUFFERSIZE => 10));
		if ($update) {
			# code...
			$this->session->set_flashdata('hasil', 'Update data berhasil');
		} else {
			# code...
			$this->session->set_flashdata('hasil', 'Update data gagal');
		}
		redirect('client/c_user');
	}

	public function destroy($id)
	{
		# code...
		if (empty($id)) {
			# code...
			redirect('client/c_user');
		} else {
			# code...
			$delete = $this->curl->simple_delete($this->API . '/a_user/destroy', array('id_user' => $id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				# code...
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				# code...
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
		}
		redirect('client/c_user');
	}
}

/* End of file User.php */
