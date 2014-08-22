<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_user extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
		$query = $this->db->get('m_user');
	
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
		$this->db->where('ID_user', $id);
		$query = $this->db->get('m_user');
	
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
		$this->db->insert('m_user', $data);	
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('ID_user', $id);
		$this->db->update('m_user', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('ID_user', $id);
		$this->db->delete('m_user');
	}
}
?>