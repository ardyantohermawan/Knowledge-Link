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