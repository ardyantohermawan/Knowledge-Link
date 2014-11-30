<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_status_group extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
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
	
	function ambil_data($id)
	{
		$this->db->where('ID_Group_Status', $id);
		$this->db->join('m_user','m_user.ID_user=m_group_status.ID_user');
		$this->db->join('karyawan','karyawan.NIK=m_user.NIK');
		$this->db->order_by('ID_Group_Status','DESC');
		$query = $this->db->get('m_group_status');
	
		if ($query->num_rows() === 1)
		{
			return $query->row_array();
		}
		else
		{
			return array();	
		}	
	}

	function ambil_data_timeline($id_group)
	{
		$this->db->select('m_user.*, karyawan.*, m_group_status.*, COUNT(m_group_komentar.ID_Group_Komentar) as jumlah_komentar');
		$this->db->join('m_group','m_group.ID_GROUP=m_group_status.ID_GROUP','left');
		$this->db->join('m_user','m_user.ID_user=m_group_status.ID_user','left');
		$this->db->join('karyawan','karyawan.NIK=m_user.NIK','left');
		$this->db->join('m_group_komentar','m_group_komentar.ID_Group_Status=m_group_status.ID_Group_Status','left');
		$this->db->where('m_group.ID_GROUP', $id_group);
		$this->db->group_by('m_group_status.ID_Group_Status');
		$this->db->order_by('m_group_status.Create_Date','DESC');
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
		$this->db->insert('m_group_status', $data);	
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('ID_Group_Status', $id);
		$this->db->update('m_group_status', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('ID_Group_Status', $id);
		$this->db->delete('m_group_status');
	}
}
?>