<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuota extends CI_Controller {

	private $table = "tbl_kuota_pendaftaran";
	private $pktbl = "id_kuota";

	public function __construct()
    {
        parent::__construct();
        $this->load->model('kuota_model','kuota');
        $this->load->model('program_keahlian_model','jurusan');
        $this->load->model('gelombang_model','gelombang');
    }

	public function index()
	{
		$data['title'] = 'Kuota Pendafatran';
		$data['subtitle'] = 'Data';
		$data['query'] = $this->kuota->get_all();
		$data['content'] = 'kuota/data';
		$this->load->view('template',$data);
	}

	public function tambah()
	{
		$data['title'] = 'Kuota Pendafatran';
		$data['subtitle'] = 'Tambah Data';
		if(isset($_POST['simpan'])){
            $this->kuota->simpan();
            $this->session->set_flashdata('info_success','Kuota Pendaftaran berhasil ditambahkan!');
            redirect('admin/kuota/tambah');
		}
		$data['dtjurusan'] =  $this->jurusan->all();
		$data['dtgelombang'] =  $this->gelombang->all();
		$data['content'] = 'kuota/tambah';
		$this->load->view('template',$data);
	}

	public function edit()
	{
		$data['title'] = 'Kuota Pendafatran';
		$data['subtitle'] = 'Ubah Data';
		if(isset($_POST['simpan'])){
            $this->kuota->update();
            redirect('admin/kuota');
		}
		$id              = $this->uri->segment(4);
		$data['row']     = $this->db->get_where($this->table,array($this->pktbl=>$id))->row_array();
		$data['dtjurusan'] =  $this->jurusan->all()->result();
		$data['dtgelombang'] =  $this->gelombang->all()->result();
		$data['content'] = 'kuota/edit';
		$this->load->view('template',$data);
	}

	public function delete()
	{
		$this->db->where($this->pktbl,$this->uri->segment(4));
		$this->db->delete($this->table);
        redirect('admin/kuota');
	}

}

/* End of file kuota.php */
/* Location: ./application/controllers/kuota.php */