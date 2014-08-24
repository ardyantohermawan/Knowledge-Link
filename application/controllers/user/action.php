<?php

class Action extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(
						array(
							'model_karyawan', 
							'model_unit_kerja', 
							'model_pendidikan', 
							'model_training',
							'model_pengalaman_kerja',
							'model_komentar',
							'model_status',
						));
	}

	public function tambahStatus()
	{
		if ($this->form_validation->run('action_status_simpan') === TRUE)
		{
			$data = array(
				'ID_user' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'User_status' => $this->input->post('user_status'),
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_status->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/timeline');
		}

		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['statuss'] = $this->model_status->ambil_data_timeline($id_user);
		$data['content'] = 'frontend/page/timeline';
		$this->load->view('frontend/template', $data);
	}

	public function ubahStatus($id_status)
	{
		if ($this->form_validation->run('action_status_ubah') === TRUE)
		{
			$data = array(
				'ID_user' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'User_status' => $this->input->post('user_status'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_status->ubah_data($id_status, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('user/timeline');
		}
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['status'] = $this->model_status->ambil_data($id_status);
		$data['content'] = 'frontend/page/edit_status';
		$this->load->view('frontend/template', $data);
	}

	public function hapusStatus($id_status)
	{
		$this->model_status->hapus_data($id_status);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('user/timeline');
	}

	public function tambahKomentar($id_status)
	{
		if ($this->form_validation->run('action_komentar_simpan') === TRUE)
		{
			$data = array(
				'ID_Status' => $id_status,
				'ID_user' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'KOMENTAR' => $this->input->post('komentar'),
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_komentar->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/status/komentar/'.$id_status);
		}

		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['status'] = $this->model_status->ambil_data($id_status);
		$data['content'] = 'frontend/page/komentar';
		$this->load->view('frontend/template', $data);
	}

	public function ubahKomentar($id_komentar)
	{
		if ($this->form_validation->run('action_komentar_ubah') === TRUE)
		{
			$data = array(
				'ID_Status' => $id_komentar,
				'ID_user' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'KOMENTAR' => $this->input->post('komentar'),
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_komentar->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('user/komentar');
		}
		else
		{
			$this->edit($id);
		}
	}

	public function hapusKomentar($id_komentar)
	{
		$this->model_komentar->hapus_data($id_komentar);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('user/komentar');
	}

	public function following($id_user)
	{
		
	}
}
