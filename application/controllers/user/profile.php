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
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
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
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['content'] = 'frontend/page/profile_karyawan';
		$this->load->view('frontend/template', $data);
	}

	public function edit()
	{
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['pendidikans'] = $this->model_pendidikan->ambil_data_per_karyawan($nik);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['content'] = 'frontend/page/edit_profile';
		$this->load->view('frontend/template', $data);
	}

	public function simpan_profile()
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
			$this->edit();			
		}
	}

	public function simpan_pendidikan()
	{
		if ($this->form_validation->run('pendidikan_ubah') === TRUE)
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$data = array(
				'NIK' => $nik,
				'KODE_UNIT_KERJA' => $this->input->post('kode_unit_kerja'),
				'EDUCATION_LEVEL_NO' => $this->input->post('education_level_no'),
				'EDUCATION_LEVEL_NAME' => $this->input->post('education_level_name'),
				'EDUCATION_FIELD_NO' => $this->input->post('education_field_no'),
				'EDUCATION_FIELD_NAME' => $this->input->post('education_field_name'),
				'LOCATION' => $this->input->post('location'),
				'START_YEAR' => $this->input->post('start_year'),
				'END_YEAR' => $this->input->post('end_year'),
				'G_P_A' => $this->input->post('g_p_a'),
				'ACHIEVEMENT' => $this->input->post('achievement'),
				'REMARK' => $this->input->post('remark'),
				'EDU_INSTITUTION_SEQ_NO' => $this->input->post('edu_institution_seq_no'),
				'EDU_INSTITUTION_NAME' => $this->input->post('edu_institution_name'),
				'EDUCATION_LVL_RECEIVED' => $this->input->post('education_lvl_received'),
				'PREFERED_EDUCATION' => $this->input->post('prefered_education'),
				'ROWVERSION' => $this->input->post('rowversion'),
				'ANIK_BARU' => $this->input->post('anik_baru'),
			);
			$this->model_pendidikan->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('admin/pendidikan');
		}
		else
		{
			$this->edit();			
		}
	}

	public function simpan_pengalaman_kerja()
	{
		if ($this->form_validation->run('pengalaman_kerja_ubah') === TRUE)
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$data = array(
				'NIK' => $nik,
				'KODE_UNIT_KERJA' => $this->input->post('kode_unit_kerja'),
				'NO_SK' => $this->input->post('no_sk'),
				'TGL_SK' => $this->input->post('tgl_sk'),
				'MA_TMT' => $this->input->post('ma_tmt'),
				'MKT_GOL' => $this->input->post('mkt_gol'),
				'MKB_GOL' => $this->input->post('mkb_gol'),
				'KODE_UPDATE' => $this->input->post('kode_update'),
				'NM_JBT' => $this->input->post('nm_jbt'),
				'NM_PL' => $this->input->post('nm_pl'),
				'NM_RU' => $this->input->post('nm_ru'),
				'NM_SI' => $this->input->post('nm_si'),
				'NM_BAG' => $this->input->post('nm_bag'),
				'NM_DEP' => $this->input->post('nm_dep'),
				'NM_KOM' => $this->input->post('nm_kom'),
				'NM_DIR' => $this->input->post('nm_dir'),
				'KETERANGAN' => $this->input->post('keterangan'),
			);
			$this->model_pengalaman_kerja->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('admin/pengalaman_kerja');
		}
		else
		{
			$this->edit();			
		}
	}

	public function simpan_training()
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
			$this->edit();			
		}
	}

}
