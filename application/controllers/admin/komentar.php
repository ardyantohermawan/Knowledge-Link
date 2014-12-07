<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Komentar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		if ($this->session->userdata('akses') != 1)
        {
            redirect('login_admin/login_form');
        }
		$this->load->model('model_komentar');
	}
	
	function index()
	{
		$data['komentars'] = $this->model_komentar->ambil_semua_data();
		$data['content'] = 'admin/page/komentar/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['content'] = 'admin/page/komentar/tambah';
		$this->load->view('admin/template', $data);
	}
	
	function simpan($id_status)
	{
		if ($this->form_validation->run('komentar_simpan') === TRUE)
		{
			$data = array(
				'ID_Status' => $id_status,
				'ID_user' => $this->input->post('id_user'),
				'KOMENTAR' => $this->input->post('komentar'),
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_komentar->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('admin/komentar');
		}
		else
		{
			$this->tambah();
		}
	}
	
	function edit($id)
	{
		$data['komentar'] = $this->model_komentar->ambil_data($id);
		$data['content'] = 'admin/page/komentar/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id)
	{
		if ($this->form_validation->run('komentar_ubah') === TRUE)
		{
			$data = array(
				'ID_Status' => $id_komentar,
				'ID_user' => $this->input->post('id_user'),
				'KOMENTAR' => $this->input->post('komentar'),
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_komentar->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('admin/komentar');
		}
		else
		{
			$this->edit($id);
		}
	}
	
	function hapus($id)
	{
		$this->model_komentar->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/komentar');
	}
}