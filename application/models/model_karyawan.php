<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_karyawan extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
		$query = $this->db->get('karyawan');
	
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
		$this->db->where('NIK', $id);
		$query = $this->db->get('karyawan');
	
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
		$this->db->where('karyawan.NIK', $nik);
		$this->db->join('m_user','m_user.NIK=karyawan.NIK');
		$this->db->join('m_unit_kerja','m_unit_kerja.KODE_UNIT_KERJA=karyawan.KODE_UNIT_KERJA');
		$this->db->join('m_group','m_group.ID_GROUP=m_user.ID_GROUP');
		$query = $this->db->get('karyawan');
	
		if ($query->num_rows() > 0)
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
		$this->db->insert('karyawan', $data);	
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('NIK', $id);
		$this->db->update('karyawan', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('NIK', $id);
		$this->db->delete('karyawan');
	}
}
?>