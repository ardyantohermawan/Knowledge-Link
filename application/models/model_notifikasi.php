<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_notifikasi extends CI_Model
{
	function ambil_semua_data($id_penerima)
	{
		$query1 = $this->ambil_data_user($id_penerima);
		$query2 = $this->ambil_data_group($id_penerima);
		// var_dump($query2);
		return array_merge($query1, $query2);
	}

	function ambil_data_user($id_penerima)
	{
		$this->db->where('status', 0);
		$this->db->where('ID_Penerima', $id_penerima);
		$this->db->where('Penerima', 'user');
		$this->db->join('m_user','m_user.ID_User=notifikasi.ID_user');
		$this->db->join('karyawan','karyawan.NIK=m_user.NIK');
		$this->db->group_by('notifikasi.ID_Status');
		$this->db->group_by('m_user.ID_User');
		$query = $this->db->get('notifikasi');
	
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return array();	
		}
	}

	function ambil_data_group($id_penerima)
	{
		$this->db->where('status', 0);
		$this->db->where('permintaan_group.ID_User', $id_penerima);
		$this->db->where('Penerima', 'group');
		$this->db->join('m_group','m_group.ID_GROUP=notifikasi.ID_Penerima');
		$this->db->join('permintaan_group','permintaan_group.ID_GROUP=m_group.ID_GROUP');
		$this->db->join('m_user','m_user.ID_User=notifikasi.ID_user');
		$this->db->join('karyawan','karyawan.NIK=m_user.NIK');
		$this->db->group_by('notifikasi.ID_Status');
		$this->db->group_by('m_user.ID_User');
		$query = $this->db->get('notifikasi');
	
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
		$this->db->insert('notifikasi', $data);	
	}
	
	function ubah_data($id_status, $data, $type)
	{
		if ($type == "group")
		{
			$this->db->where('Penerima', 'group');
			$this->db->where('ID_Status', $id_status);
			$this->db->update('notifikasi', $data);
		}
		elseif ($type == "user")
		{
			$this->db->where('Penerima', 'user');
			$this->db->where('ID_Status', $id_status);
			$this->db->update('notifikasi', $data);
		}
		else
		{
			$this->db->where('Penerima', 'user');
			$this->db->where('ID_Status', $id_status);
			$this->db->update('notifikasi', $data);
		}
	}
	
	function hapus_data($id)
	{
		$this->db->where('ID_Pesan', $id);
		$this->db->delete('notifikasi');
	}
}
?>