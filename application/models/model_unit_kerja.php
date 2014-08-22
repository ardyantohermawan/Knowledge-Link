<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_unit_kerja extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
		$query = $this->db->get('m_unit_kerja');
	
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
		$this->db->where('KODE_UNIT_KERJA', $id);
		$query = $this->db->get('m_unit_kerja');
	
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
		$this->db->insert('m_unit_kerja', $data);	
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('KODE_UNIT_KERJA', $id);
		$this->db->update('m_unit_kerja', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('KODE_UNIT_KERJA', $id);
		$this->db->delete('m_unit_kerja');
	}
}
?>