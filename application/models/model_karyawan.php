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

	function ambil_semua_data_user()
	{
		$this->db->select('*');
		$this->db->join('m_user', 'm_user.NIK=karyawan.NIK');
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

	function ambil_semua_data_dan_sertifikasi()
	{
		$this->db->select('*');
		$this->db->join('sertifikasi', 'sertifikasi.NIK=karyawan.NIK', 'LEFT');
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

	public function ambil_list_teman($id_user)
	{
		$this->db->where('ID_User_Request', $id_user);
		$query = $this->db->get('permintaan_teman');
	
		if ($query->num_rows() > 0)
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

	function ambil_data_teman($id_user)
	{

		$list_friends = $this->ambil_list_teman($id_user);
		
		if (count($list_friends) == 0) return array();

		$this->db->where_in('m_user.ID_user', $list_friends);
		$this->db->join('m_user','m_user.NIK=karyawan.NIK');
		$this->db->join('m_unit_kerja','m_unit_kerja.KODE_UNIT_KERJA=karyawan.KODE_UNIT_KERJA');
		$this->db->join('m_group','m_group.ID_GROUP=m_user.ID_GROUP');
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

	public function ambil_data_bukan_teman($id_user)
	{
		$list_friends = $this->ambil_list_teman($id_user);
		
		$list_friends = (count($list_friends) == 0) ? array($id_user) : $list_friends;

		$this->db->where_not_in('m_user.ID_user', $list_friends);
		$this->db->join('m_user','m_user.NIK=karyawan.NIK');
		$this->db->join('m_unit_kerja','m_unit_kerja.KODE_UNIT_KERJA=karyawan.KODE_UNIT_KERJA');
		$this->db->join('m_group','m_group.ID_GROUP=m_user.ID_GROUP');
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

	function simpan_data($data)
	{
		$this->db->insert('karyawan', $data);	
	}

	function tambah_pertemanan($data)
	{
		$this->db->insert('permintaan_teman', $data);	
	}

	public function hapus_pertemanan($id_request, $id_received)
	{
		$this->db->where('ID_User_Request', $id_request);
		$this->db->where('ID_User_Received', $id_received);
		$this->db->delete('permintaan_teman');		
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