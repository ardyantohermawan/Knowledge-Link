<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('index2');
		$this->load->helper('url');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */