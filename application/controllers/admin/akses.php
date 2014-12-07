<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Akses extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses') != 1)
        {
            redirect('login_admin/login_form');
        }
		$this->load->model('model_akses');
	}
	
	function index()
	{
		$data['aksess'] = $this->model_akses->ambil_semua_data();
		$data['content'] = 'admin/page/akses/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['content'] = 'admin/page/akses/tambah';
		$this->load->view('admin/template', $data);	
	}
	
	function simpan()
	{
		if ($this->form_validation->run('akses_simpan') === TRUE)
		{
			$data = array(
				'LEVEL_AKSES' => $this->input->post('level_akses')
			);
			$this->model_akses->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('admin/akses');
		}
		else
		{
			$this->tambah();
		}
	}
	
	function edit($id)
	{
		$data['akses'] = $this->model_akses->ambil_data($id);
		$data['content'] = 'admin/page/akses/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id)
	{
		if ($this->form_validation->run('akses_ubah') === TRUE)
		{
			$data = array(
				'LEVEL_AKSES' => $this->input->post('level_akses')
			);
			$this->model_akses->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('admin/akses');
		}
		else
		{
			$this->edit($id);
		}
	}
	
	function hapus($id)
	{
		$this->model_akses->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/akses');
	}
}