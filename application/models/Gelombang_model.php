<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gelombang_model extends CI_Model {

	private $table = "tbl_fase_pendaftaran";
	private $order_by = "id_fase";
	private $pktbl = "id_fase";

	public function all()
	{
		$query = "SELECT * FROM $this->table ORDER BY $this->order_by DESC";
		return $query = $this->db->query($query);
	}

	public function simpan(){
        $data=array(
                    'tahun_ppdb'   =>  $this->input->post('tahun_ppdb'),
                    'gelombang' =>  $this->input->post('gelombang'),
                    'tanggal_mulai' =>  $this->input->post('tgl_mulai'),
                    'tanggal_selesai' =>  $this->input->post('tgl_selesai')
 				);
        $this->db->insert($this->table,$data);
    }

    function update(){
        $data=array(
                    'tahun_ppdb'   =>  $this->input->post('tahun_ppdb'),
                    'gelombang' =>  $this->input->post('gelombang'),
                    'tanggal_mulai' =>  $this->input->post('tgl_mulai'),
                    'tanggal_selesai' =>  $this->input->post('tgl_selesai')
 				);
        $this->db->where($this->pktbl,$this->input->post('id'));
        $this->db->update($this->table,$data);
    }
	

}

/* End of file program_keahlian_model.php */
/* Location: ./application/models/program_keahlian_model.php */