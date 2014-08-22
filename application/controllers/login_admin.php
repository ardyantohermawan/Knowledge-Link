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
    
        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('admin/login_administrator');
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $level = $this->input->post('level');
       
            $cek = $this->m_login->ambilPengguna($username, $password, 1, $level);

            if($cek > 0)
            {
                $data_user = $this->m_login->dataPengguna($username);
                $this->session->set_userdata('isLogin', TRUE);
                $this->session->set_userdata('username', $data_user['USERNAME']);
                $this->session->set_userdata('username', $data_user['USERNAME']);
                $this->session->set_userdata('level', $level);
                redirect('admin/akses');
            }
            else
            {
                echo " <script>
    		            alert('Gagal Login: Cek username , password dan level anda!');
    		            history.go(-1);
    		          </script>";        
            }
        }  
    }
  
    public function logout()
    {
        $this->session->sess_destroy(); 
        redirect('login_admin/login_form');
    }
}

?>