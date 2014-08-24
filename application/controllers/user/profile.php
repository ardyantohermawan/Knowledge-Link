<?php

class Profile extends CI_Controller
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
							'model_user',
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
		$data['content'] = 'frontend/page/profile';
		$this->load->view('frontend/template', $data);
	}

	public function detail($id='')
	{
		$id_user = ($id != '') ? $id : $this->session->userdata('id_user');
		$user = $this->model_user->ambil_data($id);
		$nik_karyawan = $user['NIK'];

		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['profile_karyawan'] = $this->model_karyawan->ambil_data_per_karyawan($nik_karyawan);
		$data['pendidikans'] = $this->model_pendidikan->ambil_data_per_karyawan($nik);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['statuss'] = $this->model_status->ambil_data_timeline($id_user);
		$data['content'] = 'frontend/page/profile_karyawan';
		$this->load->view('frontend/template', $data);
	}

	public function simpan()
	{
		if ($this->form_validation->run('karyawan') === TRUE)
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$data = array(
				'NIK' => $nik,
				'KODE_UNIT_KERJA' => $this->input->post('kode_unit_kerja'),
				'NAMA' => $this->input->post('nama'),
				'POSCODE' => $this->input->post('poscode'),
				'JABATAN' => $this->input->post('jabatan'),
				'POSTITLE' => $this->input->post('postitle'),
				'UNITKERJA' => $this->input->post('unitkerja'),
				'WORKLOC' => $this->input->post('workloc')
			);
			$this->model_karyawan->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/profile');
		}
		else
		{
			
		}

	}

	public function edit()
	{
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['pendidikans'] = $this->model_pendidikan->ambil_data_per_karyawan($nik);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['content'] = 'frontend/page/edit_profile';
		$this->load->view('frontend/template', $data);
	}

}
