<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('client/My_Model', 'mod');
		$this->load->library('form_validation');
		is_logged_in();
	}


	public function index()
	{
		if ($this->session->userdata('idlvl') != 1) {
			# code...
			redirect('dashboard');
		}
		$data['users'] = $this->mod->getAll('user', 'data');
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
		$data['r'] = $this->mod->getById('user', 'id_user', $id, 'data');
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
		if ($this->session->userdata('idlvl') != 1) {
			# code...
			redirect('dashboard');
		}
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

		$_POST = $this->input->post();

		$data = array(
			"nama_user" 			=> $_POST['nama_user'],
			"alamat_user"			=> $_POST['alamat_user'],
			"tempattl_user"			=> $_POST['tempattl_user'],
			"tl_user"				=> $_POST['tl_user'],
			"email"					=> $_POST['email'],
			"password"				=> $_POST['password'],
			"no_hp"					=> $_POST['no_hp'],
			"foto_profil"			=> "default.jpg",
			"idlvl"					=> $_POST['idlvl']
		);

		if ($this->form_validation->run() == TRUE) {
			# code...
			$this->mod->insert('user/store', $data);
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
		$data['r'] = $this->mod->getById('user', 'id_user', $id, 'data');
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

		if ($this->form_validation->run() == TRUE) {
			# code...

			$this->mod->update('user/update', $data);
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
			$delete = $this->mod->delete('user/destroy', 'id_user', $id);
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
