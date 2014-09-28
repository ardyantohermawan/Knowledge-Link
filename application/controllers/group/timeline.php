<?php

class Timeline extends CI_Controller
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
							'model_group',
							'model_status',
							'model_status_group',
							'model_komentar_group',
						));
	}

	function id($id_group)
	{
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		
		$data['anggota'] = $this->model_group->cek_anggota_group($id_group, $id_user);
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['statuss'] = $this->model_status_group->ambil_data_timeline($id_group);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['content'] = 'frontend/page/timeline_group';
		$data['id_group'] = $id_group;
		$this->load->view('frontend/template', $data);
	}

}
