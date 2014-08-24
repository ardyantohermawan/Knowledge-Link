<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Status extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		$this->load->model('model_status');
	}
	
	function index()
	{
		$data['statuss'] = $this->model_status->ambil_semua_data();
		$data['content'] = 'admin/page/status/view';
		$this->load->view('admin/template', $data);
	}

	// mengambil komentar tiap status
	public function detail($id)
	{
		$data['status'] = $this->model_status->ambil_data($id);
		$data['komentars'] = $this->model_komentar->ambil_data_per_status($id);
		$data['content'] = 'admin/page/komentar/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['content'] = 'admin/page/status/tambah';
		$this->load->view('admin/template', $data);	
	}
	
	function simpan()
	{
		if ($this->form_validation->run('status_simpan') === TRUE)
		{
			$data = array(
				'ID_user' => $this->input->post('id_user'),
				'User_status' => $this->input->post('user_status')
			);
			$this->model_status->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('admin/status');
		}
		else
		{
			$this->tambah();
		}
	}
	
	function edit($id)
	{
		$data['status'] = $this->model_status->ambil_data($id);
		$data['content'] = 'admin/page/status/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id)
	{
		if ($this->form_validation->run('status_ubah') === TRUE)
		{
			$data = array(
				'ID_user' => $this->input->post('id_user'),
				'User_status' => $this->input->post('user_status')
			);
			$this->model_status->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('admin/status');
		}
		else
		{
			$this->edit($id);
		}
	}
	
	function hapus($id)
	{
		$this->model_status->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/status');
	}
}