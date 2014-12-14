<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_album extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
		$this->db->join('m_user', 'm_user.ID_user=user_album.ID_user');
		$this->db->join('karyawan', 'karyawan.NIK=m_user.NIK');
		$this->db->order_by('user_album.Created_Date', 'DESC');
		$query = $this->db->get('user_album');
	
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return array();	
		}
	}

	function ambil_data_foto_per_karyawan($id)
	{
		$this->db->where('Nama_Album','Profile');
		$this->db->where('ID_user', $id);
		$query = $this->db->get('user_album');
	
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return array();	
		}	
	}

	function ambil_data_cover_per_karyawan($id)
	{
		$this->db->where('Nama_Album','Cover');
		$this->db->where('ID_user', $id);
		$query = $this->db->get('user_album');
	
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return array();	
		}	
	}

	function ambil_data($id)
	{
		$this->db->where('ID_User_Album', $id);
		$query = $this->db->get('user_album');
	
		if ($query->num_rows() === 1)
		{
			return $query->row_array();
		}
		else
		{
			return array();	
		}	
	}
	
	function simpan_data($data)
	{
		$this->db->insert('user_album', $data);	
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('ID_User_Album', $id);
		$this->db->update('user_album', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('ID_User_Album', $id);
		$this->db->delete('user_album');
	}
}
?>