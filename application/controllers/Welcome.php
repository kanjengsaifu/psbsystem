<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';
		$data['subtitle'] = 'PPDB SMK';
		$data['content'] = 'frontend/home';
		$this->load->view('frontend/template',$data);
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */