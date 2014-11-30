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
							'model_group',
							'model_status_group',
							'model_komentar_group',
							'model_notifikasi'
						));
	}


	// USER TIMELINE
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
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
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
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['status'] = $this->model_status->ambil_data($id_status);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
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

			$status = $this->model_status->ambil_data($id_status);
			if ($status['ID_user'] != $this->session->userdata('id_user')) {
				$data2 = array(
					'ID_User' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
					'ID_Status' => $id_status,
					'Pesan' => 'mengomentari status anda',
					'Tgl' => date('Y-m-d H:i:s'),
					'ID_Penerima' => $status['ID_user'],
					'Penerima' => 'user',
					'url' => site_url('user/status/komentar/'.$id_status.'/notification'),
					'status' => 0
				);

				$this->model_notifikasi->simpan_data($data2);
			}


			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/status/komentar/'.$id_status);
		}

		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['status'] = $this->model_status->ambil_data($id_status);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/komentar';
		$this->load->view('frontend/template', $data);
	}

	public function ubahKomentar($id_status, $id_komentar)
	{
		if ($this->form_validation->run('action_komentar_ubah') === TRUE)
		{
			$data = array(
				'ID_Status' => $id_status,
				'ID_user' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'KOMENTAR' => $this->input->post('komentar'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_komentar->ubah_data($id_komentar, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('user/status/komentar/'.$id_status);
		}
		else
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
			$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
			$data['komentar'] = $this->model_komentar->ambil_data($id_komentar);
			$data['groups'] = $this->model_group->ambil_data_parent();
			$data['child_groups'] = $this->model_group->ambil_data_child();
			$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
			$data['content'] = 'frontend/page/edit_komentar';
			$this->load->view('frontend/template', $data);
		}
	}

	public function hapusKomentar($id_status, $id_komentar)
	{
		$this->model_komentar->hapus_data($id_komentar);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('user/status/komentar/'.$id_status);
	}


	// GROUP TIMELINE
	public function tambahStatusGroup($id_group)
	{
		if ($this->form_validation->run('action_group_status_simpan') === TRUE)
		{
			$data = array(
				'ID_GROUP' => $id_group,
				'ID_User' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'User_status' => $this->input->post('user_status'),
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_status_group->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('group/timeline/id/'.$id_group);
		}

		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['statuss'] = $this->model_status_group->ambil_data_timeline($id_user);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/timeline';
		$this->load->view('frontend/template', $data);
	}

	public function ubahStatusGroup($id_status)
	{
		if ($this->form_validation->run('action_group_status_ubah') === TRUE)
		{
			$data = array(
				'ID_user' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'User_status' => $this->input->post('user_status'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_status_group->ubah_data($id_status, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('user/timeline');
		}
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['status'] = $this->model_status_group->ambil_data($id_status);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/edit_status_group';
		$this->load->view('frontend/template', $data);
	}

	public function hapusStatusGroup($id_status)
	{
		$this->model_status_group->hapus_data($id_status);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('user/timeline');
	}

	public function tambahKomentarGroup($id_status)
	{
		if ($this->form_validation->run('action_group_komentar_simpan') === TRUE)
		{
			$data = array(
				'ID_Group_Status' => $id_status,
				'ID_user' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'KOMENTAR' => $this->input->post('komentar'),
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_komentar_group->simpan_data($data);

			$status = $this->model_status_group->ambil_data($id_status);
			if ($status['ID_user'] != $this->session->userdata('id_user')) {
				$data2 = array(
					'ID_User' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
					'ID_Status' => $id_status,
					'Pesan' => 'mengomentari status group',
					'Tgl' => date('Y-m-d H:i:s'),
					'ID_Penerima' => $status['ID_GROUP'],
					'Penerima' => 'group',
					'url' => site_url('group/status/komentar/'.$id_status.'/notification'),
					'status' => 0
				);

				$this->model_notifikasi->simpan_data($data2);
			}

			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('group/status/komentar/'.$id_status);
		}

		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['status'] = $this->model_status->ambil_data($id_status);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/komentar';
		$this->load->view('frontend/template', $data);
	}

	public function ubahKomentarGroup($id_status, $id_komentar)
	{
		if ($this->form_validation->run('action_group_komentar_ubah') === TRUE)
		{
			$data = array(
				'ID_Group_Status' => $id_status,
				'ID_user' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'KOMENTAR' => $this->input->post('komentar'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_komentar_group->ubah_data($id_komentar, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('group/status/komentar/'.$id_status);
		}
		else
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
			$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
			$data['komentar'] = $this->model_komentar_group->ambil_data($id_komentar);
			$data['groups'] = $this->model_group->ambil_data_parent();
			$data['child_groups'] = $this->model_group->ambil_data_child();
			$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
			$data['content'] = 'frontend/page/edit_komentar_group';
			$this->load->view('frontend/template', $data);
		}
	}

	public function hapusKomentarGroup($id_status, $id_komentar)
	{
		$this->model_komentar_group->hapus_data($id_komentar);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('group/status/komentar/'.$id_status);
	}

	// FRIEND REQUEST
	public function tambahkanTeman($id_user)
	{
		$data = array(
				'ID_User_Request' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'ID_User_Received' => $id_user,
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Update' => date('Y-m-d H:i:s')
			);
		$this->model_karyawan->tambah_pertemanan($data);
		$this->session->set_flashdata('message_success', 'Berhasil menambahkan pertemanan.');
		redirect('user/friends');
	}


	// JOIN GROUP

	public function joinGroup($id_group)
	{
		$data = array(
				'ID_user' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'ID_GROUP' => $id_group,
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
		$this->model_group->tambah_anggota($data);
		$this->session->set_flashdata('message_success', 'Berhasil bergabung dengan group.');
		redirect('group/timeline/id/'.$id_group);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login_admin/login_form');
	}
}
