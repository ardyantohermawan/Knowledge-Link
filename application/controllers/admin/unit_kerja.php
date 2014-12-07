<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Unit_kerja extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses') != 1)
        {
            redirect('login_admin/login_form');
        }
		$this->load->model('model_unit_kerja');
	}
	
	function index()
	{
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['content'] = 'admin/page/unit_kerja/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['content'] = 'admin/page/unit_kerja/tambah';
		$this->load->view('admin/template', $data);	
	}
	
	function simpan()
	{
		if ($this->form_validation->run('unit_kerja_simpan') === TRUE)
		{
			$data = array(
				'KODE_UNIT_KERJA' => $this->input->post('kode_unit_kerja'),
				'CONTENT_UNIT_KERJA' => $this->input->post('content_unit_kerja'),
			);
			$this->model_unit_kerja->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('admin/unit_kerja');
		}
		else
		{
			$this->tambah();
		}
	}
	
	function edit($id)
	{
		$data['unit_kerja'] = $this->model_unit_kerja->ambil_data($id);
		$data['content'] = 'admin/page/unit_kerja/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id)
	{
		if ($this->form_validation->run('unit_kerja_ubah') === TRUE)
		{
			$data = array(
				'KODE_UNIT_KERJA' => $this->input->post('kode_unit_kerja'),
				'CONTENT_UNIT_KERJA' => $this->input->post('content_unit_kerja'),
			);
			$this->model_unit_kerja->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('admin/unit_kerja');
		}
		else
		{
			$this->edit($id);
		}
	}
	
	function hapus($id)
	{
		$this->model_unit_kerja->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/unit_kerja');
	}
}