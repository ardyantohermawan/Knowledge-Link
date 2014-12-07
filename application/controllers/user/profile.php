<?php

class Profile extends CI_Controller
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
							'model_sertifikasi',
							'model_pengalaman_kerja',
							'model_group',
							'model_status',
							'model_user',
							'model_album',
							'model_notifikasi'
						));
	}

	function index()
	{
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$minat = $this->model_user->ambil_data($id_user);

		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['pendidikans'] = $this->model_pendidikan->ambil_data_per_karyawan($nik);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['sertifikasis'] = $this->model_sertifikasi->ambil_data_per_karyawan($nik);
		$data['statuss'] = $this->model_status->ambil_data_timeline_sendiri($id_user);
		$data['minats'] = explode(',', $minat['MINAT']);
		$data['list_minats'] = $this->model_user->ambil_minat($id_user);
		$data['foto_albums'] = $this->model_album->ambil_data_foto_per_karyawan($id_user);
		$data['cover_albums'] = $this->model_album->ambil_data_cover_per_karyawan($id_user);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
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
		$data['sertifikasis'] = $this->model_sertifikasi->ambil_data_per_karyawan($nik);
		$data['statuss'] = $this->model_status->ambil_data_timeline_sendiri($id_user);
		$data['list_minats'] = $this->model_user->ambil_minat($id_user);
		$data['foto_albums'] = $this->model_album->ambil_data_foto_per_karyawan($id_user);
		$data['cover_albums'] = $this->model_album->ambil_data_cover_per_karyawan($id_user);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/profile_karyawan';
		$this->load->view('frontend/template', $data);
	}

	public function edit()
	{
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$minat = $this->model_user->ambil_data($id_user);

		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['pendidikans'] = $this->model_pendidikan->ambil_data_per_karyawan($nik);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['minats'] = explode(',', $minat['MINAT']);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/edit_profile';
		$this->load->view('frontend/template', $data);
	}

	public function simpanFotoProfile($id)
	{
		if (isset($_FILES['file']))
		{
			$pics = '';
			$pics_min = '';
			$config['file_name'] = $id.'_'.date('YmdHis');
			$config['upload_path'] = realpath(APPPATH . '../users');
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2048';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file'))
			{

				$image_data = $this->upload->data();  // image data
                $pics = $image_data['raw_name'].$image_data['file_ext'];
                $pics_min = $image_data['raw_name'].'_thumb'.$image_data['file_ext'];
                $config['image_library'] = 'gd2';
				$config['source_image'] = realpath(APPPATH. '../users/'.$image_data['file_name']);
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 80;
				$config['height'] = 80;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
			}
			else
			{
				$this->session->set_flashdata('message_error', 'Data gagal ditambahkan.');
				redirect('user/profile/edit');
			}

			// data foto
			$data = array(
				'ID_user' => $id,
				'Nama_Album' => 'Profile',
				'Nama_Foto' => 'users/'.$pics,
				'Nama_Foto_Kecil' => 'users/'.$pics_min,
				'Status' => 0,
				'Created_Date' => date('Y-m-d H:i:s'),
				'Last_Updated' => date('Y-m-d H:i:s'),
			);

			$this->model_album->simpan_data($data);

			// update status
			$data2 = array(
				'ID_user' => ($id == '') ? $id : $this->session->userdata('id_user'),
				'User_status' => 'Mengubah foto profile <br/> <img src="'.base_url().'users/'.$pics.'" width="480">',
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_status->simpan_data($data2);

			// update foto profile
			$data2 = array(
				'GAMBAR_PROFIL' => 'users/'.$pics,
				'GAMBAR_PROFIL_KECIL' => 'users/'.$pics_min,
			);
			$this->model_user->ubah_data($id, $data2);

			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/profile/edit');
		}
		else
		{
			$this->edit();
		}
	}

	public function simpanFotoCover($id)
	{
		if (isset($_FILES['file']))
		{
			$pics = '';
			$pics_min = '';
			$config['file_name'] = $id.'_'.date('YmdHis');
			$config['upload_path'] = realpath(APPPATH . '../users');
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2048';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file'))
			{
				$image_data = $this->upload->data();  // image data
                $pics = $image_data['raw_name'].$image_data['file_ext'];
			}
			else
			{
				$this->session->set_flashdata('message_error', 'Data gagal ditambahkan.');
				redirect('user/profile/edit');
			}

			$data = array(
				'ID_user' => $id,
				'Nama_Album' => 'Cover',
				'Nama_Foto' => 'users/'.$pics,
				'Nama_Foto_Kecil' => '',
				'Status' => 0,
				'Created_Date' => date('Y-m-d H:i:s'),
				'Last_Updated' => date('Y-m-d H:i:s'),
			);

			$this->model_album->simpan_data($data);

			// update status
			$data2 = array(
				'ID_user' => ($id == '') ? $id : $this->session->userdata('id_user'),
				'User_status' => 'Mengubah sampul foto <br/> <img src="'.base_url().'users/'.$pics.'" width="640">',
				'Create_Date' => date('Y-m-d H:i:s'),
				'Last_Date' => date('Y-m-d H:i:s')
			);
			$this->model_status->simpan_data($data2);

			// update sampul foto
			$data2 = array(
				'GAMBAR_COVER_FOTO' => 'users/'.$pics
			);
			$this->model_user->ubah_data($id, $data2);

			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/profile/edit');
		}
		else
		{
			$this->edit();
		}
	}

	public function simpan_profile($id)
	{
		if ($this->form_validation->run('karyawan_ubah') === TRUE)
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
			$this->model_karyawan->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('user/profile/edit');
		}
		else
		{
			$this->edit();			
		}
	}

	public function simpan_minat($id)
	{
		if ($this->form_validation->run('profile_minat') === TRUE)
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$data = array(
				'MINAT' => implode(',', $this->input->post('minat'))
			);
			$this->model_user->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('user/profile/edit');
		}
		else
		{
			$this->edit();			
		}
	}

	public function simpan_pendidikan()
	{
		if ($this->form_validation->run('profile_pendidikan_simpan') === TRUE)
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$data = array(
				'NIK' => $nik,
				'KODE_UNIT_KERJA' => $this->session->userdata('KODE_UNIT_KERJA'),
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
			$this->model_pendidikan->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/profile/edit');
		}
		else
		{
			$this->edit();			
		}
	}

	public function edit_pendidikan($id)
	{
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['pendidikan'] = $this->model_pendidikan->ambil_data($id);
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_data_per_karyawan($nik);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/edit_profile_pendidikan';
		$this->load->view('frontend/template', $data);
	}

	public function ubah_pendidikan($id)
	{
		if ($this->form_validation->run('profile_pendidikan_ubah') === TRUE)
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$data = array(
				'NIK' => $nik,
				'KODE_UNIT_KERJA' => $this->session->userdata('KODE_UNIT_KERJA'),
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
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/profile/edit');
		}
		else
		{
			$this->edit_pendidikan($id);		
		}
	}

	public function simpan_pengalaman_kerja()
	{
		if ($this->form_validation->run('profile_pengalaman_kerja_simpan') === TRUE)
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$data = array(
				'NIK' => $nik,
				'KODE_UNIT_KERJA' => $this->session->userdata('KODE_UNIT_KERJA'),
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
			$this->model_pengalaman_kerja->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/profile/edit');
		}
		else
		{
			$this->edit();			
		}
	}

	public function edit_pengalaman_kerja($id)
	{
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['pengalaman_kerja'] = $this->model_pengalaman_kerja->ambil_data($id);
		$data['trainings'] = $this->model_training->ambil_data_per_karyawan($nik);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/edit_profile_pengalaman_kerja';
		$this->load->view('frontend/template', $data);
	}

	public function ubah_pengalaman_kerja($id)
	{
		if ($this->form_validation->run('profile_pengalaman_kerja_ubah') === TRUE)
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$data = array(
				'NIK' => $nik,
				'KODE_UNIT_KERJA' => $this->session->userdata('KODE_UNIT_KERJA'),
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
			redirect('user/profile/edit');
		}
		else
		{
			$this->edit_pengalaman_kerja($id);			
		}
	}

	public function simpan_training()
	{
		if ($this->form_validation->run('profile_training_simpan') === TRUE)
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$data = array(
				'NIK' => $nik,
				'KODE_UNIT_KERJA' => $this->session->userdata('KODE_UNIT_KERJA'),
				'TRAINING_EVENT_ID' => $this->input->post('training_event_id'),
				'COURSE_ID' => $this->input->post('course_id'),
				'NAMA_TRAINING' => $this->input->post('nama_training'),
				'TOPIK' => $this->input->post('topik'),
				'DURASI' => $this->input->post('durasi'),
				'START_DATE' => $this->input->post('start_date'),
				'END_DATE' => $this->input->post('end_date'),
				'TEMPAT' => $this->input->post('tempat'),
				'PENYELENGGARA' => $this->input->post('penyelenggara'),
			);
			$this->model_training->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('user/profile/edit');
		}
		else
		{
			$this->edit();			
		}
	}

	public function edit_training($id)
	{
		$id_user = ($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '1';
		$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
		$data['profile'] = $this->model_karyawan->ambil_data_per_karyawan($nik);
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['training'] = $this->model_training->ambil_data($id);
		$data['groups'] = $this->model_group->ambil_data_parent();
		$data['child_groups'] = $this->model_group->ambil_data_child();
		$data['notifications'] = $this->model_notifikasi->ambil_semua_data($id_user);
		$data['content'] = 'frontend/page/edit_profile_training';
		$this->load->view('frontend/template', $data);
	}

	public function ubah_training($id)
	{
		if ($this->form_validation->run('profile_training_ubah') === TRUE)
		{
			$nik = ($this->session->userdata('NIK')) ? $this->session->userdata('NIK') : 'T535370';
			$data = array(
				'NIK' => $nik,
				'KODE_UNIT_KERJA' => $this->session->userdata('KODE_UNIT_KERJA'),
				'TRAINING_EVENT_ID' => $this->input->post('training_event_id'),
				'COURSE_ID' => $this->input->post('course_id'),
				'NAMA_TRAINING' => $this->input->post('nama_training'),
				'TOPIK' => $this->input->post('topik'),
				'DURASI' => $this->input->post('durasi'),
				'START_DATE' => $this->input->post('start_date'),
				'END_DATE' => $this->input->post('end_date'),
				'TEMPAT' => $this->input->post('tempat'),
				'PENYELENGGARA' => $this->input->post('penyelenggara'),
			);
			$this->model_training->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('user/profile/edit');
		}
		else
		{
			$this->edit_training($id);			
		}
	}

}
