<?php

class Friends extends CI_Controller
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
							'model_pesan'
						));
	}

	function index()
	{
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$id_user = $this->session->userdata('id_user');

		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['pendidikans'] = $this->model_pendidikan->ambil_data_per_karyawan($nik);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();

		$data['friends'] = $this->model_karyawan->ambil_data_teman($id_user);

		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['jumlah_messages'] = count($this->model_pesan->ambil_data_per_karyawan_belum_dibaca($id_user));
		$data['content'] = 'frontend/page/friends';
		$this->load->view('frontend/template', $data);
	}

	public function search()
	{
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$id_user = $this->session->userdata('id_user');

		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['pendidikans'] = $this->model_pendidikan->ambil_data_per_karyawan($nik);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['friends'] = $this->model_karyawan->ambil_data_bukan_teman($id_user);
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['jumlah_messages'] = count($this->model_pesan->ambil_data_per_karyawan_belum_dibaca($id_user));
		$data['content'] = 'frontend/page/friends_search';
		$this->load->view('frontend/template', $data);

	}

}
