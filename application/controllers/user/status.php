<?php

class Status extends CI_Controller
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
							'model_status',
							'model_komentar',
							'model_notifikasi',
							'model_pesan'
						));
	}

	function komentar($id_status, $notif='')
	{
		if ($notif != '')
		{
			$data = array(
						'status' => 1
					);
			$this->model_notifikasi->ubah_data($id_status, $data, 'user');
		}
		
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['status'] = $this->model_status->ambil_data($id_status);
		$data['komentars'] = $this->model_komentar->ambil_data_per_status($id_status);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['jumlah_messages'] = count($this->model_pesan->ambil_data_per_karyawan_belum_dibaca($id_user));
		$data['content'] = 'frontend/page/komentar';
		$this->load->view('frontend/template', $data);

	}

}
