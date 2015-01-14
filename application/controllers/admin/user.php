<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		if ($this->session->userdata('akses') != 1)
        {
            redirect('login_admin/login_form');
        }
		$this->load->model(array('model_user', 'model_karyawan', 'model_akses', 'model_unit_kerja', 'model_group', 'model_sertifikasi'));
	}
	
	function index()
	{
		$data['users'] = $this->model_user->ambil_semua_data();
		$data['content'] = 'admin/page/user/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['karyawans'] = $this->model_karyawan->ambil_semua_data_dan_sertifikasi();
		$data['sertifikasis'] = $this->model_sertifikasi->array_sertifikasi();
		$data['aksess'] = $this->model_akses->ambil_semua_data();
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['groups'] = $this->model_group->ambil_semua_data();
		$data['content'] = 'admin/page/user/tambah';
		$this->load->view('admin/template', $data);	
		// var_dump($data['sertifikasis']);
	}
	
	function simpan()
	{
		if ($this->form_validation->run('user_simpan') === TRUE)
		{
			$pics = '';
			$pics_min = '';
			$config['upload_path'] = realpath(APPPATH . '../users');
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2048';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file'))
			{
				$image_data = $this->upload->data();  // image data
                $pics = $image_data['file_name'];
                $pics_min = $image_data['raw_name'].'_thumb'.$image_data['file_ext'];
                $config['image_library'] = 'gd2';
				$config['source_image'] = realpath(APPPATH. '../users/'.$image_data['client_name']);
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 80;
				$config['height'] = 80;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
			}

			$data = array(
				'NIK' => $this->input->post('NIK'),
				'KODE_UNIT_KERJA' => $this->input->post('kode_unit_kerja'),
				'ID_GROUP' => $this->input->post('id_group'),
				'ID_AKSES' => $this->input->post('id_akses'),
				'USERNAME' => $this->input->post('username'),
				'PASSWORD_USER' => sha1($this->input->post('password_user')),
				'GAMBAR_PROFIL' => 'users/'.$pics,
				'GAMBAR_PROFIL_KECIL' => 'users/'.$pics_min,
			);

			$this->model_user->simpan_data($data);

			if ($this->input->post('id_akses') == 5)
			{
				$user = $this->model_user->ambil_id($this->input->post('NIK'));
				if (isset($user['ID_user']))
				{
					$data2 = array(
							'ID_user' => ($user['ID_user']) ? $user['ID_user'] : 1,
							'ID_GROUP' => $this->input->post('id_group'),
							'Create_Date' => date('Y-m-d H:i:s'),
							'Last_Date' => date('Y-m-d H:i:s')
						);
					$this->model_group->tambah_anggota($data2);
				}
			}

			$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
			redirect('admin/user');
		}
		else
		{
			$this->tambah();
		}
	}
	
	function edit($id)
	{
		$data['karyawans'] = $this->model_karyawan->ambil_semua_data_dan_sertifikasi();
		$data['sertifikasis'] = $this->model_sertifikasi->array_sertifikasi();
		$data['aksess'] = $this->model_akses->ambil_semua_data();
		$data['unit_kerjas'] = $this->model_unit_kerja->ambil_semua_data();
		$data['groups'] = $this->model_group->ambil_semua_data();
		$data['user'] = $this->model_user->ambil_data($id);
		$data['content'] = 'admin/page/user/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id)
	{
		if ($this->form_validation->run('user_ubah') === TRUE)
		{
			$data = array(
				'NIK' => $this->input->post('NIK'),
				'KODE_UNIT_KERJA' => $this->input->post('kode_unit_kerja'),
				'ID_GROUP' => $this->input->post('id_group'),
				'ID_AKSES' => $this->input->post('id_akses'),
				'USERNAME' => $this->input->post('username'),
			);
			
			if ($this->input->post('password_user') != '')
			{
				$data['PASSWORD_USER'] = sha1($this->input->post('password_user'));
			}

			$this->model_user->ubah_data($id, $data);

			if ($this->input->post('id_akses') == 5)
			{
				$user = $this->model_user->ambil_id($this->input->post('NIK'));
				if (isset($user['ID_user']))
				{
					$data2 = array(
							'ID_user' => ($user['ID_user']) ? $user['ID_user'] : 1,
							'ID_GROUP' => $this->input->post('id_group'),
							'Create_Date' => date('Y-m-d H:i:s'),
							'Last_Date' => date('Y-m-d H:i:s')
						);
					$this->model_group->tambah_anggota($data2);
				}
			}
			
			$this->session->set_flashdata('message_success', 'Data berhasil diubah.');
			redirect('admin/user');
		}
		else
		{
			$this->edit($id);
		}
	}
	
	function hapus($id)
	{
		$this->model_user->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/user');
	}
}