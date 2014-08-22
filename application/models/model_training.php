<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_training extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
		$query = $this->db->get('training');
	
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
		$this->db->where('ID_training', $id);
		$query = $this->db->get('training');
	
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
		$query = $this->db->get('training');
	
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
		$this->db->insert('training', $data);	
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('ID_training', $id);
		$this->db->update('training', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('ID_training', $id);
		$this->db->delete('training');
	}
}
?>