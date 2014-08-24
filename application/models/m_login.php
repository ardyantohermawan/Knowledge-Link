<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function ambilPengguna($username, $password)
    {
        $this->db->select('karyawan.*, m_user.*');
        $this->db->join('m_akses','m_akses.ID_AKSES=m_user.ID_AKSES');
        $this->db->join('karyawan','karyawan.NIK=m_user.NIK');
        $this->db->where('m_user.USERNAME', $username);
        $this->db->where('m_user.PASSWORD_USER', $password);
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

    public function dataPengguna($username)
    {
        $this->db->select('NAMA');
        $this->db->join('karyawan','karyawan.NIK=m_user.NIK');
        $this->db->where('USERNAME', $username);
        $query = $this->db->get('m_user');
        return $query->row_array();
    }
  
}  

?>