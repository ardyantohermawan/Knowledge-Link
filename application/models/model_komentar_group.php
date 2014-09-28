<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_komentar_group extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
		$query = $this->db->get('m_group_komentar');
	
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
		$this->db->where('ID_Group_Komentar', $id);
		$query = $this->db->get('m_group_komentar');
	
		if ($query->num_rows() === 1)
		{
			return $query->row_array();
		}
		else
		{
			return array();	
		}	
	}

	function ambil_data_per_status($id)
	{
		$this->db->join('m_group_komentar','m_group_komentar.ID_Status=m_group_status.ID_Status','left');
		$this->db->join('m_user','m_user.ID_user=m_group_komentar.ID_user','left');
		$this->db->join('karyawan','karyawan.NIK=m_user.NIK','left');
		$this->db->where('m_group_komentar.ID_Status', $id);
		$query = $this->db->get('m_group_status');
	
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
		$this->db->insert('m_group_komentar', $data);	
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('ID_Group_Komentar', $id);
		$this->db->update('m_group_komentar', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('ID_Group_Komentar', $id);
		$this->db->delete('m_group_komentar');
	}
}
?>