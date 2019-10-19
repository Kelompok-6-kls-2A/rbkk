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
		$this->load->model('client/M_user', 'user');
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

	public function show($id)
	{
		# code...

	}

	public function add()
	{
		# code...
		$data['user'] = $this->user->getAll();
		$data['title'] = 'Pekerjaan';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('Pekerjaan/insert');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}

	public function store() //dinda
	{
		# code...
		$this->form_validation->set_rules('id_user', 'Nama Pemilik pekerjaan', 'trim|required');
		$this->form_validation->set_rules('nama_kategori_pekerjaan', 'Nama Ketegori pekerjaan', 'trim|required');
		$this->form_validation->set_rules('gaji', 'Gaji', 'trim|required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
		$this->form_validation->set_rules('jam_kerja', 'Jam Kerja', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$this->pekerjaan->insert();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('pekerjaan');
		} else {
			# code...
			$this->session->set_flashdata('flash', 'ditambahkan');
			$this->add();
		}
	}

	public function edit($id)
	{
		# code...
		$data['r'] = $this->pekerjaan->getById($id);
		$data['title'] = 'Edit';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('Pekerjaan/Edit');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}

	public function update() //untuk ngirim datanya
	{
		# code...
		$insert = $this->pekerjaan->update();
		if ($insert) {
			# code...
			$this->session->set_flashdata('flash', 'ditambahkan');
		} else {
			# code...
			$this->session->set_flashdata('flash', 'ditambahkan');
		}

		redirect('pekerjaan');
	}

	public function destroy($id) //firdia. untuk menghapus data
	{
		# code...
		if (empty($id)) {
			# code...
			redirect('pekerjaan');
		} else {
			# code...
			$delete = $this->pekerjaan->delete($id);
			if ($delete) {
				# code...
				$this->session->set_flashdata('flash', 'dihapus');
			} else {
				# code...
				$this->session->set_flashdata('flash', 'dihapus');
			}
		}
		redirect('pekerjaan');
	}
}

/* End of file User.php */
