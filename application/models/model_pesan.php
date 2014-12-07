<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Model_pesan extends CI_Model
{
	function ambil_semua_data()
	{
		$this->db->select('*');
		$query = $this->db->get('pesan');
	
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
		$this->db->where('ID_Pesan', $id);
		$query = $this->db->get('pesan');
	
		if ($query->num_rows() === 1)
		{
			return $query->row_array();
		}
		else
		{
			return array();	
		}	
	}

	function ambil_data_per_karyawan($id_user)
	{
		$this->db->where('ID_Penerima', $id_user);
		$this->db->join('m_user','m_user.ID_user=pesan.ID_Penerima');
		$this->db->join('karyawan','karyawan.NIK=m_user.NIK');
		$query = $this->db->get('pesan');
	
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
		$this->db->insert('pesan', $data);	
	}
	
	function ubah_data($id, $data)
	{
		$this->db->where('ID_Pesan', $id);
		$this->db->update('pesan', $data);	
	}
	
	function hapus_data($id)
	{
		$this->db->where('ID_Pesan', $id);
		$this->db->delete('pesan');
	}
}
?>