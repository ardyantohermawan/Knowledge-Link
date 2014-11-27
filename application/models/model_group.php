<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_group extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
		$query = $this->db->get('m_group');
	
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
		$this->db->where('ID_GROUP', $id);
		$query = $this->db->get('m_group');
	
		if ($query->num_rows() === 1)
		{
			return $query->row_array();
		}
		else
		{
			return array();	
		}	
	}

	function ambil_data_parent()
	{
		$this->db->where('LEVEL_GROUP', 1);
		$query = $this->db->get('m_group');
	
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return array();	
		}	
	}

	function ambil_data_child()
	{
		$this->db->where('LEVEL_GROUP >', 1);
		$query = $this->db->get('m_group');
	
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return array();	
		}	
	}
	
	function simpan_data($data)
	{
		$this->db->insert('m_group', $data);	
	}

	function tambah_anggota($data)
	{
		$this->db->insert('permintaan_group', $data);	
	}

	public function cek_anggota_group($id_group, $id_user)
	{
		$this->db->where('ID_GROUP', $id_group);
		$this->db->where('ID_user', $id_user);
		$query = $this->db->get('permintaan_group');
	
		if ($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function ambil_admin_group($id_group)
	{
		$this->db->where('m_group.ID_GROUP', $id_group);
		$this->db->where('m_akses.ID_AKSES', 5);
		$this->db->join('m_user','m_user.ID_GROUP=m_group.ID_GROUP');
		$this->db->join('m_akses','m_akses.ID_AKSES=m_user.ID_AKSES');
		$this->db->join('karyawan','karyawan.NIK=m_user.NIK');
		$query = $this->db->get('m_group');
	
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return array();
		}
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('ID_GROUP', $id);
		$this->db->update('m_group', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('ID_GROUP', $id);
		$this->db->delete('m_group');
	}
}
?>