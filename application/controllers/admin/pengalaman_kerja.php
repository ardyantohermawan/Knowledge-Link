<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Pengalaman_kerja extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		if ($this->session->userdata('akses') !== 1)
        {
            redirect('login_admin/login_form');
        }
		$this->load->model(array('model_pengalaman_kerja', 'model_karyawan', 'model_unit_kerja'));
	}
	
	function index()
	{
		$data['pengalaman_kerjas'] = $this->model_pengalaman_kerja->ambil_semua_data();
		$data['content'] = 'admin/page/pengalaman_kerja/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['karyawans'] = $this->model_karyawan->ambil_semua_data();
		$data['content'] = 'admin/page/pengalaman_kerja/tambah';
		$this->load->view('admin/template', $data);	
	}
	
	function simpan()
	{
		if ($this->form_validation->run('pengalaman_kerja_simpan') === TRUE)
		{
			$data = array(
				'NIK' => $this->input->post('NIK'),
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
			$this->model_pengalaman_kerja->simpan_data($data);
			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('admin/pengalaman_kerja');
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
		$data['pengalaman_kerja'] = $this->model_pengalaman_kerja->ambil_data($id);
		$data['content'] = 'admin/page/pengalaman_kerja/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id)
	{
		if ($this->form_validation->run('pengalaman_kerja_ubah') === TRUE)
		{
			$data = array(
				'NIK' => $this->input->post('NIK'),
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
			$this->edit($id);
		}
	}
	
	function hapus($id)
	{
		$this->model_pengalaman_kerja->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/pengalaman_kerja');
	}
}