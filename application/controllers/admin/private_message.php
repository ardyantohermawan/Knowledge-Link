<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Private_message extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses') != 1)
        {
            redirect('login_admin/login_form');
        }
		$this->load->model('model_pesan');
		$this->load->model('model_karyawan');
	}
	
	function index()
	{
		$data['private_messages'] = $this->model_pesan->ambil_semua_data();
		$data['content'] = 'admin/page/private_message/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['karyawans'] = $this->model_karyawan->ambil_semua_data_user();
		$data['content'] = 'admin/page/private_message/tambah';
		$this->load->view('admin/template', $data);	
	}
	
	function simpan()
	{
		if ($this->form_validation->run('private_message') === TRUE)
		{
			$data = array(
				'ID_Pengirim' => $this->input->post('pengirim'),
				'ID_Penerima' => $this->input->post('penerima'),
				'Subject' => $this->input->post('judul'),
				'Pesan' => $this->input->post('pesan'),
				'Tgl' => date('Y-m-d H:i:s')
			);
			$this->model_pesan->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('admin/private_message');
		}
		else
		{
			$this->tambah();
		}
	}
	
	function edit($id)
	{
		$data['karyawans'] = $this->model_karyawan->ambil_semua_data_user();
		$data['private_message'] = $this->model_pesan->ambil_data($id);
		$data['content'] = 'admin/page/private_message/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id)
	{
		if ($this->form_validation->run('private_message_ubah') === TRUE)
		{
			$data = array(
				'ID_Pengirim' => $this->input->post('pengirim'),
				'ID_Penerima' => $this->input->post('penerima'),
				'Subject' => $this->input->post('judul'),
				'Pesan' => $this->input->post('pesan'),
				'Tgl' => date('Y-m-d H:i:s')
			);
			$this->model_pesan->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('admin/private_message');
		}
		else
		{
			$this->edit($id);
		}
	}
	
	function hapus($id)
	{
		$this->model_pesan->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/private_message');
	}
}