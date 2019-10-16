<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pekerjaan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		// $this->API = "http://localhost/rbkk/api";
		$this->load->model('client/M_pekerjaan', 'pekerjaan');
		$this->load->library('form_validation');
	}


	public function index()
	{
		// $data['users'] = json_decode($this->curl->simple_get($this->API . '/user'));
		$data['pekerjaans'] = $this->pekerjaan->getAll();
		$data['title'] = 'Pekerjaan';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('Pekerjaan/Index');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}

	public function store() //dinda
	{
		# code...
		$insert = $this->pekerjaan->insert();
		if ($insert) {
			# code...
			$this->session->set_flashdata('flash', 'ditambahkan');
		} else {
			# code...
			$this->session->set_flashdata('flash', 'ditambahkan');
		}

		redirect('pekerjaan');
	}

	public function edit($id)
	{
		# code...
		$data['r'] = $this->user->getById($id);
		$data['title'] = 'Edit';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('User/Edit');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}

	public function update() //untuk ngirim datanya
	{
		# code...
		$insert = $this->user->update();
		if ($insert) {
			# code...
			$this->session->set_flashdata('flash', 'ditambahkan');
		} else {
			# code...
			$this->session->set_flashdata('flash', 'ditambahkan');
		}

		redirect('user');
	}

	public function destroy($id) //firdia. untuk menghapus data
	{
		# code...
		if (empty($id)) {
			# code...
			redirect('pekerjaan');
		} else {
			# code...
			// $delete = $this->curl->simple_delete($this->API . '/a_user/destroy', array('id_user' => $id), array(CURLOPT_BUFFERSIZE => 10));
			$delete = $this->user->delete($id);
			if ($delete) {
				# code...
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				# code...
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
		}
		redirect('user');
	}
}

/* End of file User.php */
