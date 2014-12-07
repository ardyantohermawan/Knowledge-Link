<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Sertifikasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		if ($this->session->userdata('akses') !== 1)
        {
            redirect('login_admin/login_form');
        }
		$this->load->model(array('model_sertifikasi','model_karyawan','model_unit_kerja'));
	}
	
	function index()
	{
		$data['sertifikasis'] = $this->model_sertifikasi->ambil_semua_data();
		$data['content'] = 'admin/page/sertifikasi/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['karyawans'] = $this->model_karyawan->ambil_semua_data();
		$data['content'] = 'admin/page/sertifikasi/tambah';
		$this->load->view('admin/template', $data);	
	}
	
	function simpan()
	{
		if ($this->form_validation->run('sertifikasi_simpan') === TRUE)
		{
			$data = array(
				'NIK' => $this->input->post('NIK'),
				'KODE_UNIT_KERJA' => $this->input->post('kode_unit_kerja'),
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
			$this->model_sertifikasi->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('admin/sertifikasi');
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
		$data['sertifikasi'] = $this->model_sertifikasi->ambil_data($id);
		$data['content'] = 'admin/page/sertifikasi/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id)
	{
		if ($this->form_validation->run('sertifikasi_ubah') === TRUE)
		{
			$data = array(
				'NIK' => $this->input->post('NIK'),
				'KODE_UNIT_KERJA' => $this->input->post('kode_unit_kerja'),
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
			$this->model_sertifikasi->ubah_data($id, $data);
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('admin/sertifikasi');
		}
		else
		{
			$this->edit($id);
		}
	}
	
	function hapus($id)
	{
		$this->model_sertifikasi->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/sertifikasi');
	}
}