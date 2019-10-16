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

	public function store()
	{
		# code...
		$insert = $this->user->insert();
		if ($insert) {
			# code...
			$this->session->set_flashdata('flash', 'Created');
		} else {
			# code...
			$this->session->set_flashdata('flash', 'Created');
		}

		redirect('user');
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
		$insert = $this->user->update();
		if ($insert) {
			# code...
			$this->session->set_flashdata('flash', 'Updated');
		} else {
			# code...
			$this->session->set_flashdata('flash', 'Updated');
		}

		redirect('user');
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
				$this->session->set_flashdata('flash', 'Delete');
			} else {
				# code...
				$this->session->set_flashdata('flash', 'Delete');
			}
		}
		redirect('user');
	}
}

/* End of file User.php */
