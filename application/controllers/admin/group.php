<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Group extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('model_group');
	}
	
	function index()
	{
		$data['groups'] = $this->model_group->ambil_semua_data();
		$data['content'] = 'admin/page/group/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['content'] = 'admin/page/group/tambah';
		$this->load->view('admin/template', $data);	
	}
	
	function simpan()
	{
		if ($this->form_validation->run('group_simpan') === TRUE)
		{
			$data = array(
				'LEVEL_GROUP' => $this->input->post('level_group'),
				'NAMA_GROUP' => $this->input->post('nama_group')
			);
			$this->model_group->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('admin/group');
		}
		else
		{
			$this->tambah();
		}
	}
	
	function edit($id)
	{
		$data['group'] = $this->model_group->ambil_data($id);
		$data['content'] = 'admin/page/group/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id)
	{
		if ($this->form_validation->run('group_ubah') === TRUE)
		{
			$data = array(
				'LEVEL_GROUP' => $this->input->post('level_group'),
				'NAMA_GROUP' => $this->input->post('nama_group')
			);
			$this->model_group->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('admin/group');
		}
		else
		{
			$this->edit($id);
		}
	}
	
	function hapus($id)
	{
		$this->model_group->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/group');
	}
}