<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_status extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
		$query = $this->db->get('m_status');
	
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
		$this->db->where('ID_Status', $id);
		$this->db->join('m_user','m_user.ID_user=m_status.ID_user');
		$this->db->join('karyawan','karyawan.NIK=m_user.NIK');
		$query = $this->db->get('m_status');
	
		if ($query->num_rows() === 1)
		{
			return $query->row_array();
		}
		else
		{
			return array();	
		}	
	}

	public function ambil_list_teman($id_user)
	{
		$this->db->where('ID_User_Request', $id_user);
		$query = $this->db->get('permintaan_teman');
	
		if ($query->num_rows() >= 0)
		{
			$list = array();
			foreach ($query->result_array() as $row)
			{
				$list[] = $row['ID_User_Received'];
			}
			array_push($list, $this->session->userdata('id_user'));
			return $list;
		}
		else
		{
			return array();	
		}
	}

	function ambil_data_timeline($id_user)
	{
		$list_friends = $this->ambil_list_teman($id_user);
		
		if (count($list_friends) == 0) return array();
		
		$this->db->select('m_user.*, karyawan.*, m_status.*, COUNT(m_komentar.ID_komentar) as jumlah_komentar');
		$this->db->join('m_user','m_user.ID_user=m_status.ID_user','left');
		$this->db->join('karyawan','karyawan.NIK=m_user.NIK','left');
		$this->db->join('m_komentar','m_komentar.ID_Status=m_status.ID_Status','left');
		$this->db->where_in('m_user.ID_user', $list_friends);
		$this->db->group_by('m_status.ID_Status');
		$this->db->order_by('m_status.Create_Date','DESC');
		$query = $this->db->get('m_status');
	
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return array();	
		}	
	}

	function ambil_data_timeline_sendiri($id_user)
	{	
		$this->db->select('m_user.*, karyawan.*, m_status.*, COUNT(m_komentar.ID_komentar) as jumlah_komentar');
		$this->db->join('m_user','m_user.ID_user=m_status.ID_user','left');
		$this->db->join('karyawan','karyawan.NIK=m_user.NIK','left');
		$this->db->join('m_komentar','m_komentar.ID_Status=m_status.ID_Status','left');
		$this->db->where('m_user.ID_user', $id_user);
		$this->db->group_by('m_status.ID_Status');
		$this->db->order_by('m_status.Create_Date','DESC');
		$query = $this->db->get('m_status');
	
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
		$this->db->insert('m_status', $data);	
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('ID_Status', $id);
		$this->db->update('m_status', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('ID_Status', $id);
		$this->db->delete('m_status');
	}
}
?>