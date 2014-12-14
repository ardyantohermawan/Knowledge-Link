<?php

class Messages extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('is_login') !== TRUE)
        {
            redirect('login_admin/login_form');
        }
		$this->load->model(
						array(
							'model_karyawan', 
							'model_unit_kerja', 
							'model_pendidikan', 
							'model_training',
							'model_pengalaman_kerja',
							'model_group',
							'model_notifikasi',
							'model_status',
							'model_pesan',
						));
	}

	function index()
	{
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['pendidikans'] = $this->model_pendidikan->ambil_data_per_karyawan($nik);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['statuss'] = $this->model_status->ambil_data_timeline($id_user);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['friends'] = $this->model_karyawan->ambil_data_teman($id_user);
		$data['messages'] = $this->model_pesan->ambil_data_per_karyawan($id_user);
		$data['jumlah_messages'] = count($this->model_pesan->ambil_data_per_karyawan_belum_dibaca($id_user));
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/view_private_message';
		$this->load->view('frontend/template', $data);
	}

	public function detail($id, $notif='')
	{

		if ($notif != '')
		{
			$data2 = array(
						'status' => 1
					);
			$this->model_pesan->ubah_data($id, $data2);
		}

		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['pendidikans'] = $this->model_pendidikan->ambil_data_per_karyawan($nik);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['statuss'] = $this->model_status->ambil_data_timeline($id_user);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['friends'] = $this->model_karyawan->ambil_data_teman($id_user);
		$data['message'] = $this->model_pesan->ambil_data($id);
		$data['jumlah_messages'] = count($this->model_pesan->ambil_data_per_karyawan_belum_dibaca($id_user));
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/detail_private_message';
		$this->load->view('frontend/template', $data);
	}

	public function buat()
	{
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['pendidikans'] = $this->model_pendidikan->ambil_data_per_karyawan($nik);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['statuss'] = $this->model_status->ambil_data_timeline($id_user);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['friends'] = $this->model_karyawan->ambil_semua_data_user();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['jumlah_messages'] = count($this->model_pesan->ambil_data_per_karyawan_belum_dibaca($id_user));
		$data['content'] = 'frontend/page/create_private_message';
		$this->load->view('frontend/template', $data);
	}

	// private message
	public function tambahPrivateMessage()
	{
		if ($this->form_validation->run('private_message') === TRUE)
		{
			$data = array(
				'ID_user' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'Pesan' => $this->input->post('pesan'),
				'Tgl'  => date('Y-m-d H:i:s'),
				'Subject' => $this->input->post('judul'),
				'ID_Pengirim' => ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : 1,
				'ID_Penerima' => $this->input->post('penerima'),
			);
			$this->model_pesan->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/messages');
		}
		else
		{
			$this->buat();
		}
	}

	public function hapus($id)
	{
		$this->model_pesan->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('user/messages');
	}
}
?>