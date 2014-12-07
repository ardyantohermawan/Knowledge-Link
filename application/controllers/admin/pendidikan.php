<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Pendidikan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		if ($this->session->userdata('akses') !== 1)
        {
            redirect('login_admin/login_form');
        }
		$this->load->model(array('model_pendidikan','model_unit_kerja','model_karyawan'));
	}
	
	function index()
	{
		$data['pendidikans'] = $this->model_pendidikan->ambil_semua_data();
		$data['content'] = 'admin/page/pendidikan/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['karyawans'] = $this->model_karyawan->ambil_semua_data();
		$data['content'] = 'admin/page/pendidikan/tambah';
		$this->load->view('admin/template', $data);	
	}
	
	function simpan()
	{
		if ($this->form_validation->run('pendidikan_simpan') === TRUE)
		{
			$data = array(
				'NIK' => $this->input->post('NIK'),
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
			$this->model_pendidikan->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('admin/pendidikan');
		}
		else
		{
			$this->tambah();
		}
	}
	
	function edit($id)
	{
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['karyawans'] = $this->model_karyawan->ambil_semua_data();
		$data['pendidikan'] = $this->model_pendidikan->ambil_data($id);
		$data['content'] = 'admin/page/pendidikan/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id)
	{
		if ($this->form_validation->run('pendidikan_ubah') === TRUE)
		{
			$data = array(
				'NIK' => $this->input->post('NIK'),
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
			$this->edit($id);
		}
	}
	
	function hapus($id)
	{
		$this->model_pendidikan->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/pendidikan');
	}
}