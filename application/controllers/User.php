<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('client/M_user', 'user');
		$this->load->library('form_validation');
		is_logged_in();
	}


	public function index()
	{
		$data['users'] = $this->user->getAll();
		$data['title'] = 'User';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('User/Index');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}

	public function show($id)
	{
		# code...
		$data['r'] = $this->user->getById($id);
		$data['title'] = 'User-detail';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('User/Detail');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}

	public function add()
	{
		# code...
		$data['title'] = 'Add-user';
		$this->load->view('Template/Head', $data);
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/Topnavbar');
		$this->load->view('User/Add');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Js');
	}

	public function store()
	{
		# code...
		$this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat_user', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tempattl_user', 'TempaLahir', 'trim|required');
		$this->form_validation->set_rules('tl_user', 'TanggLahir', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'NoHP', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$this->user->insert();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('user');
		} else {
			# code...
			$this->session->set_flashdata('flash', 'diambahkan');
			// redirect('user/add');
			$this->add();
		}
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

	public function update()
	{
		# code...
		$this->form_validation->set_rules('nama_user', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat_user', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tempattl_user', 'TempaLahir', 'trim|required');
		$this->form_validation->set_rules('tl_user', 'TanggLahir', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'NoHP', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$this->user->update();
			$this->session->set_flashdata('flash', 'diubah');
			redirect('user');
		} else {
			# code...
			$this->session->set_flashdata('flash', 'diubah');
			redirect('user');
		}
	}

	public function destroy($id)
	{
		# code...
		if (empty($id)) {
			# code...
			redirect('user');
		} else {
			# code...
			$delete = $this->user->delete($id);
			if ($delete) {
				# code...
				$this->session->set_flashdata('flash', 'dihapus');
			} else {
				# code...
				$this->session->set_flashdata('flash', 'dihapus');
			}
		}
		redirect('user');
	}
}

/* End of file User.php */
