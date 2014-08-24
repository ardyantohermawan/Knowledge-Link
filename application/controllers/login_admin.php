<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Login_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
  
    public function index()
    {
        $session = $this->session->userdata('isLogin'); 
        if($session == FALSE)
        {
            redirect('login_admin/login_form');
        }
        else
        {
            redirect('admin/akses');
        }
    }
  
    public function login_form()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|sha1|xss_clean');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
    
        if($this->form_validation->run() === TRUE)
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // $level = ($this->input->post('level')) ? $this->input->post('level') : 1;
       
            // $cek = $this->m_login->ambilPengguna($username, $password, $level);
            $cek = $this->m_login->ambilPengguna($username, $password);

            if(count($cek) > 0)
            {
                $this->session->set_userdata('id_user', $cek['ID_user']);
                $this->session->set_userdata('NIK', $cek['NIK']);
                $this->session->set_userdata('NAMA', $cek['NAMA']);
                
                if ($cek['ID_AKSES'] == 1) // Administrator
                {
                    $this->session->set_flashdata('message_success', 'Selamat Datang di halaman administrator.');   
                    redirect('admin/akses');
                }
                else // user biasa
                {
                    $this->session->set_flashdata('message_success', 'Selamat Datang di halaman administrator.');   
                    redirect('user/timeline');
                }
            }
            else
            {
                $this->session->set_flashdata('message_error', 'Username dan password salah. Harap ulangi kembali.');
                redirect('login_admin/login_form');
            }
        }

        $this->load->view('index2');
    }
  
    public function logout()
    {
        $this->session->sess_destroy(); 
        redirect('login_admin/login_form');
    }
}

?>