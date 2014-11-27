<?php

class Status extends CI_Controller
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
							'model_status_group',
							'model_komentar',
							'model_komentar_group',
						));
	}

	function komentar($id_status)
	{
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['status'] = $this->model_status_group->ambil_data($id_status);
		$data['komentars'] = $this->model_komentar_group->ambil_data_per_status($id_status);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['content'] = 'frontend/page/komentar_group';
		$this->load->view('frontend/template', $data);
	}

}
