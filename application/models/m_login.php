<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  
  public function ambilPengguna($username, $password, $status, $level)
  {
    $this->db->select('*');
    $this->db->join('m_akses','m_akses.ID_AKSES=m_user.ID_AKSES');
    $this->db->where('USERNAME', $username);
    $this->db->where('PASSWORD_USER', $password);
    // $this->db->where('status', $status);
    $this->db->where('m_akses.ID_AKSES', 1);
    $query = $this->db->get('m_user');
    
    return $query->num_rows();
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