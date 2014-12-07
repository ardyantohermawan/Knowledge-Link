<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		if ($this->session->userdata('akses') != 1)
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
							'model_komentar',

						));
	}
	
	function index()
	{
		$data['content'] = 'admin/page/dashboard/view';
		$this->load->view('admin/template', $data);
	}
}