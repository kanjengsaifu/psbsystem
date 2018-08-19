<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gelombang extends CI_Controller {

	private $table = "tbl_fase_pendaftaran";
	private $pktbl = "id_fase";

	public function __construct()
    {
        parent::__construct();
        $this->load->model('gelombang_model','gelombang');
    }

	public function index()
	{
		$data['title'] = 'Gelombang Pendafatran';
		$data['subtitle'] = 'Data';
		$data['query'] = $this->gelombang->all();
		$data['content'] = 'gelombang/data';
		$this->load->view('template',$data);
	}

	public function tambah()
	{
		$data['title'] = 'Gelombang';
		$data['subtitle'] = 'Tambah Data';
		if(isset($_POST['simpan'])){
            $this->gelombang->simpan();
            $this->session->set_flashdata('info_success','Gelombang Pendaftaran berhasil ditambahkan!');
            redirect('admin/gelombang/tambah');
		}
		$data['content'] = 'gelombang/tambah';
		$this->load->view('template',$data);
	}

	public function edit()
	{
		$data['title'] = 'Gelombang';
		$data['subtitle'] = 'Ubah Data';
		if(isset($_POST['simpan'])){
            $this->gelombang->update();
            redirect('admin/gelombang');
		}
		$id              = $this->uri->segment(4);
		$data['row']     = $this->db->get_where($this->table,array($this->pktbl=>$id))->row_array();
		$data['content'] = 'gelombang/edit';
		$this->load->view('template',$data);
	}

	public function delete()
	{
		$this->db->where($this->pktbl,$this->uri->segment(4));
		$this->db->delete($this->table);
        redirect('admin/gelombang');
	}

}

/* End of file gelombang.php */
/* Location: ./application/controllers/gelombang.php */