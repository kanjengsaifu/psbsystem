<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('pendaftar_model','pendaftar');
        $this->load->model('program_keahlian_model','jurusan');
    }

	public function index()
	{
		$data['title'] = 'Formulir Pendaftaran';
		$data['subtitle'] = 'Pendaftaran Baru';
		$data['content'] = 'frontend/form_daftar';
		if(isset($_POST['daftar'])){
			$nisn = $this->input->post('nisn');
			
			$config['upload_path']='./foto_pendaftar/';
            $config['allowed_types']='jpg|png';
            $config['max_size']='1024';
            $this->load->library('upload',$config);
            $this->upload->do_upload();
            $data=  $this->upload->data();
            
            $this->pendaftar->simpan($data['file_name']);

            $this->db->where('nisn',$nisn);
			$query = $this->db->get('tbl_pendaftar');
			if($query->num_rows() > 0)
			{
				foreach ($query->result() as $row ) {
					$sess = array(
								  'nama_lengkap'	=> $row->nama_lengkap,
								  'no_daftar' 		=> $row->no_daftar,
								  'nisn' 			=> $row->nisn,
								);
					$this->session->set_userdata($sess);
				}
			}
            redirect('berhasil_daftar');
		}else{
			$data['dtjurusan'] =  $this->jurusan->all();
			$this->load->view('frontend/template',$data);
		}
	}

}

/* End of file FormulirPendaftaran.php */
/* Location: ./application/controllers/admin/FormulirPendaftaran.php */