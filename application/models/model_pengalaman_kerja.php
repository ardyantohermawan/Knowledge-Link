<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_pengalaman_kerja extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
		$query = $this->db->get('pengalaman_kerja');
	
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
		$this->db->where('ID_pengalaman_kerja', $id);
		$query = $this->db->get('pengalaman_kerja');
	
		if ($query->num_rows() === 1)
		{
			return $query->row_array();
		}
		else
		{
			return array();	
		}	
	}

	function ambil_data_per_karyawan($nik)
	{
		$this->db->where('NIK', $nik);
		$query = $this->db->get('pengalaman_kerja');
	
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
		$this->db->insert('pengalaman_kerja', $data);	
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('ID_pengalaman_kerja', $id);
		$this->db->update('pengalaman_kerja', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('ID_pengalaman_kerja', $id);
		$this->db->delete('pengalaman_kerja');
	}
}
?>