<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berhasil_daftar extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Berhasil Daftar Baru';
		$data['subtitle'] = 'Pesan Selamat';
		$data['content'] = 'frontend/berhasil_daftar';
		$this->load->view('frontend/template',$data);
	}

}

/* End of file Berhasil_daftar.php */
/* Location: ./application/controllers/Berhasil_daftar.php */