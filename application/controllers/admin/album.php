<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Album extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses') != 1)
        {
            redirect('login_admin/login_form');
        }
		$this->load->model('model_album');
		$this->load->model('model_karyawan');
		$this->load->model('model_user');
	}
	
	function index()
	{
		$data['albums'] = $this->model_album->ambil_semua_data();
		$data['content'] = 'admin/page/album/view';
		$this->load->view('admin/template', $data);
	}
	
	function tambah()
	{
		$data['karyawans'] = $this->model_karyawan->ambil_semua_data_user();
		$data['content'] = 'admin/page/album/tambah';
		$this->load->view('admin/template', $data);	
	}
	
	function simpan()
	{
		if (isset($_FILES['file']))
		{
			$id = $this->input->post('user');
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

                if ($this->input->post('album') == 'Profile')
                {
	                $pics_min = $image_data['raw_name'].'_thumb'.$image_data['file_ext'];
	                $config['image_library'] = 'gd2';
					$config['source_image'] = realpath(APPPATH. '../users/'.$image_data['file_name']);
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 80;
					$config['height'] = 80;

					$this->load->library('image_lib', $config);

					$this->image_lib->resize();
                	
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

					// update foto profile
					$data3 = array(
						'GAMBAR_PROFIL' => 'users/'.$pics,
						'GAMBAR_PROFIL_KECIL' => 'users/'.$pics_min,
					);
					$this->model_user->ubah_data($id, $data3);

					$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
					redirect('admin/album');
                }
                else
                {
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

					// update sampul foto
					$data3 = array(
						'GAMBAR_COVER_FOTO' => 'users/'.$pics
					);
					$this->model_user->ubah_data($id, $data3);

					$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
					redirect('admin/album');
                }

			}
			else
			{
				$this->session->set_flashdata('message_error', 'Data gagal ditambahkan.');
				redirect('admin/album/tambah');
			}
		}
		else
		{
			$this->tambah();
		}
	}
	
	function edit($id)
	{
		$data['karyawans'] = $this->model_karyawan->ambil_semua_data_user();
		$data['album'] = $this->model_album->ambil_data($id);
		$data['content'] = 'admin/page/album/edit';
		$this->load->view('admin/template', $data);
	}
	
	function ubah($id_foto)
	{
		if (isset($_FILES['file']))
		{
			$id = $this->input->post('user');
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

                if ($this->input->post('album') == 'Profile')
                {
	                $pics_min = $image_data['raw_name'].'_thumb'.$image_data['file_ext'];
	                $config['image_library'] = 'gd2';
					$config['source_image'] = realpath(APPPATH. '../users/'.$image_data['file_name']);
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 80;
					$config['height'] = 80;

					$this->load->library('image_lib', $config);

					$this->image_lib->resize();
                	
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
					$this->model_album->ubah_data($id_foto, $data);

					// update foto profile
					$data3 = array(
						'GAMBAR_PROFIL' => 'users/'.$pics,
						'GAMBAR_PROFIL_KECIL' => 'users/'.$pics_min,
					);
					$this->model_user->ubah_data($id, $data3);

					$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
					redirect('admin/album');
                }
                else
                {
                	$data = array(
						'ID_user' => $id,
						'Nama_Album' => 'Cover',
						'Nama_Foto' => 'users/'.$pics,
						'Nama_Foto_Kecil' => '',
						'Status' => 0,
						'Created_Date' => date('Y-m-d H:i:s'),
						'Last_Updated' => date('Y-m-d H:i:s'),
					);

					$this->model_album->ubah_data($id_foto, $data);

					// update sampul foto
					$data3 = array(
						'GAMBAR_COVER_FOTO' => 'users/'.$pics
					);
					$this->model_user->ubah_data($id, $data3);

					$this->session->set_flashdata('message_success', 'Data berhasil ditambahkan.');
					redirect('admin/album');
                }

			}
			else
			{
				$this->session->set_flashdata('message_error', 'Data gagal ditambahkan.');
				redirect('admin/album/tambah');
			}
		}
		else
		{
			$this->edit($id_foto);
		}
	}
	
	function hapus($id)
	{
		$this->model_album->hapus_data($id);
		$this->session->set_flashdata('message_success', 'Data berhasil dihapus.');
		redirect('admin/album');
	}
}