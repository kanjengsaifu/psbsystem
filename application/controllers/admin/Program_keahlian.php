<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_keahlian extends CI_Controller {

	private $table = "tbl_jurusan";
	private $pktbl = "id_jurusan";

	public function __construct()
    {
        parent::__construct();
        $this->load->model('program_keahlian_model','jurusan');
    }

	public function index()
	{
		$data['title'] = 'Program Keahlian';
		$data['subtitle'] = 'Data';
		$data['query'] = $this->jurusan->all();
		$data['content'] = 'program_keahlian/data';
		$this->load->view('template',$data);
	}

	public function tambah()
	{
		$data['title'] = 'Program Keahlian';
		$data['subtitle'] = 'Tambah Data';
		if(isset($_POST['simpan'])){
            $this->form_validation->set_rules('program_keahlian', 'Program Keahlian', 'trim|required');
            $this->form_validation->set_rules('singkatan', 'Singkatan', 'callback_valid_skt');
            if($this->form_validation->run() != false){
                $this->jurusan->simpan();
                $this->session->set_flashdata('info_success','Program Keahlian berhasil ditambahkan!');
                redirect('admin/program_keahlian/tambah');
            }
		}
		$data['content'] = 'program_keahlian/tambah';
		$this->load->view('template',$data);
	}

	function valid_skt($skt)
    {
        if ($this->jurusan->valid_skt($skt) == TRUE)
        {
            $this->session->set_flashdata('info_error','Program Keahlian dengan singkatan '.$skt.' sudah ada!');
            redirect('admin/program_keahlian/tambah');
        }
    }

	public function edit()
	{
		$data['title'] = 'Program Keahlian';
		$data['subtitle'] = 'Ubah Data';
		if(isset($_POST['simpan'])){
            $this->form_validation->set_rules('program_keahlian', 'Program Keahlian', 'trim|required');
            $this->form_validation->set_rules('singkatan', 'Singkatan', 'trim|required');
            if($this->form_validation->run() != false){
                $this->jurusan->update();
                redirect('admin/program_keahlian');
            }
		}
		$id              = $this->uri->segment(4);
		$data['row']     = $this->db->get_where($this->table,array($this->pktbl=>$id))->row_array();
		$data['content'] = 'program_keahlian/edit';
		$this->load->view('template',$data);
	}

	public function delete()
	{
		$this->db->where($this->pktbl,$this->uri->segment(4));
		$this->db->delete($this->table);
        redirect('admin/program_keahlian');
	}

}

/* End of file Program_keahlian.php */
/* Location: ./application/controllers/Program_keahlian.php */