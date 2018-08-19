<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['subtitle'] = '';
		$data['content'] = 'dashboard';
		$this->load->view('template',$data);
	}
}
