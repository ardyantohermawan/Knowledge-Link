<?php

class Timeline extends CI_Controller
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
							'model_status_group',
							'model_komentar_group',
							'model_notifikasi'
						));
	}

	function id($id_group)
	{
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		
		$data['anggota'] = $this->model_group->cek_anggota_group($id_group, $id_user);
		$data['admin_group'] = $this->model_group->ambil_admin_group($id_group);
		$data['ahli_group'] = $this->model_group->ambil_ahli_group($id_group);
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['statuss'] = $this->model_status_group->ambil_data_timeline($id_group);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/timeline_group';
		$data['id_group'] = $id_group;
		$this->load->view('frontend/template', $data);
	}

}
